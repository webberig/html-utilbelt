<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 17:00
 */

namespace Webberig\HtmlUtilbelt\Test\Generator;
use Webberig\HtmlUtilbelt\Generator;

class GeneralTest extends \PHPUnit_Framework_TestCase {
    public function testAbbr()
    {
        $gen = new Generator\General();
        $el = $gen->abbr("html");
        $this->assertEquals('<abbr>html</abbr>', $el);

        $el = $gen->abbr("html", "hypertext markup language");
        $this->assertEquals('<abbr title="hypertext markup language">html</abbr>', $el);
    }
}
 