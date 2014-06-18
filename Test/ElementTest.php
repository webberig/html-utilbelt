<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 11:38
 */
namespace Webberig\HtmlUtilbelt\Test;

use Webberig\HtmlUtilbelt\Element;

class ElementTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        // Without content
        $el = new Element("h1");
        $this->assertEquals("<h1 />", $el->getHtml());

        // With content
        $el = new Element("h1", "foobar");
        $this->assertEquals("<h1>foobar</h1>", $el->getHtml());
    }

    public function testAddClass()
    {
        $el = new Element("div");
        $this->assertEquals('<div />', $el->getHtml());

        $el->addClass("foo");
        $this->assertEquals('<div class="foo" />', $el->getHtml());

        // Should not add a second (duplicate) class
        $el->addClass("foo");
        $this->assertEquals('<div class="foo" />', $el->getHtml());

        // Should not add a second (duplicate) class, but still add bar
        $el->addClass("foo bar");
        $this->assertEquals('<div class="foo bar" />', $el->getHtml());

        $el->addClass("bar");
        $this->assertEquals('<div class="foo bar" />', $el->getHtml());

        //add an array
        $el = new Element("a");
        $el->addClass(["bar", "foo"]);
        $this->assertEquals('<a class="bar foo" />', $el->getHtml());
    }

    public function testSetId()
    {
        $el = new Element("div", "foo");
        $el->setId("container");
        $this->assertEquals('<div id="container">foo</div>', $el->getHtml());
    }

    public function testSetInnerHTML()
    {
        $el = new Element("div");
        $this->assertEquals('<div />', $el->getHtml());
        $el->setInnerHTML("foo");
        $this->assertEquals('<div>foo</div>', $el->getHtml());
        $el->setInnerHTML("bar");
        $this->assertEquals('<div>bar</div>', $el->getHtml());
    }

    public function testOutput()
    {
        $el = new Element("div", "foo");
        $el->setId("myId");
        $el->setInnerHTML("bar");
        $el->addClass("tab");
        $el->addClass("active");

        $this->assertEquals('<div id="myId" class="tab active">bar</div>', $el->getHtml());
        $this->assertEquals((string) $el, $el->getHtml());
    }
}
