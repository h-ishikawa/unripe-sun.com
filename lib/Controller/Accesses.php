<?php

namespace Controller;

class Accesses
{
  public static function index ($template, $layout) {
    \View::html($template, $layout, null, null);
  }
}
