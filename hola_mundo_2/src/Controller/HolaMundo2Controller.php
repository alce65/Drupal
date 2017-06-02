<?php
/**
* @file
* Contains \Drupal\hola_mundo_2\HolaMundo2Controller.
*/
namespace Drupal\hola_mundo_2\Controller;
/**
* Provides route responses for the hello world page example.
*/
class HolaMundo2Controller {
    /**
    * Returns a simple hello world page.
    *
    * @return array
    * A very simple renderable array is returned.
    */
    public function primerSaludo() {
        $element = array(
            '#markup' => '<p><b>Primer Hola Mundo en Drupal 8</b></p>'
             );
        return $element;
    }
}