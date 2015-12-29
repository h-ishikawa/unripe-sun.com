<?php
$settings = (object) array(
    'title' => '求人'
  , 'keywords' => '求人,Unripe,アンライプ,美容室,ヘアサロン,横浜,反町'
  , 'description' => '美容室unripe（アンライプ）の求人のページです。unripeで一緒に働くスタッフの募集をお待ちしております。unripe（アンライプ）は横浜の東急東横線反町駅のすぐ近くにある美容室です。'
  , 'scripts' => array('')
  , 'stylesheets' => array('')
  , 'h2' => '求人募集'
  , 'point' => '美容を通してお客様と自分たちが幸せでいられるUnripeで<br>一緒に自然体で働ける職場を作りませんか？'
);
?>

<script type="text/javascript">
$ (function(){
	$ (".content:not('.active + .content')").hide();	
	$(".tabmenu").hover(function(){
		$ (this).addClass("hover")
	},
	function(){
		$(this).removeClass("hover")
        });	
	$ (".tabmenu").click(function(){
		$(".tabmenu").removeClass("active");
		$ (this).addClass("active");
		$(".content:not('.active + .content')").fadeOut();
        $ (".active + .content").fadeIn();	
	});
});
</script>

<style>
.recruits .event table{
  width:100%;
  border-collapse:collapse;
  margin:0 0 30px 0;
  border: none;
}
.recruits .event th{
  color:#7c6551;
  background-color:rgba(79,27,4,0.27);
}
.recruits .event td{
  text-align:right;
  font-size:90%;
  border: none;
}
.recruits .event td.title{
  text-align:left;
  font-weight:bold;
  //color:#ff6347;
}
.recruits .event td.point{
  text-align:left;
  padding:0 5px 8px;
  border: none;
  padding: 0 0 10px 0;
}
.event td.point p{
  padding:15px 0 0;
}
.recruits .event td.point img{
  width:250px;
  float: left;
}
.recruits .event th,td{
  padding:8px 5px;
}
.recruits .event .mn th,.mn td{
  border:none;
}

</style>

<div class="recruits ">
      <h3><span></span>【求人募集】</h3>
      <p>見学受付・・・本人より電話にて予約して下さい。<br>TEL:045-628-9738<br>神奈川県　横浜市　神奈川区　松本町１－２－３　カヤギヤビル２F</p>
      
<div class="full_content">
   <div class="tabmenu active">求人</div>
   <div class="content">
   <p>【 事業内容：美容業一般 】</p>
<table>
  <tr>
    <th colspan="2"><h3>雇用形態：正社員、パート、アルバイト</h3></th>
  </tr>
  <tr>
    <td class="title" rowspan="3">スタイリスト</td>
    <td>1 固定給</td>
  </tr>
  <tr>
    <td>2 185,000円＋指名歩合</td>
  </tr>
  <tr>
    <td>3 フルコミッション</td>
  </tr>
  <tr>
    <td class="title">アシスタント</td>
    <td>170,000円〜180,000円</td>
  </tr>
  <tr>
    <td class="title">パート・アルバイト</td>
    <td>アルバイトの時給：応相談(経験年数やランク等を考慮して決めさせて頂きます。)</td>
  </tr>
  <tr>
    <td class="title">フリーランス</td>
    <td>フリースタイリスト、フリーネイリスト、フリーアイリストの募集もしています。</td>
  </tr>
  <tr>
    <td class="title">交通費</td>
    <td>15,000円まで支給</td>
  </tr>
  <tr>
    <td class="title">応募資格</td>
    <td>美容師免許所得者・見込み者</td>
  </tr>
  <tr>
    <td class="title">待遇</td>
    <td>雇用保険、労災保険、子ども手当(1人に付き1万円)、役職手当、店販手当<br>※既婚者の方で仕事と育児の両立を考えている方、ぜひご相談ください。</td>
  </tr>
  <tr>
    <td class="title">休日</td>
    <td>隔週2日(完全週休2日は応相談)、パートタイム(時間相談可)、趣味／早上がり制度(週に1度／時間相談可)</td>
  </tr>
  <tr>
    <td class="title">福利厚生</td>
    <td>社員旅行(海外へ年に1回)、産休制度(結婚後や出産後に働けるシステムなど相談可)、夏季冬季休暇あり、講習費用サポート</td>
  </tr>
</table>      
</div> 
      
   <div class="tabmenu">デビュースケジュール</div>
   <div class="content">
   <p>【 年間を通したスタイリストデビューまでのスケジュール 】</p>
   <table>
  <tr>
    <th colspan="2"><h3>1年目のスケジュール</h3></th>
  </tr>
  <tr>
    <td class="title">4月</td>
    <td>接客マナー、電話対応、シャンプー、マッサージ等</td>
  </tr>
  <tr>
    <td class="title">5月</td>
    <td>カラーリング、(理論、ウィッグ塗布練習)</td>
  </tr>
  <tr>
    <td class="title">6月</td>
    <td>カラーリング(モデル)、毛髪理論、コンサルテーション</td>
  </tr>
  <tr>
    <td class="title">7月</td>
    <td>ストレートパーマ(理論、ウィッグ塗布練習)</td>
  </tr>
  <tr>
    <td class="title">8月</td>
    <td>ストレートパーマ(モデル)</td>
  </tr>
  <tr>
    <td class="title">9月</td>
    <td>カラーリング(応用編ウィッグ)、コンサルテーション</td>
  </tr>
  <tr>
    <td class="title">10月</td>
    <td>カラーリング(応用編モデル)</td>
  </tr>
  <tr>
    <td class="title">11月</td>
    <td>パーマ(理論、ウィッグ)</td>
  </tr>
  <tr>
    <td class="title">12月</td>
    <td>コンサルテーション</td>
  </tr>
  <tr>
    <td class="title">1月</td>
    <td>パーマ(モデル)</td>
  </tr>
  <tr>
    <td class="title">2月</td>
    <td>ブロー(理論、ウィッグ)</td>
  </tr>
  <tr>
    <td class="title">3月</td>
    <td>ブロー(モデル)、コンサルテーション</td>
  </tr>
  </table>
  
  <table>
  <tr>
    <th colspan="2"><h3>2〜3年目のスケジュール</h3></th>
  </tr>
  <tr>
    <td class="title">カット</td>
    <td>ウィッグカット、モデルカット、セットアップ、メイク等</td>
  </tr>
  </table>
  
  <p>入社からスタイリスト昇格まで、2.5〜3年を考えております。</p>
  <p>※上記のカリキュラムは個人のスキルやペースに合わせて調整していきます。</p>
  
   </div> 

   <div class="tabmenu">EVENT</div>
   <div class="content">
<div class="event">
<table>
  <tr>
    <th colspan="2"><h3>外部活動 Creative</h3></th>
  </tr>
  <tr>
    <td class="point" colspan="2"><p>ヘアショー、セミナー、撮影会などはサロンワークとは違った楽しさや緊張感があり、美容師としての成長を試すことが出来ます。<br><img src="/public/images/recruits/c01.jpg"><img src="/public/images/recruits/c02.jpg"><img src="/public/images/recruits/c03.jpg"><img src="/public/images/recruits/c04.jpg"></p></td>
  </tr>
  <tr>
    <th colspan="2"><h3>社員旅行</h3></th>
  </tr>
  <tr class="mn">
  </tr>
  <tr>
    <td class="point" colspan="2"><p>毎年恒例で海外に社員旅行に行きます。バリ、プーケット、マレーシアetc。一生懸命に遊ぶ、これも大切です。<br><img src="/public/images/recruits/t01.jpg"><img src="/public/images/recruits/t02.jpg"><img src="/public/images/recruits/t03.jpg"><img src="/public/images/recruits/t04.jpg"></p></td>
  </tr>
  <tr>
    <th colspan="2"><h3>社内イベント 早上がり制度</h3></th>
  </tr>
  <tr class="mn">
  </tr>
  <tr>
    <td class="point" colspan="2"><p>忘年会やBBQの社内イベントはもちろん、週1回の早上がり制度で自分の趣味と仕事の両立も出来ます。<br><img src="/public/images/recruits/i01.jpg"><img src="/public/images/recruits/i02.jpg"><img src="/public/images/recruits/i03.jpg"><img src="/public/images/recruits/i04.jpg"></p></td>
  </tr>
</table> 
</div>
   </div> 

</div>
  
</div>    
