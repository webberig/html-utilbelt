<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 11:33
 */

namespace Webberig\HtmlUtilbelt\Generator;


use Webberig\HtmlUtilbelt\Element;

class Heading extends GeneratorAbstract {
    public function h1($content = "", $options = array())
    {
        return $this->createElement("h1", $content, $options);
    }

    public function h2($content = "", $options = array())
    {
        return $this->createElement("h2", $content, $options);
    }

    public function h3($content = "", $options = array())
    {
        return $this->createElement("h3", $content, $options);
    }

    public function h4($content = "", $options = array())
    {
        return $this->createElement("h4", $content, $options);
    }

    public function h5($content = "", $options = array())
    {
        return $this->createElement("h5", $content, $options);
    }

    public function h6($content = "", $options = array())
    {
        return $this->createElement("h6", $content, $options);
    }
}