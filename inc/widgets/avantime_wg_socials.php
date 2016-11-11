<?php 
/**
 * Avantime Socail Widget
 * avantime widgets
 *
 */

class avantime_wg_socials extends WP_Widget {

  function __construct() {
    $widget_ops = array(
      'classname' => 'avantime-wg-social', 
      'description' => esc_html__( "Used only single page items.", 'avantime') 
    );
    
    parent::__construct('avantime-wg-social', esc_html__('Avantime Social', 'avantime'), $widget_ops);
    $this->alt_option_name = 'avantime-wg-social';

    add_action( 'save_post',    array($this, 'avantime_flush_widget_cache') );
    add_action( 'deleted_post', array($this, 'avantime_flush_widget_cache') );
    add_action( 'switch_theme', array($this, 'avantime_flush_widget_cache') );
  }

  function widget($args, $instance) {
    global $avantime, $avantime_config;
    
    $out_settings = null;
    
    $cache = wp_cache_get('avantime_wg_social', 'widget');

    if ( !is_array($cache) ) $cache = array();

    if ( ! isset( $args['widget_id'] ) )
      $args['widget_id'] = $this->id;

    if ( isset( $cache[ $args['widget_id'] ] ) ) {
      echo $cache[ $args['widget_id'] ];
      return;
    }
    $title = '';
    ob_start();
    extract($instance);
    extract($args);

    echo $before_widget; 
    if ( ! empty( $title) ) {
      echo $args['before_title'] . apply_filters( 'widget_title', $title ) . $args['after_title'];
    }

    if (!empty($facebook) || !empty($twitter) || !empty($youtube)){
      ?>
      <ul class="list-unstyled social-networks">
        <?php if (!empty($facebook)){?>
        <li>
          <a href="<?php echo $facebook;?>"><?php esc_html_e( 'Facebook:', 'avantime' ); ?> <span class="icon icon-facebook"></span></a>
        </li>    
        <?php }?>
        <?php if (!empty($youtube)){?>
        <li>
          <a href="<?php echo $youtube;?>"><?php esc_html_e( 'YouTube:', 'avantime' ); ?> <span class="icon icon-youtube"></span></a>
        </li>    
        <?php }?>
        <?php if (!empty($twitter)){?>
        <li>
          <a href="<?php echo $twitter;?>"><?php esc_html_e( 'Twitter:', 'avantime' ); ?> <span class="icon icon-twitter"></span></a>
        </li>    
        <?php }?>

      </ul>
      <?
    }
    
    echo $after_widget; 
    
    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set('avantime_wg_social', $cache, 'widget');
  }

  function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title']    = strip_tags($new_instance['title']);   
    $instance['facebook']    = strip_tags($new_instance['facebook']);   
    $instance['youtube']    = strip_tags($new_instance['youtube']);   
    $instance['twitter']    = strip_tags($new_instance['twitter']);   
    $this->avantime_flush_widget_cache();

    $alloptions = wp_cache_get( 'alloptions', 'options' );
    if ( isset($alloptions['avantime-wg-social']) )
      delete_option('avantime-wg-social');

    return $instance;
  }

  function avantime_flush_widget_cache() {
    wp_cache_delete('avantime_wg_social', 'widget');
  }

  function form( $instance) {
    $title    = isset( $instance['title'] )  ? esc_attr( $instance['title']) : esc_html__('Socials', 'avantime');
    $facebook    = isset( $instance['facebook'] )  ? esc_attr( $instance['facebook']) : '';
    $youtube    = isset( $instance['youtube'] )  ? esc_attr( $instance['youtube']) : '';
    $twitter    = isset( $instance['twitter'] )  ? esc_attr( $instance['twitter']) : '';

  ?>
    <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'avantime' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
    <hr/>
    <p><label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php esc_html_e( 'Facebook URL:', 'avantime' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo $facebook; ?>" /></p>
    
    <p><label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php esc_html_e( 'Youtube URL:', 'avantime' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" type="text" value="<?php echo $youtube; ?>" /></p>
    
    <p><label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php esc_html_e( 'Twitter URL:', 'avantime' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo $twitter; ?>" /></p>
    
  <?php
  }
}