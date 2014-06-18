<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 15:48
 */

namespace Webberig\HtmlUtilbelt\Test\Generator;


use Webberig\HtmlUtilbelt\Generator\Heading;

/**
 * Class HeadingTest
 * @package Webberig\HtmlUtilbelt\Test\Generator
 * @covers Webberig\HtmlUtilbelt\Generator\Heading
 */
class HeadingTest extends \PHPUnit_Framework_TestCase {
    public function testH1() {
        $gen = new Heading();
        $this->doTests($gen, "h1");
    }

    public function testH2() {
        $gen = new Heading();
        $this->doTests($gen, "h2");
    }

    public function testH3() {
        $gen = new Heading();
        $this->doTests($gen, "h3");
    }

    public function testH4() {
        $gen = new Heading();
        $this->doTests($gen, "h4");
    }

    public function testH5() {
        $gen = new Heading();
        $this->doTests($gen, "h5");
    }

    public function testH6() {
        $gen = new Heading();
        $this->doTests($gen, "h6");
    }

    protected function doTests($gen, $method, $tag = null)
    {
        if ($tag === null) {
            $tag = $method;
        }
        if (!is_callable([$gen, $method])) {
            $this->fail("Method "  . $method . " is not callable");
            return;
        }

        $el = $gen->$method();
        $this->assertEquals("<{$tag} />", $el);

        $el = $gen->$method("foobar text");
        $this->assertEquals("<{$tag}>foobar text</{$tag}>", $el);

        $el = $gen->$method("foobar text", [
                "class" => "blue",
                "id" => "foobar"
            ]);
        $this->assertEquals("<{$tag} id=\"foobar\" class=\"blue\">foobar text</{$tag}>", $el);

    }
}
 