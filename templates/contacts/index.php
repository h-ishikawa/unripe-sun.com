<?php
$settings = (object) array(
    'title' => 'お問い合わせ'
  , 'keywords' => ',お問い合わせ,アンライプ,美容室,ヘアサロン,横浜,反町'
  , 'description' => '美容室unripe（アンライプ）のお問い合わせのページです。unripe（アンライプ）は横浜の東急東横線反町駅のすぐ近くにある美容室です。'
  , 'scripts' => array('abc', 'cdf', 'ghi')
  , 'stylesheets' => array('abc', 'cdf', 'ghi')
  , 'h2' => 'お問い合わせ'
  , 'point' => '下のフォームからお気軽にお問い合わせください！'
);
?>

<h3><span></span>問い合わせ</h3>
<form action="/contacts" method="post" enctype="multipart/form-data">
  <p class="title">下記よりお気軽にご連絡ください。</p>

  <div>
    <p>お名前<span>(必須)</span>：</p>
    <input placeholder="全角漢字でご入力ください。" class="name" type="text" name="name" size="50" maxlength="20" value="<?= @$option[0]->name ?>" required>
  </div>

  <div>
    <p>ご住所：</p>
    <input placeholder="全角でご入力ください。" class="address" type="text" name="address" size="70" maxlength="50" value="<?= @$option[0]->address ?>">
  </div>

  <div>
    <p>E-mailアドレス<span>(必須)</span>：</p>
    <input placeholder="半角英数字でご入力ください。" class="email" type="email" name="email" size="50" maxlength="50" value="<?= @$option[0]->email ?>" required>
  </div>

  <div class="<?= @$option[1]->confirm_email ?>">
    <p>E-mailアドレス確認用<span>(必須)</span>：</p>
    <input placeholder="半角英数字でご入力ください。" class="confirm_email" type="email" name="confirm_email" size="50" maxlength="100" value="<?= @$option[0]->confirm_email ?>" required>
    <span class="error incorrect">E-mailが一致していません。</span>
  </div>

  <div>
    <p>電話番号：</p>
    <input placeholder="半角数字ハイフン無しでご入力ください。" class="tel" type="tel" name="tel" size="50" maxlength="20" pattern="^[0-9]+$" value="<?= @$option[0]->tel ?>">
  </div>

  <div class="<?= @$option[1]->description ?>">
    <p>お問い合わせ内容<span>(必須)</span>：</p>
    <textarea placeholder="お問い合わせ内容をご入力ください。" class="description" name="description" rows="10" cols="70" required><?= @$option[0]->description ?></textarea>
    <span class="error incorrect">文字数がオーバーしています（800文字まで）。</span>
  </div>
  <p class="late_ms">※お問い合わせ頂いてから3日位経っても返信がない場合は、<br>再度メールしていただくか、お電話して下さい。</p>

  <input class="submit" type="submit" value="内容を確認する" />
  <input type="reset" value="リセット" />
</form>
