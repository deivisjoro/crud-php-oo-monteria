<?php

    class View{

        public $layout;
        public $vista;

        public function __construct(){

        }

        public function render($nombre, $datos){            
            include_once('app/view/layout/'.$this->layout.'.php');
        }

    }

?>