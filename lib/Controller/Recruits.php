<?php

namespace Controller;

class Recruits
{
  public static function index ($template, $layout) {
    \View::html($template, $layout, null, null);
  }
}
