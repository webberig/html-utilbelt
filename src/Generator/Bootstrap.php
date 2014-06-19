<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 16:56
 */

namespace Webberig\HtmlUtilbelt\Generator;

class Bootstrap extends GeneratorAbstract {
    const BUTTON_PRIMARY    = "btn-primary";
    const BUTTON_DEFAULT    = "btn-default";
    const BUTTON_INFO       = "btn-info";
    const BUTTON_DANGER     = "btn-danger";
    const BUTTON_WARNING    = "btn-warning";
    const BUTTON_SUCCESS    = "btn-success";

    const BUTTON_LARGE      = "btn-lg";

    public function lead($content = "", $options = array())
    {
        $el = $this->createElement("p", $content, $options);
        $el->addClass("lead");
        return $el;
    }
    public function help($content = "", $options = array())
    {
        $el = $this->createElement("span", $content, $options);
        $el->addClass("help-block");
        return $el;
    }

    public function button($content = "", $type = self::BUTTON_DEFAULT, $options = array())
    {
        $el = $this->createElement("button", $content);
        $el->setAttribute("type", "button");
        $el->addClass(["btn", $type]);
        $this->updateElement($el, $options);
        if (isset($options["icon-prefix"])) {
            $icon = $this->glyphicon($options["icon-prefix"])->getHtml();
            $el->prepend($icon . " ");
        }
        if (isset($options["icon-suffix"])) {
            $icon = $this->glyphicon($options["icon-suffix"])->getHtml();
            $el->append(" " . $icon);
        }
        return $el;
    }

    public function submit($content = "", $type = self::BUTTON_DEFAULT, $options = array())
    {
        $el = $this->createElement("button", $content);
        $el->setAttribute("type", "submit");
        $el->addClass(["btn", $type]);
        $this->updateElement($el, $options);
        if (isset($options["icon-prefix"])) {
            $icon = $this->glyphicon($options["icon-prefix"])->getHtml();
            $el->prepend($icon . " ");
        }
        if (isset($options["icon-suffix"])) {
            $icon = $this->glyphicon($options["icon-suffix"])->getHtml();
            $el->append(" " . $icon);
        }
        return $el;
    }

    public function glyphicon($icon)
    {
        $el = $this->createElement("i");
        $el->addClass(["glyphicon", "glyphicon-".$icon]);
        return $el;
    }
}
