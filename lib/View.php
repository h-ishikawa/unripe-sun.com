<?php

class View
{
  public static function html($template, $layout, $option, $pagination) {
    ob_start();
    include_once($template);
    $content = ob_get_contents();
    ob_end_clean();
    include_once($layout);
  }
}
