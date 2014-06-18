<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 18/06/14
 * Time: 11:14
 */

namespace Webberig\HtmlUtilbelt\Generator;


use Webberig\HtmlUtilbelt\Element;

abstract class GeneratorAbstract {
    /**
     * Set element properties using a json string
     * @param Element $element array
     * @param $data array
     * @return Element $element
     */
    public function updateElement(Element $element, array $data) {
        if (isset($data["id"])) {
            $element->setId($data["id"]);
        }
        if (isset($data["class"])) {
            $element->addClass($data["class"]);
        }
        return $element;
    }
    public function createElement($tag, $content = "", $options = array()) {
        $element = new Element($tag, $content);
        return $this->updateElement($element, $options);
    }
} 