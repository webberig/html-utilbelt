<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 16:57
 */

namespace Webberig\HtmlUtilbelt\Test\Generator;

use Webberig\HtmlUtilbelt\Generator;

class BootstrapTest extends \PHPUnit_Framework_TestCase {
    public function testLead()
    {
        $gen = new Generator\Bootstrap();
        $el = $gen->lead("my big greek text");
        $this->assertEquals('<p class="lead">my big greek text</p>', $el);
    }

    public function testGlyphicon()
    {

    }

    public function testHelp()
    {
        $gen = new Generator\Bootstrap();
        $el = $gen->help("fill in this form");
        $this->assertEquals('<span class="help-block">fill in this form</span>', $el);
    }

    public function testButton()
    {
        $gen = new Generator\Bootstrap();
        $el = $gen->button("Click");
        $this->assertEquals('<button type="button" class="btn btn-default">Click</button>', $el);

        $el = $gen->button("Click", Generator\Bootstrap::BUTTON_PRIMARY);
        $this->assertEquals('<button type="button" class="btn btn-primary">Click</button>', $el);

        $el = $gen->button("Click", Generator\Bootstrap::BUTTON_PRIMARY, [
                "class" => Generator\Bootstrap::BUTTON_LARGE,
                "icon-prefix" => "ok",
                "icon-suffix" => "check"
            ]);
        $this->assertEquals(
            '<button type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-ok" /> Click <i class="glyphicon glyphicon-check" /></button>',
            $el
        );
    }

    public function testSubmit()
    {
        $gen = new Generator\Bootstrap();
        $el = $gen->submit("Click");
        $this->assertEquals('<button type="submit" class="btn btn-default">Click</button>', $el);

        $el = $gen->submit("Click", Generator\Bootstrap::BUTTON_PRIMARY);
        $this->assertEquals('<button type="submit" class="btn btn-primary">Click</button>', $el);

        $el = $gen->submit("Click", Generator\Bootstrap::BUTTON_PRIMARY, [
                "class" => Generator\Bootstrap::BUTTON_LARGE,
                "icon-prefix" => "ok",
                "icon-suffix" => "check"
            ]);
        $this->assertEquals(
            '<button type="submit" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-ok" /> Click <i class="glyphicon glyphicon-check" /></button>',
            $el
        );
    }



}
 