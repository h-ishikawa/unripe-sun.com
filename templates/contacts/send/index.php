<?php
$settings = (object) array(
  'title' => 'お問い合わせ（送信完了）'
  , 'keywords' => ',お問い合わせ,アンライプ,美容室,ヘアサロン,横浜,反町'
  , 'description' => '美容室unripe（アンライプ）のお問い合わせのページです。unripe（アンライプ）は横浜の東急東横線反町駅のすぐ近くにある美容室です。'
  , 'scripts' => array('abc', 'cdf', 'ghi')
  , 'stylesheets' => array('abc', 'cdf', 'ghi')
);
?>

<h3>問い合わせ　送信完了</h3>
<div class="<?= $option[0] ?> thanks">
  <p>お問い合わせを送信いたしました。</p>
  <p>このたびはお問い合わせいただき、誠にありがとうございました。</p>
</div>

<div class="<?= $option[0] ?> sorry">
  <p>お問い合わせの送信に失敗しました。</p>
  <p>お手数ですが、再度お試しください。</p>
</div>

<a class='back' href='/contacts'>お問い合わせページに戻る</a>
