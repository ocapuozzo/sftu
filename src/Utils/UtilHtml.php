<?php

namespace App\Utils;

class UtilHtml
{

  public function toHtmlTab(array $tab, int $maxRows): string
  {
    if (!$tab){
      return '(vide)';
    } else {
      $res = "<table>";
      for ($i = 0; $i < \count($tab); ++$i){
        $res .= "<tr><td>" . $tab[$i] . "</td></tr>";
      }
      $res .= "</table>"; // $res = $res . "</table>";
      return $res;
    }
  }

}