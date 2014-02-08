<?php
$settings = (object) array(
    'title' => 'スタッフ'
  , 'keywords' => 'ここに, キーワードを, 書き込む'
  , 'description' => 'ここにディスクリプションを書き込む'
  , 'scripts' => array('')
  , 'stylesheets' => array('')
);
?>

 <div class="panel m-detail">
     <h3>【Unripe代表】</h3>
     <p><img src="/images/stuffs/tomori.png" />
     </p>
   </div><!--

--><div class="panel m-detail_s">
     <? \Middleware\Calendar::get() ?>
     <? while ($result = $option[0]->fetchObject()): ?>
       <? if (date("Yn") == date("Yn", strtotime($result->date))): ?>
         <? $holidays[] = $result; ?>
       <? endif; ?>
     <? endwhile; ?>

     <ul>
       <li>【戸森 賢一】 KENICHI TOMORI</li>
       <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
       <li>【今月の休み】
       <? foreach(@$holidays as $holiday): ?>
         <? if($holiday->stuff == 1): ?>
           <?= date("j", strtotime($holiday->date)) ?>日
         <? endif; ?>
       <? endforeach; ?>
       </li>
       <li>【最近のつぶやき】
       <? while ($result = $option[1]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?>
       </li>
       <li>【最新担当スナップ写真】
       <!--
       <? while ($result = $option[2]->fetchObject()): ?>
    --><a class="panel" style="width:208px;" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 戸森<br>Comment: <?= $result->memo ?>">
       <img style="display: block;margin: 0 auto;" src="/public/images/uploads/thumbnails/<?= $result->file_path ?>">
       </a><!--
       <? endwhile; ?>
       -->
       </li>
     </ul>
   </div><!--

--><div class="panel m-detail_s">
     <ul>
       <li>【小池 宏徳】 HIRONORI KOIKE</li>
       <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
       </ul>
       <li>【今月の休み】
       <? foreach(@$holidays as $holiday): ?>
         <? if($holiday->stuff == 2): ?>
           <?= date("j", strtotime($holiday->date)) ?>日
         <? endif; ?>
       <? endforeach; ?>
       </li>
       <li>【最近のつぶやき】
       <? while ($result = $option[3]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?>
       </li>
       <li>【最新担当スナップ写真】
       <!--
       <? while ($result = $option[4]->fetchObject()): ?>
    --><a class="panel" style="width:208px;" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 小池<br>Comment: <?= $result->memo ?>">
       <img style="display: block;margin: 0 auto;" src="/public/images/uploads/thumbnails/<?= $result->file_path ?>">
       </a><!--
       <? endwhile; ?>
       -->
       </li>
   </div><!--

--><div class="panel m-detail">
     <h3>【店長】</h3>
     <p><img src="/public/images/stuffs/koike.png" />
     </p>
   </div><!--

--><div class="panel m-detail">
     <h3>【スタイリスト】</h3>
     <p><img src="/public/images/stuffs/yoshino.png" />
     </p>
   </div><!--

--><div class="panel m-detail_s">
     <ul>
       <li>【吉野 憲太】 KENTA YOSHINO</li>
       <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
       <li>【今月の休み】
       <? foreach(@$holidays as $holiday): ?>
         <? if($holiday->stuff == 3): ?>
           <?= date("j", strtotime($holiday->date)) ?>日
         <? endif; ?>
       <? endforeach; ?>
       </li>
       <li>【最近のつぶやき】
       <? while ($result = $option[5]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?>
       </li>
       <li>【最新担当スナップ写真】
       <!--
       <? while ($result = $option[6]->fetchObject()): ?>
    --><a class="panel" style="width:208px;" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 吉野<br>Comment: <?= $result->memo ?>">
       <img style="display: block;margin: 0 auto;" src="/public/images/uploads/thumbnails/<?= $result->file_path ?>">
       </a><!--
       <? endwhile; ?>
       -->
       </li>
       </ul>
   </div><!--

--><div class="panel m-detail_s">
     <ul>
       <li>【榎本 宮子】 MIYAKO ENOMOTO</li>
       <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
       <li>【今月の休み】
       <? foreach(@$holidays as $holiday): ?>
         <? if($holiday->stuff == 4): ?>
           <?= date("j", strtotime($holiday->date)) ?>日
         <? endif; ?>
       <? endforeach; ?>
       </li>
       <li>【最近のつぶやき】
       <? while ($result = $option[7]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?>
       </li>
       <li>【最新担当スナップ写真】
       <!--
       <? while ($result = $option[8]->fetchObject()): ?>
    --><a class="panel" style="width:208px;" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 榎本<br>Comment: <?= $result->memo ?>">
       <img style="display: block;margin: 0 auto;" src="/public/images/uploads/thumbnails/<?= $result->file_path ?>">
       </a><!--
       <? endwhile; ?>
       -->
       </li>
       </ul>
   </div><!--

--><div class="panel m-detail">
     <h3>【スタイリスト】</h3>
     <p><img src="/public/images/stuffs/enomoto.png" />
     </p>
   </div><!--

--><div class="panel m-detail">
     <h3>【スタイリスト】</h3>
     <p><img src="/public/images/stuffs/sakuma.png" />
     </p>
   </div><!--

--><div class="panel m-detail_s">
     <ul>
       <li>【佐久間 聖子】 SEIKO SAKUMA</li>
       <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
       <li>【最近のつぶやき】
       <? while ($result = $option[9]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?>
       </li>
       </ul>
   </div><!--

--><div class="panel m-detail_s">
     <ul>
       <li>【清水 圭太】 SHIMI</li>
       <li>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</li>
       <li>【最近のつぶやき】
       <? while ($result = $option[10]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?>
       </li>
       </ul>
   </div><div class="panel m-detail">
     <h3>【スタイリスト】</h3>
     <p><img src="/public/images/stuffs/shimizu.png" />
     </p>
   </div>
