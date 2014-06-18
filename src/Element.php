<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 10:56
 */

namespace Webberig\HtmlUtilbelt;


class Element {
    private $class = array();
    private $element = "div";
    private $id = "";
    private $innerHTML = "";

    public function __construct($element, $content = null) {
        $this->element = $element;
        if ($content) {
            $this->innerHTML = $content;
        }
    }

    public function addClass($classes) {
        if (!is_array($classes)) {
            $classes = explode(" ", $classes);
        }
        foreach ($classes as $class) {
            if (!in_array($class, $this->class)) {
                $this->class[] = $class;
            }
        }
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $innerHTML
     */
    public function setInnerHTML($innerHTML)
    {
        $this->innerHTML = $innerHTML;
    }

    public function getHtml() {
        $arrAttributes = $this->getAttributes();
        $attributes = "";
        foreach ($arrAttributes as $attr => $value) {
            $attributes .= $attr . "=\"" . htmlspecialchars($value) . "\" ";
        }
        $prefix = trim($this->element . " " . $attributes);
        if (empty($this->innerHTML)) {
            return "<" . $prefix . " />";
        } else {
            return "<" . $prefix . ">" . $this->innerHTML . "</" . $this->element . ">";
        }
    }
    private function getAttributes() {
        $attributes = array();
        if (!empty($this->id)) {
            $attributes["id"] = $this->id;
        }
        if (!empty($this->class)) {
            $attributes["class"] = implode(" ", $this->class);
        }
        return $attributes;

    }
    public function __toString()
    {
        return $this->getHtml();
    }


}