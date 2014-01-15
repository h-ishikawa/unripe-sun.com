<?php

require_once (dirname(__FILE__).'/Db.php');

class Model_News extends Db
{
  public function count ($queries = array(), $options = array()) {
      $options['select'] = 'COUNT(DISTINCT me.id) AS count';
      $result = self::find($queries, $options);
      return (@$result[0]->count ? '' : 0) - 0;
  }

  public function find ($queries = array(), $options = array()) {
      $table = 'news';

      if (@$options['select'] && is_array($options['select'])) {
        $select = implode(', ', $options['select']);
      }

      else if (!@$options['select']) {
        $select = '*';
      }

      if (!@$options['from']) {
        $from = $table;
      }

      if (!@$options['as']) {
        $as = 'me';
      }

      $sql = "SELECT $select FROM $from AS $as";
      $wheres = array();
      $values = array();

      foreach ($queries as $key => $value) {
          if (preg_match('/^EXISTS\s*$/', $key)) {
              if (is_array($value) && isset($value[0])) {
                  $wheres[] = 'EXISTS (' . array_shift($value) . ')';

                  if (count($value) > 0) {
                      $values = array_merge($values, $value);
                  }
              }

              else if (is_string($value)) {
                  $wheres[] = $value;
              }

              continue;
          }

          else if (preg_match('/\./', $key) === 0) {
              $key = "$as.$key";
          }

          if (is_null($value)) {
              $wheres[] = "($key IS NULL)";
          }

          else if ($value === true) {
              $wheres[] = "($key = TRUE)";
          }

          else if ($value === false) {
              $wheres[] = "($key = FALSE)";
          }

          else if (is_array($value) === false) {
              $wheres[] = "($key = ?)";
              $values[] = $value;
          }

          else if (isset($value[0])) {
              $value = array_filter($value);
              if (count($value)) {
                  $wheres[] = sprintf("($key IN (%s))"
                      , implode(', ', array_fill(1, count($value), '?')));
                  $values = array_merge($values, $value);
              }
          }

          else {
              list($operator, $value) = each($value);
              $wheres[] = "($key $operator ?)";
              $values[] = $value;
          }
      }

      /**
       * inner join
       * @param = array(array(TABLE, AS), array(FROM, TO))
       * @see = 'JOIN $table AS $as ON ($form, $as.$to)'
       */
      for ($i = 0; $i < count(@$options['join']); $i += 2) {
          list($inner, $join) = array_slice($options['join'], $i, 2);
          $conditions = array();
          list($table, $_as) = is_array($inner) ? $inner : array($inner, $inner);

          for ($n = 0; $n < count($join); $n += 2) {
              list($field, $on) = array_slice($join, $n, 2);
              $conditions[] = "($_as.$field = $as.$on)";
          }

          $sql .= " JOIN $table AS $_as ON (" . implode(' AND ', $conditions) . ')';
      }

      /**
       * left join
       * @param = array(array(TABLE, AS), array(FROM, TO))
       * @see = 'JOIN $table AS $as ON ($form, $as.$to)'
       */
      for ($i = 0; $i < count(@$options['left.join']); $i += 2) {
          list($inner, $join) = array_slice($options['left.join'], $i, 2);
          $conditions = array();
          list($table, $_as) = is_array($inner) ? $inner : array($inner, $inner);

          for ($n = 0; $n < count($join); $n += 2) {
              list($field, $on) = array_slice($join, $n, 2);
              $conditions[] = "($_as.$field = $as.$on)";
          }

          $sql .= " LEFT JOIN $table AS $_as ON (" . implode(' AND ', $conditions) . ')';
      }

      /**
       * where
       */

      if (count($wheres) > 0) {
          $sql .= ' WHERE ' . implode(' AND ', $wheres);
      }

      /**
       * order
       */

      if (@$options['order']) {
          $orders = array();
          $conditions = is_array($options['order'])
              ? $options['order'] : array($options['order']);

          foreach ($conditions as $condition) {
              $field = '';
              $order = 'ASC';

              if (preg_match('/ IS NULL$/', $condition)) {
                  $field = $condition;
              }

              else if (preg_match('/\s/', $condition)) {
                  list($field, $order) = preg_split('/\s+/', $condition, 2);
              }

              else {
                  $field = $condition;
              }

              if (preg_match('/\./', $field) === 0) {
                  $field = "$field";
              }

              if (strtolower($order) !== 'asc' && strtolower($order) !== 'desc') {
                  $order = 'ASC';
              }

              $orders[] = "$field $order";
          }

          $sql .= ' ORDER BY ' . implode(', ', $orders);
      }

      /**
       * limit offset
       */

      if (is_numeric(@$options['limit']) && $options['limit'] > 0) {
          $sql .= " LIMIT ${options['limit']}";

          if (is_numeric(@$options['offset'])) {
              $sql .= " OFFSET ${options['offset']}";
          }
      }

      $db = parent::getInstance();
      $st = $db->prepare($sql);
      $st->execute($values);
      $this->result = $st->fetchAll(PDO::FETCH_OBJ);

      return $this->result;
  }

  public function findOne ($queries = array(), $options = array()) {
      $options['limit'] = 1;
      $results = self::find($queries, $options);
      return @$results[0];
  }

  public function findById ($id) {
      $table = 'news';
      $db = parent::getInstance();
      $sql = sprintf('SELECT * FROM %s WHERE id = :id', $table);
      $st = $db->prepare($sql);
      $st->bindParam(':id', $id);
      $st->execute();
      return $st->fetchObject();
  }

  public function findByname ($name) {
      $table = 'news';
      $db = parent::getInstance();
      $sql = sprintf('SELECT * FROM %s WHERE name = :name', $table);
      $st = $db->prepare($sql);
      $st->bindParam(':name', $name);
      $st->execute();
      return $st->fetchObject();
  }

  public function insert ($params) {
      $table = 'news';
      $keys = array();
      $values = array();

      foreach ($params as $key => $value) {
          if ($value === 0 || empty($value) === false) {
              $keys[] = $key;
              $values[] = preg_replace('/\r\n|\r/', "\n", $value);
          }
      }

      $sql = sprintf(
          'INSERT INTO %s (%s, created_at) VALUES (%s, null)'
          , $table
          , implode(', ', $keys)
          , implode(', ', array_fill(1, count($keys), '?'))
      );
      $latestId = null;

      try {
          $db = parent::getInstance();
          $db->beginTransaction();

          $st = $db->prepare($sql);
          $st->execute($values);

          $latestId = $db->lastInsertId();
          $db->commit();
      }

      catch (PDOException $e) {
          $db->rollback();
          throw new Exception($e);
      }

      return $latestId - 0;
  }

  public function update ($datum, $queries) {
      $table = 'news';
      $sql = sprintf('UPDATE %s SET ', $table);
      $sets = array();
      $values = array();
      $wheres = array();

      foreach ($datum as $key => $value) {
          $sets[] = "$key = ?";
          $values[] = $value;
      }

      foreach ($queries as $key => $value) {
          if (empty($value)) {
              throw new Exception('empty value');
          }
          $wheres[] = "$key = ?";
          $values[] = $value;
      }

      $sql .= implode(', ', $sets);

      if (count($wheres) > 0) {
          $sql .= ' WHERE ' . implode(' AND ', $wheres);
      }

      try {
          $db = parent::getInstance();
          $db->beginTransaction();

          $st = $db->prepare($sql);
          $st->execute($values);

          $db->commit();
      }

      catch (PDOException $e) {
          $db->rollback();
          throw new Exception($e);
      }

      return true;
  }

  public function delete ($queries) {
      $table = 'news';
      $sql = sprintf('DELETE FROM %s', $table);
      $wheres = array();
      $values = array();

      foreach ($queries as $key => $value) {
          if (empty($value)) {
              throw new Exception('empty value');
          }
          $wheres[] = "$key = ?";
          $values[] = $value;
      }

      if (count($wheres) > 0) {
          $sql .= ' WHERE ' . implode(' AND ', $wheres);
      }

      try {
          $db = parent::getInstance();
          $db->beginTransaction();

          $st = $db->prepare($sql);
          $st->execute($values);

          $db->commit();
      }

      catch (PDOException $e) {
          $db->rollback();
          throw new Exception($e);
      }

      return true;
  }
}
