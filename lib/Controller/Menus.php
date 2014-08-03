<?php

namespace Controller;

class Menus
{
  public static function index ($template, $layout) {
    \View::html($template, $layout, null, null);
  }
}
