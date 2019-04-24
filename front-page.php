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
			<section class="about-us">
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
			<section class="about-tim-section">
			<?php 
				$about_tim_img = get_field("about_tim_image");
				$about_tim_title = get_field("about_tim_title");
				$about_tim_content = get_field("about_tim_content");
			?>
				<?php if($about_tim_img) : ?>
					<div class="about-tim-img"><img src="<?php echo $about_tim_img['url']; ?>" alt="<?php echo $about_tim_img['alt']?>"></div>
				<?php endif;?>
				<?php if($about_tim_title) : ?>
					<div class="about-tim-title"><h3><?php echo $about_tim_title; ?></h3></div>
				<?php endif; ?>
				<?php if($about_tim_content) : ?>
				<div class="about-tim-content"><?php echo $about_tim_content; ?></div>
				<?php endif; ?>
			</section>
			<section class="about-nessie-section">
			<?php 
				$about_nessie_img = get_field("about_nessie_image");
				$about_nessie_title = get_field("about_nessie_title");
				$about_nessie_content = get_field("about_nessie_content");
			?>
				<?php if($about_nessie_img) : ?>
					<div class="about-nessie-img"><img src="<?php echo $about_nessie_img['url']; ?>" alt="<?php echo $about_nessie_img['alt']?>"></div>
				<?php endif;?>
				<?php if($about_nessie_title) : ?>
					<div class="about-nessie-title"><h3><?php echo $about_nessie_title; ?></h3></div>
				<?php endif; ?>
				<?php if($about_nessie_content) : ?>
				<div class="about-nessie-content"><?php echo $about_nessie_content; ?></div>
				<?php endif; ?>
			</section>
			<section class="service-section">
				<?php 
					$service_title = get_field("service_title");
					$service_sub_title = get_field("service_sub_title");
				?>
				<div class="services-title-section">
					<h2><?php echo $service_title; ?></h2>
					<h3><?php echo $service_sub_title; ?></h3>
				</div>
				<div class="service-content">
				<?php if(have_rows("service_content")) : ?>
				<?php while(have_rows("service_content")) : the_row(); ?>
				<?php 
					$service_desc_title = get_sub_field("service_description_title");
					$service_desc_content = get_sub_field("service_description_content");
				?>
					<div class="service-description">
						<h3><?php echo $service_desc_title; ?></h3>
						<div><?php echo $service_desc_content; ?></div>
					</div>
				<?php endwhile; ?>
				<?php endif?>
				</div>
			</section>
			<section class="work-section">
				<?php 
					$work_title = get_field("work_page_title");
					$work_sub_title = get_field("work_page_sub_title");
				?>
				<div class="work-titles">
					<h2><?php echo $work_title; ?></h2>
					<h3><?php echo $work_sub_title?></h3>
				</div>
				<?php if(have_rows("works")) : ?>
				<div class="all-works">
				<?php while(have_rows("works")) : the_row(); ?>
				<?php 
					$work_image = get_sub_field("work_image");
					$work_content = get_sub_field("work_content");
				?>
				<div class="work">
					<div class="work-image"><img src="<?php echo $work_image['url']; ?>" alt=""></div>
					<div class="work-content"><?php echo $work_content; ?></div>
				</div>
				<?php endwhile; ?>
				</div>
				<?php endif;?>
			</section>
			<section class="contact-section">
			
			</section>
		</main>
	</div>

<?php
get_footer();
