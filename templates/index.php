<?php
$settings = (object) array(
    'title' => 'HOME'
  , 'keywords' => 'ここに, キーワードを, 書き込む'
  , 'description' => 'ここにディスクリプションを書き込む'
  , 'scripts' => array('')
  , 'stylesheets' => array('')
);
?>

    	<div class="panel">
    		<div>
    			<h2><span></span>Concept</h2>
    				<p>横浜の東急東横線、反町駅のすぐ近くにある美容室、<strong>unripe</strong>（<em>アンライプ</em>）。<br />
               店内は光溢れ、スタッフの手作りのはり金細工や絵が飾られていて、とても<em>アットホーム</em>な雰囲気です。 <br />
               <em>オーガニックのシャンプー</em>や<em>トリートメント</em>製品も扱っています。<br />
               お客様とトコトン話ながら、一緒に<em>ヘアスタイル</em>を考えたいと思っています。<br />
               是非、<em>ヘアサロン</em><strong>unripe</strong>のComfortable Spaceに遊びに来て下さい！
            </p>
    		</div>   		
        <div class="panel news">
          <h3><span></span>NEWS</h3>
          <? while ($result = $option[1]->fetchObject()): ?>
          <ul>
            <li class="date"><?= date('Y年n月j日', strtotime($result->date)) ?></li>
            <li class="title"><?= $result->title ?></li>
            <li class="description"><?= $result->content ?></li>
          </ul>
          <? endwhile; ?>
        </div><!--

     --><div class="panel cut">
          <h3><span></span>カットメニュー</h3>
          <table>
          	<tbody>
          		<tr>
          			<th>メニュー</th>
          			<th>料金</th>
          		</tr>
          		<tr>
          			<td>カット</td>
          			<td>￥5,400-〜</td>
          		</tr>
          		<tr>
          			<td>トリートメント</td>
          			<td>￥3,780-〜</td>
          		</tr>
          		<tr>
          			<td>カット&カラー</td>
          			<td>￥12,420-〜</td>
          		</tr>
          		<tr>
          			<td>カット&パーマ</td>
          			<td>￥12,960-〜</td>
          		</tr>
          		<tr>
          			<td>セットアップ</td>
          			<td>￥6,480-〜</td>
          		</tr>
          		<tr>
          			<td>前髪カット</td>
          			<td>￥1,080-〜</td>
          		</tr>
          	</tbody>
          </table>
          <p class="point">※店長・ディレクターカット・・・プラス￥540-<br />※オーナーカット・・・プラス￥1,080-<br />※ロング料金はかかりません。<br />※是非、あなたの大切なご家族、お友達をご紹介して頂いた方には<br />次回、全メニュー<span class="price-off">30%OFF</span>で施術させて頂きます。<br><span class="details-button"><a href="/menus"><img src="/public/images/home/menu-details.png" alt="メニュー詳細ボタン" /></a></span></p>
        </div><!--

     --><div class="panel plan">
          <h3><span></span>ヘアマイスターのアドバイス！</h3>
          <p>季節に合わせたヘアケアは健康な髪を保つのにとても大切です。あなたの髪をサポートするアドバイスを紹介します。<br><span class="details-button"><a href="/meisters"><img src="/public/images/home/menu-details.png" alt="メニュー詳細ボタン" /></a></span></p>
          <p class="meister"><a href="/meisters"><img src="/public/images/home/meister02.jpg" alt="ヘアマイスターアドバイス1" /></a></p>
        </div><!--

     --><div class="panel calendar">
          <a name="calender"></a>
          <h3><span></span>カレンダー</h3>
          <?= \Middleware\Calendar::get() ?>

          <p>【 お休み 】</p>
          <p class="tomori"><span></span>戸森：

            <? while ($result = $option[2]->fetchObject()): ?>
              <? if (date("Yn") == date("Yn", strtotime($result->date))): ?>
                <? $holidays[] = $result; ?>
              <? endif; ?>
            <? endwhile; ?>

            <? foreach($holidays as $holiday): ?>
              <? if(@$holiday->stuff == 1): ?>
                <?= date("j", strtotime(@$holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
          </p>

          <p class="koike"><span></span>小池：
            <? foreach($holidays as $holiday): ?>
              <? if(@$holiday->stuff == 2): ?>
                <?= date("j", strtotime(@$holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
          </p>

          <p class="yoshino"><span></span>吉野：
            <? foreach($holidays as $holiday): ?>
              <? if(@$holiday->stuff == 3): ?>
                <?= date("j", strtotime(@$holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
          </p>

          <p class="enomoto"><span></span>榎本：
            <? foreach($holidays as $holiday): ?>
              <? if(@$holiday->stuff == 4): ?>
                <?= date("j", strtotime(@$holiday->date)) ?>日
              <? endif; ?>
            <? endforeach; ?>
          </p>

          <p>※火曜日は定休日です。</p>
          <br>
        </div><!--

     --><div class="panel privilege">
          <h3><span></span>製品情報</h3>
          <p>Unripeで使用しているシャンプーやトリートメント剤、カラー剤などはお客様の髪に最適なこだわりある製品を取り揃えております。<br><span class="details-button"><a href="/goods"><img src="/public/images/home/menu-details.png" alt="メニュー詳細ボタン" /></a></span></p>
          
        </div><!--

     --><div class="panel privilege">
          <h3><span></span>shu uemura</h3>
          <p>個々のお客様に合わせたスキンケア、メイクアップのパーソナルなトータルビューティーをご提案させて頂きます。<br><span class="details-button"><a href="/meisters#shu"><img src="/public/images/home/menu-details.png" alt="メニュー詳細ボタン" /></a></span></p>
          <p class="shu"><a href="/meisters#shu"><img src="/public/images/meisters/shuuemura-top.jpg" alt="ヘアマイスターアドバイス1" /></a></p>
        </div>
        
    	</div><!--
    	
   --><div class="panel conversion">
        <h4><span></span>お得なクーポン</h4>
        <div class="banners">
          <a href="/couponfirst">
            <img src="/public/images/home/coupon01.jpg" alt="初回来店のお客様へ">
          </a>
          <a href="/couponrepeat">
            <img src="/public/images/home/coupon02.jpg" alt="いつも来店頂いているお客様へ">
          </a>

          <p>『初回来店の方』・『いつも来店頂いてるお客様』へ、お得なクーポンをご用意しました！<br>不定期で更新しますので、要チェックです！</p>
        </div>

        <h4><span></span>最新情報（facebook）</h4>
        <div class="fb-like-box" data-href="https://www.facebook.com/pages/Unripe/209519589110505" data-height="600px" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>
      </div>
