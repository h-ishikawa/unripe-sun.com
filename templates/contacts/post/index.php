<?php
$settings = (object) array(
    'title' => 'お問い合わせ（確認）'
  , 'keywords' => ',お問い合わせ,アンライプ,美容室,ヘアサロン,横浜,反町'
  , 'description' => '美容室unripe（アンライプ）のお問い合わせのページです。unripe（アンライプ）は横浜の東急東横線反町駅のすぐ近くにある美容室です。'
  , 'scripts' => array('abc', 'cdf', 'ghi')
  , 'stylesheets' => array('abc', 'cdf', 'ghi')
);
?>

<h3>問い合わせ　入力内容確認</h3>
<p class="title">入力頂いた内容をご確認頂き、問題が無ければ送信下さい。</p>
<p>お名前：<?= htmlspecialchars($option[0]->name, ENT_QUOTES) ?></p>
<p>ご住所：<?= htmlspecialchars(@$option[0]->address, ENT_QUOTES) ?></p>
<p>E-mailアドレス：<?= htmlspecialchars($option[0]->email, ENT_QUOTES) ?></p>
<p>電話番号：<?= htmlspecialchars(@$option[0]->tel, ENT_QUOTES) ?></p>
<p>お問い合わせ内容：<br><?= nl2br( htmlspecialchars($option[0]->description)) ?></p>

<form action="/contacts" method="post">
  <input type="hidden" value="<?= htmlspecialchars($option[0]->name, ENT_QUOTES) ?>" name="name">
  <input type="hidden" value="<?= htmlspecialchars(@$option[0]->address, ENT_QUOTES) ?>" name="address">
  <input type="hidden" value="<?= htmlspecialchars($option[0]->email, ENT_QUOTES) ?>" name="email">
  <input type="hidden" value="<?= htmlspecialchars(@$option[0]->tel, ENT_QUOTES) ?>" name="tel">
  <input type="hidden" value="<?= htmlspecialchars($option[0]->description, ENT_QUOTES) ?>" name="description">
  <input type="hidden" value="<?= $option[0]->token ?>" name="token">
  <input type="hidden" value="SEND" name="_METHOD">
  <input type="submit" value="送信する">
  <input type="button" onclick="self.history.back()" value="入力画面に戻る">
</form>

