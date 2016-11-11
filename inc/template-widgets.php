<?php
//Automatic widgets loading

add_action('widgets_init', 'avantime_widgets_loader');

  if (!function_exists('avantime_widgets_loader')){
    function avantime_widgets_loader(){
      $widget_list = array(
          'avantime_wg_socials'
      ); 
      foreach ($widget_list as $class) {
        require get_template_directory() . '/inc/widgets/'.$class.'.php';
        register_widget($class);  
     }
    }
  }