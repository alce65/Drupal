<?php
/**
* @file
* Contains \Drupal\hello_world\HelloWorldController.
*/

namespace Drupal\modulo_tres\Controller;
/**
* Provides route responses for the hello world page example.
*/
class ModuloTresController {
    /**
    * Returns a simple hello world page.
    *
    * @return array
    * A very simple renderable array is returned.
    */
    public function myCallbackMethod() {
        $content = 'Hola';
        $element = array(
            '#markup' => $content
        );
        return $element;
    }
}