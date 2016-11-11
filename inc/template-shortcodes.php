<?php
//Automatic shortcode loading

add_action('init', 'avantime_shortcodes_init', 99);

  if (!function_exists('avantime_shortcodes_init')){
    function avantime_shortcodes_init(){
      $shortcode_list = array(
          'avantime_sc_article'
      );
      foreach ($shortcode_list as $tag) {
        require get_template_directory() . '/inc/shortcodes/'.$tag.'.php';
        add_shortcode($tag, $tag.'_func');  
     }
    }
  }