<?php

namespace Controller;

class Meisters
{
  public static function index ($template, $layout) {
    \View::html($template, $layout, null, null);
  }
}
