<?php

// style & scripts
include_once('inc/moderna_files.php');

// nav menus 
include_once('inc/nav_menus.php');

// default Supports
include_once('inc/default_supports.php');

// theme Supports
include_once('inc/theme-support.php');

// custom posts
include_once('inc/custom_posts.php');

// theme widgets
include_once('inc/theme_widgets.php');

// shortcode
include_once('inc/moderna_shortcode.php');

// option tree meta boxes
include_once('inc/meta-boxes.php');



/**
* Required: set 'ot_theme_mode' filter to true.
*/
add_filter( 'ot_theme_mode', '__return_true' );
// add_filter( 'ot_type_social_links_load_defaults', '__return_true'  );
/**
* Required: include OptionTree.
*/
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

// theme options

include_once('inc/theme-options.php');

if ( ! function_exists( 'ot_social_links_settings' ) ) {

  function ot_social_links_settings( $id ) {
    
    $settings = apply_filters( 'ot_social_links_settings', array(
    array(
      'id'        => 'name',
      'label'     => __( 'Name', 'option-tree' ),
      'desc'      => __( 'Enter the name of the social website.', 'option-tree' ),
      'std'       => '',
      'type'      => 'text',
      'class'     => 'option-tree-setting-title'
    ),
    array(
      'id'        => 'title',
      'label'     => 'Title',
      'desc'      => __( 'Enter the text shown in the title attribute of the link.', 'option-tree' ),
      'type'      => 'text'
    ),
    array(
      'id'        => 'href',
      'label'     => 'Link',
      'desc'      => sprintf( __( 'Enter a link to the profile or page on the social website. Remember to add the %s part to the front of the link.', 'option-tree' ), '<code>http://</code>' ),
      'type'      => 'text',
    ),
    array(
      'id'        => 'icon_name',
      'label'     => 'Icon',
      'desc'      => sprintf( __( 'Enter a link to the profile or page on the social website. Remember to add the %s part to the front of the link.', 'option-tree' ), '<code>http://</code>' ),
      'type'      => 'text',
    )
    ), $id );
    
    return $settings;
  
  }
  
  }
  
