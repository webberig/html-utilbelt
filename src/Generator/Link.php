<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 16:44
 */

namespace Webberig\HtmlUtilbelt\Generator;


class Link extends GeneratorAbstract
{

    public function link($content, $link = null, $options = array())
    {
        $el = $this->createElement("a", $content, $options);
        if ($link === null) {
            $link = $content;
        }
        $el->setAttribute("href", $link);
        return $el;
    }
    public function anchor($name, $options = array())
    {
        $el = $this->createElement("a", $options);
        $el->setAttribute("name", $name);
        return $el;
    }
}
