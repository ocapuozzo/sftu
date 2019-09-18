<?php

namespace App\Tests\Utils;

use App\Utils\UtilHtml;
use PHPUnit\Framework\TestCase;

class UtilHtmlTest extends TestCase
{

  public function testCasNormal()
  {
    $uh = new UtilHtml();
    $arg = ["A", "B", "C"];

    $expectedHtmlTab = '<table><tr><td>A</td></tr><tr><td>B</td></tr><tr><td>C</td></tr></table>';

    $this->assertEquals($expectedHtmlTab, $uh->toHtmlTab($arg, \count($arg)));
  }


  public function testCasArgTableauVide()
  {
    $uh = new UtilHtml();
    $arg = [];

    $expectedHtmlTab = '(vide)';

    $this->assertEquals($expectedHtmlTab, $uh->toHtmlTab($arg, 5));
  }

}
