<?php

namespace laserred\LRCPT;

class LRCPT {

  //public vars
  public $name;
  public $labels;
  public $args;
  public $metaboxes;

  //vars for defaults
  private $_labels;
  private $_args;



  /**
  * Sets default values, merges these with provided values then calls the functions to set up the CPT/Metaboxes.
  */
  public function __construct() {
    //set defaults
    $this->setDefaultLabels();
    $this->labels = array_merge($this->_labels, $this->labels);
    $this->setDefaultArgs();
    $this->args = array_merge($this->_args, $this->args);

    if(empty($this->name)){
      $this->name = "CPT";
    }


    //call the methods
    add_action('init', array($this, 'register'));
    add_filter( 'cmb_meta_boxes', array( $this, 'metaboxes' ) );
  }



  /**
  * Registers a new CPT
  * @return result of register_post_type
  */
  public function register(){
    return register_post_type($this->name ,$this->args);
  }



  /**
  * Adds provided metabox array to the global metabox array
  * @param  Array  $metaboxes existing metaboxes.
  * @return [type]            array including provided metaboxes.
  */
  private function metaboxes(Array $metaboxes){
    if(!empty($this->metaboxes)){
      $metaboxes[] = $this->metaboxes;
    }

    return $metaboxes;
  }




  /**
  * Sets default values on properties, just keeps these messy arrays from being at the top of the file.
  */
  private function setDefaultLabels(){

    $this->_labels = array(
      'name'               => _x( 'default name please change', 'post type general name' ),
      'singular_name'      => _x( 'default name please change', 'post type singular name' ),
    );

  }

  private function setDefaultArgs(){
    $this->_args = array(
      'labels' 				=> $this->labels,
      'public' 				=> true,
      'supports' 				=> array('title', 'editor', 'thumbnail'),
      'hierarchical'        	=> true,
      'show_ui'            	=> true,
      'show_in_menu'       	=> true,
      'show_in_nav_menus'  	=> true,
      'show_in_admin_bar'  	=> true,
      'menu_position'      	=> 20,
      'can_export'          	=> true,
      'has_archive'         	=> false,
      'publicly_queryable'  	=> false,
      'exclude_from_search' 	=> true,
      'capability_type'     	=> 'post',
      'menu_icon' 			=> 'dashicons-carrot'
    );
  }

}
