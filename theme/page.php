<?php 

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hartsoft
 * @subpackage GenLite
 * @since 1.4.2
 * @version 1.4.2
 */

get_header();

if ( has_post_thumbnail( $post->ID ) ) { 
	$hero_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
}

?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section id="genlite-page-hero" class="genlite-page-hero__image" style="background-image: url('<?php echo esc_url($hero_image); ?>')">
			
		<div class="genlite-page-hero__overlay"></div>
				
		<div class="genlite-page-hero__overlay-text"><h1><?php the_title(); ?></h1></div>
			
		<div id="genlite-page-hero__scroll-down" class="genlite-page-hero__scroll-down">

			<a href="#genlite-page-content"><span></span><span></span><span></span></a>
	
		</div>

	</section>

	<section id="genlite-page-content" class="genlite__content"><span></span></section>


	<?php

			// content editor has its own sections
			while(have_posts()) : the_post(); 

				the_content();

			endwhile; wp_reset_query();
					
			if ( get_comments_number() ) {
					comments_template();
			}	
			
	?>


	
</article>


<?php get_footer(); ?>