<?php
//Create all site sidebars

	register_sidebar( array(
		'name'          => esc_html__( 'Footer sidebar', 'avantime' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'avantime' ),
		'before_widget' => '<section id="%1$s" class=" %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );