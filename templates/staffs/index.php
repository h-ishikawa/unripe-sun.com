<?php
$settings = (object) array(
    'title' => 'スタッフ'
  , 'keywords' => 'ここに, キーワードを, 書き込む'
  , 'description' => 'ここにディスクリプションを書き込む'
  , 'scripts' => array('')
  , 'stylesheets' => array('')
  , 'h2' => 'Unripeスタッフ紹介'
  , 'point' => 'Unripeでは、お客様と話し合いながらヘアスタイルを考えていきます。<br>リラックスして気軽にお話をする中で一緒に決めていきましょう。'
);
?>

 <div class="panel m-detail">
     <h3>【Unripe代表】 戸森 賢一 </h3>
     <p><img src="/public/images/stuffs/tomori.png"></p>
   </div><!--

--><div class="panel m-detail_s">
     <? \Middleware\Calendar::get() ?>
     <? while ($result = $option[0]->fetchObject()): ?>
       <? if (date("Yn") == date("Yn", strtotime($result->date))): ?>
         <? $holidays[] = $result; ?>
       <? endif; ?>
     <? endwhile; ?>
    <table>
    	<tbody>
    		<tr>
    			<td>【出身地】</td>
    			<td>横浜</td>
    		</tr>
    		<tr>
    			<td>【誕生日】</td>
    			<td>3月12日</td>
    		</tr>
    		<tr>
    			<td>【休日の過ごし方】</td>
    			<td>キックボクシング・洗車・旅行・語り飲み</td>
    		</tr>
    		<tr>
    			<td>【血液型】</td>
    			<td>B型</td>
    		</tr>
    		<tr>
    			<td>【好きなスタイル】</td>
    			<td>カジュアルモード</td>
    		</tr>
    		<tr>
    			<td>【好きな言葉】</td>
    			<td>楽しく</td>
    		</tr>
    		<tr>
    			<td>【夢】</td>
    			<td>世界一周旅行！</td>
    		</tr>
    		<tr>
    			<td>【今月の休み】</td>
    			<td><? foreach(@$holidays as $holiday): ?>
         <? if($holiday->stuff == 1): ?>
           <?= date("j", strtotime($holiday->date)) ?>日
         <? endif; ?>
       <? endforeach; ?></td>
    		</tr>
    		<tr>
    			<td>【最近のつぶやき】</td>
    			<td><? while ($result = $option[1]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?></td>
    		</tr>   		
    	</tbody>
    </table>
     <ul>
       <li>【一言】最高のスタッフでお待ちしています。</li><br>
       <li class="new_snaps"><span>【戸森 最新担当スナップ写真】</span><br><br>
       <!--
       <? while ($result = $option[2]->fetchObject()): ?>
    --><a class="panel" style="width:208px;" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Staff: 戸森<br>Comment: <?= $result->memo ?>">
       <img style="display: block;margin: 0 auto;" src="/public/images/uploads/thumbnails/<?= $result->file_path ?>" title="クリックで拡大">
       </a><!--
       <? endwhile; ?>
       -->
       </li>
     </ul>
   </div><!--

--><div class="panel m-detail_s">
     <table>
    	<tbody>
    		<tr>
    			<td>【出身地】</td>
    			<td>長野</td>
    		</tr>
    		<tr>
    			<td>【誕生日】</td>
    			<td>7月18日</td>
    		</tr>
    		<tr>
    			<td>【休日の過ごし方】</td>
    			<td>買い物</td>
    		</tr>
    		<tr>
    			<td>【血液型】</td>
    			<td>A型</td>
    		</tr>
    		<tr>
    			<td>【好きなスタイル】</td>
    			<td>ミディアム全般</td>
    		</tr>
    		<tr>
    			<td>【好きな言葉】</td>
    			<td>ありがとう</td>
    		</tr>
    		<tr>
    			<td>【夢】</td>
    			<td>時間に制約されない生活をする。</td>
    		</tr>
    		<tr>
    			<td>【今月の休み】</td>
    			<td><? foreach(@$holidays as $holiday): ?>
         <? if($holiday->stuff == 2): ?>
           <?= date("j", strtotime($holiday->date)) ?>日
         <? endif; ?>
       <? endforeach; ?>
       </td>
    		</tr>
    		<tr>
    			<td>【最近のつぶやき】</td>
    			<td><? while ($result = $option[3]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?></td>
    		</tr>   		
    	</tbody>
    </table>
     <ul>
       <li>【一言】ヘアマイスターの資格を活かして、肌と髪に優しい施術をします。</li><br>
       <li class="new_snaps"><span>【小池 最新担当スナップ写真】</span><br><br>
       <!--
       <? while ($result = $option[4]->fetchObject()): ?>
    --><a class="panel" style="width:208px;" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 小池<br>Comment: <?= $result->memo ?>">
       <img style="display: block;margin: 0 auto;" src="/public/images/uploads/thumbnails/<?= $result->file_path ?>" title="クリックで拡大">
       </a><!--
       <? endwhile; ?>
       -->
       </li>
      </ul>
   </div><!--

--><div class="panel m-detail">
     <h3>【店長】 小池 宏徳</h3>
     <p><img src="/public/images/stuffs/koike.png"></p>
   </div><!--

--><div class="panel m-detail">
     <h3>【アートディレクター】 吉野 憲太</h3>
     <p><img src="/public/images/stuffs/yoshino.png"></p>
   </div><!--

--><div class="panel m-detail_s">
     <table>
    	<tbody>
    		<tr>
    			<td>【出身地】</td>
    			<td>横浜</td>
    		</tr>
    		<tr>
    			<td>【誕生日】</td>
    			<td>8月27日</td>
    		</tr>
    		<tr>
    			<td>【休日の過ごし方】</td>
    			<td>サイクリングの後のビール<br>子供のスイミングの後の焼き肉</td>
    		</tr>
    		<tr>
    			<td>【血液型】</td>
    			<td>O型</td>
    		</tr>
    		<tr>
    			<td>【好きなスタイル】</td>
    			<td>ショート</td>
    		</tr>
    		<tr>
    			<td>【好きな言葉】</td>
    			<td>愚直</td>
    		</tr>
    		<tr>
    			<td>【夢】</td>
    			<td>宮古島に移住。</td>
    		</tr>
    		<tr>
    			<td>【今月の休み】</td>
    			<td><? foreach(@$holidays as $holiday): ?>
         <? if($holiday->stuff == 3): ?>
           <?= date("j", strtotime($holiday->date)) ?>日
         <? endif; ?>
       <? endforeach; ?>
       </td>
    		</tr>
    		<tr>
    			<td>【最近のつぶやき】</td>
    			<td><? while ($result = $option[5]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?>
    		</tr>   		
    	</tbody>
    </table>
     <ul>
       <li>【一言】ショートスタイルが得意です。短くしたいけど迷っている方、是非お待ちしています。</li><br>
       <li class="new_snaps"><span>【吉野 最新担当スナップ写真】</span><br><br>
       <!--
       <? while ($result = $option[6]->fetchObject()): ?>
    --><a class="panel" style="width:208px;" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 吉野<br>Comment: <?= $result->memo ?>">
       <img style="display: block;margin: 0 auto;" src="/public/images/uploads/thumbnails/<?= $result->file_path ?>" title="クリックで拡大">
       </a><!--
       <? endwhile; ?>
       -->
       </li>
       </ul>
   </div><!--

--><div class="panel m-detail_s">
     <table>
    	<tbody>
    		<tr>
    			<td>【出身地】</td>
    			<td>東京都</td>
    		</tr>
    		<tr>
    			<td>【誕生日】</td>
    			<td>5月26日</td>
    		</tr>
    		<tr>
    			<td>【休日の過ごし方】</td>
    			<td>ちびちゃんと遊んだり、買い物に行ったり、<br>子供サービスの日です。</td>
    		</tr>
    		<tr>
    			<td>【血液型】</td>
    			<td>AB型</td>
    		</tr>
    		<tr>
    			<td>【好きなスタイル】</td>
    			<td>ボブ、アップスタイル</td>
    		</tr>
    		<tr>
    			<td>【好きな言葉】</td>
    			<td>ありがとう</td>
    		</tr>
    		<tr>
    			<td>【夢】</td>
    			<td>カワイイおばあちゃんになる事。</td>
    		</tr>
    		<tr>
    			<td>【今月の休み】</td>
    			<td><? foreach(@$holidays as $holiday): ?>
         <? if($holiday->stuff == 4): ?>
           <?= date("j", strtotime($holiday->date)) ?>日
         <? endif; ?>
       <? endforeach; ?>
       </td>
    		</tr>
    		<tr>
    			<td>【最近のつぶやき】</td>
    			<td><? while ($result = $option[7]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?>
    		</tr>   		
    	</tbody>
    </table>
     <ul>
       <li>【一言】平日限定で、お子様カットもしています。</li><br>
       <li class="new_snaps"><span>【榎本 最新担当スナップ写真】</span><br><br>
       <!--
       <? while ($result = $option[8]->fetchObject()): ?>
    --><a class="panel" style="width:208px;" href="/public/images/uploads/<?= $result->file_path ?>" data-lightbox="snap" title="Name: <?= $result->name ?><br>Stuff: 榎本<br>Comment: <?= $result->memo ?>">
       <img style="display: block;margin: 0 auto;" src="/public/images/uploads/thumbnails/<?= $result->file_path ?>" title="クリックで拡大">
       </a><!--
       <? endwhile; ?>
       -->
       </li>
       </ul>
   </div><!--

--><div class="panel m-detail">
     <h3>【スタイリスト】 榎本 宮子</h3>
     <p><img src="/public/images/stuffs/enomoto.png"></p>
   </div><!--

--><div class="panel m-detail">
     <h3>【アシスタント】 佐久間 聖子</h3>
     <p><img src="/public/images/stuffs/sakuma.png"></p>
   </div><!--

--><div class="panel m-detail_s">
     <table>
    	<tbody>
    		<tr>
    			<td>【出身地】</td>
    			<td>千葉県</td>
    		</tr>
    		<tr>
    			<td>【誕生日】</td>
    			<td>11月26日</td>
    		</tr>
    		<tr>
    			<td>【休日の過ごし方】</td>
    			<td>美術館めぐり</td>
    		</tr>
    		<tr>
    			<td>【血液型】</td>
    			<td>O型</td>
    		</tr>
    		<tr>
    			<td>【好きなスタイル】</td>
    			<td>ショート</td>
    		</tr>
    		<tr>
    			<td>【好きな言葉】</td>
    			<td>一生懸命</td>
    		</tr>
    		<tr>
    			<td>【夢】</td>
    			<td>マイホームが欲しい。</td>
    		</tr>
    		<tr>
    			<td>【最近のつぶやき】</td>
    			<td><? while ($result = $option[9]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?>
       </td>
    		</tr>   		
    	</tbody>
    </table>
     <ul>
       <li>【一言】細かい気配りと、心地良いマッサージを心掛けていきます。</li>
       </ul>
   </div><!--

--><div class="panel m-detail_s">
     <table>
    	<tbody>
    		<tr>
    			<td>【出身地】</td>
    			<td>千葉県</td>
    		</tr>
    		<tr>
    			<td>【誕生日】</td>
    			<td>5月31日</td>
    		</tr>
    		<tr>
    			<td>【休日の過ごし方】</td>
    			<td>映画鑑賞・美術鑑賞・オシャレなこと</td>
    		</tr>
    		<tr>
    			<td>【血液型】</td>
    			<td>A型</td>
    		</tr>
    		<tr>
    			<td>【好きなスタイル】</td>
    			<td>ショート</td>
    		</tr>
    		<tr>
    			<td>【好きな言葉】</td>
    			<td>仲間</td>
    		</tr>
    		<tr>
    			<td>【夢】</td>
    			<td>音楽好きな仲間と音楽フェスを開く。</td>
    		</tr>
    		<tr>
    			<td>【最近のつぶやき】</td>
    			<td><? while ($result = $option[10]->fetchObject()): ?>
         <?= $result->tweet; ?>
       <? endwhile; ?>
       </td>
    		</tr>   		
    	</tbody>
    </table>
      <ul>
       <li>【一言】これからもUnripeをよろしくお願いします。</li>
       </ul>
   </div><div class="panel m-detail">
     <h3>【アシスタント】 清水 圭太</h3>
     <p><img src="/public/images/stuffs/shimizu.png"></p>
   </div>
