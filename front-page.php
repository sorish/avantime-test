<?php
/**
 * The front page template file.
 *
 * The front-page.php template file is used to render your site’s front page, 
 * whether the front page displays the blog posts index (mentioned above) or a static page. 
 * The front page template takes precedence over the blog posts index (home.php) template.
 *  If the front-page.php file does not exist, WordPress will either use the home.php or page.php 
 *  files depending on the setup in Settings → Reading. If neither of those files exist, it will use the index.php file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package avantime
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if (!is_page() && have_posts() ):
			
				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			

		endif;
		if(is_page() && have_posts()): //if page fronpage
		/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'landing');

				endwhile;

		endif;

		if(!have_posts()):
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
if(!is_page()):
	get_sidebar();
endif;
get_footer();