<?php

namespace Controller;

class Contacts
{
  public static function index ($template, $layout) {
    \View::html($template, $layout, null, null);
  }

  public static function post ($template, $layout) {
    $app = new \App();
    $app->request();
    $post = $app->post;
    $error = (object) array();
    
    /**
     * confirm_email
     */
    if ($post->email !== $post->confirm_email) {
      $error->confirm_email = 'incorrect';
    }

    /**
     * description
     */
    if (mb_strlen($post->description, 'UTF-8') > 800) {
      $error->description = 'incorrect';
    }
    
    if ((array) $error) {
      \View::html($template, $layout, array($post, $error));
    }
    
    $token = sha1(uniqid(mt_rand(), true));
    
    setcookie('ONETIMETOKEN', $token, time() + 1800, '/contacts');

    $post->token = $token;

    $template = dirname(__FILE__) . '/../../templates/contacts/post/index.php';
    \View::html($template, $layout, array($post), null);
  }

  public static function send ($template, $layout) {
    $app = new \App();
    $app->request();
    $post = $app->post;
    $dbh = \Db::getInstance();

    $postToken = $post->token;
    $cookieToken = $_COOKIE['ONETIMETOKEN'];
    
    /**
     * token
     */
    if(!isset($postToken) || !isset($cookieToken)) {
      setcookie('ONETIMETOKEN', '', time() - 3600, '/contacts/');
      $app->notfound();
    }
    
    else if($postToken !== $cookieToken) {
      setcookie('ONETIMETOKEN', '', time() - 3600, '/contacts/');
      $app->notfound();
    }
    
    setcookie('ONETIMETOKEN', '', time() - 3600, '/contacts/');
    
    $to = 'unripe@major.ocn.ne.jp,suiken-cut@ezweb.ne.jp,diva-79.kenichi-0312@docomo.ne.jp,t19pista@ezweb.ne.jp,puni-kuma_kobuta.v-oo-v@softbank.ne.jp,saku-holy@docomo.ne.jp,contact@ichicolo.com';
    //$to = 'sevens67@gmail.com,sevens67@icloud.com,sevens67@i.softbank.jp,ichicolo.com@gmail.com,contact@ichicolo.com';
    $header = "MIME-Version: 1.0\n"
      . "Content-Transfer-Encoding: 7bit\n"
      . "Content-Type: text/plain; charset=ISO-2022-JP\n"
      . "Message-Id: <" . md5(uniqid(microtime())) . "@major.ocn.ne.jp/>\n"
      . "From: Unripe<unripe@major.ocn.ne.jp>\n";
    $subject= mb_encode_mimeheader('message from unripe-sun.com', 'ISO-2022-JP-MS');

    $name = 'お名前 : ' . $post->name;
    $area = '住所 : ' . @$post->address;
    $email = 'E-mailアドレス : ' . $post->email;
    $tel = 'TEL : ' . @$post->tel;
    $description = 'お問い合わせ内容 : ' . "\n" . preg_replace( '/<br \/>/', '', $post->description ) . "\n";
    $bodyTextData = implode("\n\n", array($name, $area, $email, $tel, $description)); 
    
    mb_internal_encoding('UTF-8');

    if (mail($to, $subject, mb_convert_encoding($bodyTextData, 'ISO-2022-JP-MS'), $header)) {
      $notification = 'success';
    
      /**
       * 返信
       */
      $replySubject = mb_encode_mimeheader('Thank you for your contact! message from unripe-sun.com', 'ISO-2022-JP-MS');
      
      mail($post->email, $replySubject, mb_convert_encoding('このたびはお問い合わせいただき、誠にありがとうございます。' . "\n" . '改めてご連絡させていただきますので、今しばらくお待ちいただきますようよろしくお願いいたします。'. "\n\n" . $bodyTextData, 'ISO-2022-JP-MS'), $header);

      $sql = new \Model\Contacts();
      $sql
        ->set('name', @$post->name)
        ->set('area', @$post->address)
        ->set('email', @$post->email)
        ->set('tel', @$post->tel)
        ->set('content', @$post->description)
        ->set('created_at', null);

      try {
        $dbh->beginTransaction();

        $sth = $dbh->prepare($sql->insert());
        $sth->execute($sql->values());

        $dbh->commit();
      }

      catch (\PDOException $e) {
        error_log($e->getMessage());
        $dbh->rollback();
        $app->error();
      }

      catch (\ErrorException $e) {
        error_log($e->getMessage());
        $dbh->rollback();
        $app->error();
      }

      catch (\Exception $e) {
        error_log($e->getMessage());
        $app->error();
      }
    }
    
    else{
      $notification = 'failed';
    }

    $template = dirname(__FILE__) . '/../../templates/contacts/send/index.php';
    \View::html($template, $layout, array($notification), null);
  }
}
