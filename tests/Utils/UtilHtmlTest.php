<?php

namespace App\Tests\Utils;

use App\Utils\UtilHtml;

use PHPUnit\Framework\TestCase;

class UtilHtmlTest extends TestCase
{

  public function testPremier()
  {
    $uh = new UtilHtml();
    $arg = ["A", "B", "C"];

    $expectedHtmlTab = '<table><tr><td>A</td></tr><tr><td>B</td></tr><tr><td>C</td></tr></table>';

    $this->assertEquals($expectedHtmlTab, $uh->toHtmlTab($arg, \count($arg)));
  }

}
