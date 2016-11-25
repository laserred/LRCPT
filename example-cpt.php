<?php

class ExampleCPT extends LRCPT{

    public $name;
    public $labels = array('name' => 'Blaa');

    public $args = array();

    public $metaboxes = array();

    /**
    * Call the parent constuctor to do all the work.
    */
    public function __construct(){
        $this->metaboxes[] = array(
            'id'       => 'blaa',
            'title'    => 'blaa',
            'pages'    => 'blaa',
            'fields'   => array(
                array(
                    'id' => 'sometext',
                    'name' => 'Some text',
                    'type' => 'text',
                    'cols' => 3
                ),
            )
        );

        PARENT::__construct();
    }
}
