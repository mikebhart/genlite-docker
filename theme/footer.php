<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hartsoft
 * @subpackage GenLite
 * @since 1.4.2
 * @version 1.4.2
 */

	$footer_col_size="";
	$footer_col_count = 0;

	for ( $i = 1; $i <= 4; $i++ ) {

		if ( is_active_sidebar( 'genlite_footer_' . $i ) ) {
			$footer_col_count++;
		}
		
	}



	$found_socials = 0;
	$genlite_social_links = $GLOBALS[GENLITE_SOCIAL_IDS];

	for($u = 0; $u < count($genlite_social_links); $u++) {
									
		$socialId = GENLITE_SOCIAL_PREFIX . $genlite_social_links[$u];
				
		if(get_theme_mod($socialId)) {  
			$found_socials++;
			break;
		
		}
	}
	

?>
	
<footer>

	<div class="container">
		<div class="row pt-1 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5"></div>
	</div>

	<?php  

		if ( is_active_sidebar( 'genlite_footer_1' ) || 
			is_active_sidebar( 'genlite_footer_2' ) || 
			is_active_sidebar( 'genlite_footer_3' ) || 
			is_active_sidebar( 'genlite_footer_4' ) ) {  ?>

				<div class="container">	

					<div class="row">

							 <?php

				                for ( $i = 1; $i <= 4 ; $i++ ) {

				                    if ( is_active_sidebar( 'genlite_footer_' . $i ) ) {

				                    	switch ($footer_col_count) {
										    case "1": $footer_col_size = '12';  break;
										    case "2": $footer_col_size = '6'; break;
										    case "3": $footer_col_size = '4'; break;
										    case "4": $footer_col_size = '3'; break;
										    default: $footer_col_size = '12';
										}
						                   
					                ?>
					                	<div class="col-lg-<?php echo esc_attr($footer_col_size); ?> col-md-<?php if($footer_col_size == '3'): echo  esc_attr( '6'); elseif($footer_col_size == '4'): 
												echo esc_attr( '4'); else : echo  esc_attr( $footer_col_size) ; endif ;?>">

							                   	<div class="footer-column footer-active-<?php echo  esc_attr($footer_col_count) ;?> role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'genlite' ); ?>">
						                            
						                       		<?php dynamic_sidebar( 'genlite_footer_' . $i ); ?>
						                               
						                   		</div>
						                		
						           		</div>
								          
				        <?php     	}
								} ?>


					</div>
					
				</div> 
				
				
			<?php
			
				}   
				
				if ($found_socials > 0) {

				?>

						
						
						<div class="container">

							<div class="row">

								<div class="col-12 text-center pt-3 pb-5">

								<ul class="genlite-social">

										<?php get_template_part('/template-parts/render-socials'); ?>		

									</ul>

				
								</div>		
					
							</div>

						</div>

				<?php }
		
					if ( is_active_sidebar( 'genlite_footer_footnote' )) { ?>

							<div class="container-fluid">


								<div class="row">

									<div class="col-12 text-center footnote pl-3 pr-3">

										<?php dynamic_sidebar( 'genlite_footer_footnote' ); ?>
					
									</div>		
						
								</div>

							
							</div>

						<?php } ?>

						<a class="genlite-back-to-top" href="#" role="button" title="<?php esc_attr_e('Click to return to top','genlite'); ?>">
							<i class="fas fa-chevron-up"></i>
						</a>

					</footer>	
	

			</main>

		<?php wp_footer(); ?>

			
	</body>

</html>
