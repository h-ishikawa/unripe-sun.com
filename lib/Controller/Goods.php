<?php

namespace Controller;

class Goods 
{
  public static function index ($template, $layout) {
    \View::html($template, $layout, null, null);
  }
}
