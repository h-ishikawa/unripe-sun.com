<div class="pagination">
  <div class="pager">
    <a class="prev" href="?<?= http_build_query(array_merge((array) $option[0], array('page' => $pagination->prev))) ?>">&lsaquo;</a>
    <a class="<?= $pagination->page === $pagination->first ? 'current' : '' ?>" href="?<?= http_build_query(array_merge((array) $option[0], array('page' => $pagination->first))) ?>"><?= $pagination->first + 1 ?></a>
    <? if ((@$pagination->pages[0] - $pagination->first) > 1): ?>..<? endif; ?>
    
    <? foreach ($pagination->pages as $page): ?>
    <a class="<?= $pagination->page === $page ? 'current' : '' ?>" href="?<?= http_build_query(array_merge((array) $option[0], array('page' => $page))) ?>"><?= $page + 1 ?></a>
    <? endforeach; ?>
    <? if (($pagination->last - end($pagination->pages)) > 1): ?>..<? endif; ?>
    
    <? if ($pagination->first !== $pagination->last): ?>
    <a class="<?= $pagination->page === $pagination->last ? 'current' : '' ?>" href="?<?= http_build_query(array_merge((array) $option[0], array('page' => $pagination->last ))) ?>"><?= $pagination->last + 1 ?></a>
    <? endif; ?>
    <a class="next" href="?<?= http_build_query(array_merge((array) $option[0], array('page' => $pagination->next))) ?>">&rsaquo;</a>
  </div>

  <div class="views">
    <div class="limiter">
      <a href="?<?= http_build_query(array('limit' => (@$get->limit ?: 10) * 2) + (array) $option[0]) ?>">表示件数</a>
      <a class="<?= $pagination->limit === 10 ? 'current' : '' ?>" href="?<?= http_build_query(array_merge((array) $option[0], array('limit' => 10))) ?>">10</a>
      <a class="<?= $pagination->limit === 20 ? 'current' : '' ?>" href="?<?= http_build_query(array_merge((array) $option[0], array('limit' => 20))) ?>">20</a>
      <a class="<?= $pagination->limit === 30 ? 'current' : '' ?>" href="?<?= http_build_query(array_merge((array) $option[0], array('limit' => 30))) ?>">30</a>
    </div>
  </div>
  <div class="views">
    <div class="counter"><span class="start"><?= $pagination->start ?></span>-<span class="end"><?= $pagination->end ?></span>/<span class="counts"><?= $pagination->counts ?></span></div>
  </div>
</div>
