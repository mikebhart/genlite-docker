<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hartsoft
 * @subpackage GenLite
 * @since 1.4.2
 * @version 1.4.2
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
			
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class('genlite__fade_in'); ?>>
 	
		<header>

			<section id="genlite-header__navbar">

				<nav class="navbar navbar-expand-lg">

					<a class="navbar-brand" href="<?php echo esc_url(get_home_url()); ?>" title="<?php echo bloginfo('name'); ?>">

						<?php if (has_custom_logo()) { 

								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

								<img id="genlite-header__image"  src="<?php echo esc_url( $logo[0] ) ?>" alt="<?php echo bloginfo('name'); ?>">

							<?php } else { ?>

								<h2><?php echo bloginfo( 'name' ); ?></h2>
							
							<?php	}  ?>

					</a>				

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerHeaderMenu" aria-controls="navbarTogglerHeaderMenu" aria-expanded="false" aria-label="Toggle navigation">
						<span><i class="fas fa-bars"></i>
					</button>

					<div class="collapse navbar-collapse" id="navbarTogglerHeaderMenu">

								<?php	

									if ( has_nav_menu( 'primary' ) ) {

														wp_nav_menu( array(
															'menu'              => 'primary',
															'theme_location'    => 'primary',
															'depth'             => 5,
															'menu_id'           => 'primary-menu',
															'menu_class'        => 'navbar-nav',
															'container'         => 'div',
															'container_id'      => 'genlite-navbar',
															'container_class'   => 'ml-auto',
															'fallback_cb'       => 'genlite_Walker_Nav_Menu::fallback',
															'walker'            => new genlite_Walker_Nav_Menu())
															);		

									} else { 

														echo '<div class="text-center">';
														echo esc_attr_e('You need to add a Menu. Go into Customizer | Menus | Select a Menu | Menu Location - Tick Top Menu checkbox.','genlite');
														echo '</div>'; 

									}
								?>

						<div class="d-none d-lg-block">

							<ul class="genlite-social">

								<?php  get_template_part('/template-parts/render-socials'); ?>		

							</ul>

						</div>
																						
					</div>
								
				</nav>
						
			</section>
					
		</header>
	

	
