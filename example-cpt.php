<?php

use laserred\lrcpt;

class ExampleCPT extends lrcpt{

    public $name;
    public $labels = array('name' => 'Blaa');

    public $args = array();

    /**
    * Call the parent constuctor to do all the work.
    */
    public function __construct(){
        PARENT::__construct();
    }
}
