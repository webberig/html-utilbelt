<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 16:59
 */

namespace Webberig\HtmlUtilbelt\Generator;


class General extends GeneratorAbstract
{
    public function abbr($abbr, $title = null, $options = array())
    {
        $el = $this->createElement("abbr", $abbr, $options);
        if ($title) {
            $el->setAttribute("title", $title);
        }
        return $el;
    }
} 