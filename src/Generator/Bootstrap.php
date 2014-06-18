<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 16:56
 */

namespace Webberig\HtmlUtilbelt\Generator;

class Bootstrap extends GeneratorAbstract {
    const BUTTON_PRIMARY = "btn-primary";
    const BUTTON_LARGE = "btn-lg";

    public function lead($content = "", $options = array())
    {
        $el = $this->createElement("p", $content, $options);
        $el->addClass("lead");
        return $el;
    }
    public function help()
    {

    }

    public function button()
    {

    }

    public function submit()
    {

    }

    public function glyphicon()
    {

    }

} 