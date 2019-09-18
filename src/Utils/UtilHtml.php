<?php

namespace App\Utils;

class UtilHtml
{

  public function toHtmlTab(array $tab, int $maxRows): string
  {
    if (!$tab){
      return '(vide)';
    } else {
      return "<table><tr><td>A</td></tr><tr><td>B</td></tr><tr><td>C</td></tr></table>";
    }
  }

}