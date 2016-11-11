<?php
//Acrticle shortcode

//SETTINGS
vc_map(array(
    "name" => esc_html__("Articles list", "avantime"),
    "base" => "avantime_sc_article",
    "category" => esc_html__("Avantime Custom", "avantime"),
    "description" => esc_html__('Show fine articles list.', "avantime"),
    "class" => 'avantime_sc_article_class',
    "params" => array(
    array(
        "type" => "textfield",
          "heading" => esc_html__("Widget title", "avantime"),
          "param_name" => "title",
          "std" => '',
          "description" => esc_html__("What text use as a widget title. Leave blank to use default widget title.", "avantime")
          ),
    array(
        "type" => "checkbox",
          "heading" => esc_html__("Display post date?", "avantime"),
          "param_name" => "show_date",
          "value" => Array(esc_html__("Yes", "avantime") => '1'),
          ),
    array(
        "type" => "checkbox",
          "heading" => esc_html__("Display post images if exists?", "avantime"),
          "param_name" => "show_image",
          "value" => Array(esc_html__("Yes", "avantime") => '1'),
          ),
    array(
        "type" => "textfield",
          "heading" => esc_html__("'Show more' text", "avantime"),
          "param_name" => "show_more",
          "std" => 'Show more'
          ),
    array(
        "type" => "textfield",
          "heading" => esc_html__("Number of posts", "avantime"),
          "param_name" => "count",
          "std" => 3,
          "description" => esc_html__("Enter number of posts to display.", "avantime")
          ),
    array(
        "type" => "textfield",
          "heading" => esc_html__("Extra class name", "avantime"),
          "param_name" => "class",
          "std" => '',
          "description" => esc_html__("tyle particular content element differently - add a class name and refer to it in custom CSS.", "avantime")
          )

      )
  )
);


//BODY
if (!function_exists('avantime_sc_article_func')){
  function avantime_sc_article_func($atts){
    extract($atts);

    if (!empty($title)){
      ?>
      <h2 class="text-center liner">
        <?php echo $title;?>
      </h2>
      <?php
    }

    $args = array(
      'post_type' => 'post',
      'post_status' =>'publish',
      'per_page' => 3
    );
    if (!empty($count))
     $args ['per_page'] = $count;

   $query = new WP_Query( $args );

   if ($query->have_posts()){
    ?>
    <div class="post-holder">
      <?php
      foreach ($query->posts as $post) {
        ?>
        <article class="post">

        <?php if (!empty($show_date)){ 
          $datetime = get_the_date( 'Y-m-d', $post->ID );
          $date = get_the_date( 'd F Y', $post->ID );
          ?>  
        <time datetime="<?php echo $datetime;?>"><?php echo $date;?></time>
        <?php }?>

        <?php if (!empty($show_image)){ 
          $image = get_the_post_thumbnail($post->ID);
          if (!empty($image)){
            echo $image;
          ?>  
        <?php }} ?>

        <h3><a href="<?php echo get_post_permalink($post->ID);?>"><?php echo $post->post_title;?></a></h3>
        <p>
         <?php echo $post->post_content;?>
         </p>
        <div class="read-more">
          <a href="<?php echo get_post_permalink($post->ID);?>"><?php esc_html_e("Läs mer…", "avantime");?></a>
        </div>
        </article>
        <?php
      }
     }
      ?>
      <?php if (!empty($show_more)){ ?>  
      <div class="for-more">
        <span class="link-wrap">
          <a href="#"><?php echo $show_more;?></a>
        </span>
      </div>
      <?php }?>
    </div>
    <?php
  }
}
