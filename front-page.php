<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hip_Creations
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section id="about-us">
				<?php 
					$about_logo = get_field('about_logo');
					$about_brief = get_field('about_brief');
					$about_description = get_field('about_description');
				?>
				<?php if($about_logo) : ?>
					<div class="about-logo">
						<img src="<?php echo $about_logo['url']; ?>" alt="<?php echo $about_logo['alt']; ?>">
					</div>
				<?php endif; ?>
				<?php if($about_brief) : ?>
					<div class="about-brief">
						<?php echo $about_brief; ?>
					</div>
				<?php endif ?>
				<?php if($about_description) : ?>
					<div class="about-description">
						<?php echo $about_description; ?>
					</div>
				<?php endif ?>
			</section>
		</main>
	</div>

<?php
get_footer();
