<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 16:45
 */

namespace Webberig\HtmlUtilbelt\Test\Generator;


use Webberig\HtmlUtilbelt\Generator;

class LinkTest extends \PHPUnit_Framework_TestCase {
    public function testLink()
    {
        $gen = new Generator\Link();
        $el = $gen->link("http://www.google.be");
        $this->assertEquals('<a href="http://www.google.be">http://www.google.be</a>', $el);

        $el = $gen->link("link text", "http://www.google.be");
        $this->assertEquals('<a href="http://www.google.be">link text</a>', (string) $el);
    }

    public function testAnchor()
    {
        $gen = new Generator\Link();
        $el = $gen->anchor("heading1");
        $this->assertEquals('<a name="heading1" />', (string) $el);
    }
}
