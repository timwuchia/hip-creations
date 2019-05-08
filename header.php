<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hip_Creations
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>

	<?php wp_head(); ?>
	<style>
		html {
			margin-top: 0 !important;
		}
	</style>
</head>

<body <?php body_class(); ?>>
<div id="page well" class="site well">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hip-creation' ); ?></a>

	<header id="masthead" class="site-header">
		<?php 
			$logo_image = get_field('logo_image','options');
			if($logo_image) :
		?>
		<div class="top-banner">
			<img src="<?php echo $logo_image['url'];?>" alt="<?php echo $logo_image['alt'];?>">
		</div>



		<div class = "desktop-header">


				<div class ="landing-page">

					<div class ="desktop-banner">

			<?php
				$hipcreation_brief = get_field('hipcreation_brief');
			?>
					
			<img src="<?php echo $logo_image['url'];?>" alt="<?php echo $logo_image['alt'];?>">

			<div class ="hipcreation-brief">
				<h3> <?php echo $hipcreation_brief; ?>
			</div>
	

					</div>

				<div class ="landing_bg">

					<?php 

						$header_bg = get_field('header_bg');
				
					?>

					<img src="<?php echo $header_bg['url']; ?>" alt="<?php echo $header_bg['alt']; ?>">
				

			</div>
			<!-- end of landig bg -->



			
	
	

				

				</div>










		</div>
		<!-- end of desktop -->






		<?php endif; ?>


		<nav id="site-navigation" class="main-navigation">
					<div class ="navigation-container">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>

					</div>
			<!-- end of navigation container -->
		</nav><!-- #site-navigation -->
	


	</header><!-- #masthead -->

	<div id="content" class="site-content">
