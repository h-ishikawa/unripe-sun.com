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
    
    
    $to = 'sevens67@i.softbank.jp';
    $subject= '問い合わせがありました。';
    $bcc = "Bcc: kobito0826@gmail.com";
    
    $name = 'お名前 : ' . $post->name;
    $area = '住所 : ' . @$post->address;
    $email = 'E-mailアドレス : ' . $post->email;
    $tel = 'TEL : ' . @$post->tel;
    $description = 'お問い合わせ内容 : ' . "\n" . preg_replace( '/<br \/>/', '', $post->description ) . "\n";
    $bodyTextData = implode("\n\n", array($name, $area, $email, $tel, $description)); 
    
    if (mail($to, $subject, $bodyTextData, $bcc . '; FROM:' . $post->email)){
      $notification = 'success';
    
      /**
       * 返信
       */
      $replySubject = 'お問い合わせありがとうございます。';
      $description = 'お問い合わせ内容 : ' . "\n" . preg_replace( '/<br \/>/', '', $post->description ) . "\n" . 'このたびはお問い合わせいただき、誠にありがとうございます。' . "\n" . '改めてご連絡させていただきますので、今しばらくお待ちいただきますようよろしくお願いいたします。'. "\n";
      $bodyTextData = implode("\n\n", array($name, $area, $email, $tel, $description)); 
    
      mail($post->email, $replySubject, $bodyTextData, $bcc . '; FROM:' . $to);
    }
    
    else{
      $notification = 'failed';
    }

    $template = dirname(__FILE__) . '/../../templates/contacts/send/index.php';
    \View::html($template, $layout, array($notification), null);
  }
}
