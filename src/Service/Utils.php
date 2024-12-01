<?php

namespace App\Service;

class Utils
{
  public function clean($string)
  {
    return ucfirst(trim($string));
  }
}