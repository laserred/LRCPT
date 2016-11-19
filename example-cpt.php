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
    PARENT::__construct();
  }
}
