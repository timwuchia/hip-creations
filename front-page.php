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

	<div id="primary well" class="content-area well">
		<main id="main" class="site-main">



<section class="desktop">



				<?php 
					$about_logo = get_field('about_logo');
					$about_bg = get_field('about_bg');

					$about_brief = get_field('about_brief');
					$about_description = get_field('about_description');
				?>
				
<div class ="desktop-banner">
						<img src="<?php echo $about_logo['url']; ?>" alt="<?php echo $about_logo['alt']; ?>">
					<?php if($about_brief) : ?>
					<div class="about-brief">
						<?php echo $about_brief; ?>
					</div>

				<?php endif ?>
</div>

			<div id ="about-us" class ="about-us panel #about-us">


					<div class="about-bg">
						<img src="<?php echo $about_bg['url']; ?>" alt="<?php echo $about_bg['alt']; ?>">
					</div>
						<?php if($about_description) : ?>

						<div class="about-description">
							<?php echo $about_description; ?>
						</div>
					<?php endif ?>

			<div class="back-top">
				<a href="#top">
					<img src="<?php bloginfo('template_url'); ?>/images/top.png">
				</a>	 
			</div>

			</div>
					<!-- end of about us -->


			
	

			<section class="about-nessie panel">

			
			<?php
					$about_logo = get_field('about_logo');
					$about_nessie_title = get_field("about_nessie_title");
					
					$about_nessie_brief = get_field('about_nessie_brief');
			?>

<div class ="desktop-banner">
						<img src="<?php echo $about_logo['url']; ?>" alt="<?php echo $about_logo['alt']; ?>">
										<?php if($about_nessie_title) : ?>
					<div class="about-nessie-title"><h2><?php echo $about_nessie_title; ?></h2></div>
				<?php endif; ?>
						<div class="about-brief">
						<?php echo "<h3> $about_nessie_brief </h3>"; ?>
					</div>
				
</div>

				
			<?php 
				$about_nessie_img = get_field("about_nessie_image");

				$about_nessie_bg = get_field('about_nessie_bg');
				$about_nessie_content = get_field("about_nessie_content");
		
			?>

	<div class="about-nessie-bg">
			<img src="<?php echo $about_nessie_bg['url']; ?>" alt="<?php echo $about_nessie_bg['alt']?>">
	</div>
				
	<div class="about-nessie-info">
				<?php if($about_nessie_img) : ?>
					<div class="about-nessie-img"><img src="<?php echo $about_nessie_img['url']; ?>" alt="<?php echo $about_nessie_img['alt']?>"></div>
					
				<?php endif;?>

				<?php if($about_nessie_content) : ?>
				<div class="about-nessie-content"><?php echo $about_nessie_content; ?></div>
				<?php endif; ?>
</div>
<!-- end of about nessie info -->
			</section>
			<!-- end of about Nessie  -->




			<section class="about-tim panel">

			
			<?php
					$about_logo = get_field('about_logo');
					$about_tim_title = get_field("about_tim_title");
					
					$about_tim_brief = get_field('about_tim_brief');
			?>

<div class ="desktop-banner">
						<img src="<?php echo $about_logo['url']; ?>" alt="<?php echo $about_logo['alt']; ?>">
								<?php if($about_tim_title) : ?>
					<div class="about-tim-title"><h2><?php echo $about_tim_title; ?></h2></div>
				<?php endif; ?>
							<div class="about-brief">
						<?php echo "<h3> $about_tim_brief </h3>"; ?>
					</div>
				
				
</div>

				
			<?php 
				$about_tim_img = get_field("about_tim_image");

				$about_tim_bg = get_field('about_tim_bg');
				$about_tim_content = get_field("about_tim_content");
		
			?>

	<div class="about-tim-bg">
			<img src="<?php echo $about_tim_bg['url']; ?>" alt="<?php echo $about_tim_bg['alt']?>">
	</div>
				
	<div class="about-tim-info">
				<?php if($about_tim_img) : ?>
					<div class="about-tim-img"><img src="<?php echo $about_tim_img['url']; ?>" alt="<?php echo $about_tim_img['alt']?>"></div>
					
				<?php endif;?>
		
				<?php if($about_tim_content) : ?>
				<div class="about-tim-content"><?php echo $about_tim_content; ?></div>
				<?php endif; ?>
</div>
<!-- end of about tim info -->
			</section>


<section id ="service" class="service panel">

			<?php
			$service_logo = get_field('service_logo');
			$service_bg = get_field('service_bg');
			$service_brief =get_field('service_brief');
			?>



<div class ="desktop-banner">

<img src="<?php echo $service_logo['url']; ?>" alt="<?php echo $service_logo
['alt']; ?>">



		<div class="service-brief">
			<h3><?php echo $service_brief; ?></h3>
		</div>
				
</div>

<div class ="service-bg">
	<img src="<?php echo $service_bg['url']; ?>" alt="<?php echo $service_bg
	['alt']; ?>">
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




<section id="work" class="work panel">

		<?php
					$work_logo = get_field('work_logo');
					$work_brief =get_field('work_brief');
					$work_bg = get_field('work_bg');
			?>
	

<div class ="desktop-banner">
						<img src="<?php echo $work_logo['url']; ?>" alt="<?php echo $work_logo['alt']; ?>">
					<div class="work-brief">
						<h3><?php echo $work_brief; ?></h3>
					</div>
				
</div>

		<div class ="work-bg">
					<img src="<?php echo $work_bg['url']; ?>" alt="<?php echo $work_bg['alt']; ?>">
				
			</div>


	<?php 
			
					$work_sub_title = get_field("work_page_sub_title");
				?>

<div class ="work-content">

				<?php if(have_rows("works")) : ?>

				<div class="all-works">
				<?php while(have_rows("works")) : the_row(); ?>
				<?php 
					$work_image = get_sub_field("work_image");
					$work_content = get_sub_field("work_content");
				?>
				<div class="the-work">

					<div class="work-image"><img src="<?php echo $work_image['url']; ?>" alt=""></div>
					<div class="work-info"><?php echo $work_content; ?></div>

				</div>

				<?php endwhile; ?>
				</div>
				<?php endif;?>
	</div>
	<!-- end of work content -->


</section>

<section class="contact-section" id="contact">

				<div class ="desktop-banner">
					<div class="contact-brief">
							<h3><?php echo $contact_description ?></h3>
						</div>
								
				<img src="<?php echo $contact_logo['url']; ?>" alt="<?php echo $contact_logo
				['alt']; ?>">

			<div class="contact-content">
					<?php if(have_rows("contact")) : ?>
					<?php while(have_rows("contact")) : the_row(); ?>
				<?php 
					$contact_title = get_sub_field("contact_description");
					$contact_description = get_sub_field("contact_title");
					$contact_logo = get_sub_field("contact_logo");
				?>
					<div class="contact-description"><?php echo $contact_description; ?></div>
					<div class="contact-title"><?php echo $contact_title; ?></div>
						<?php endwhile; ?>
				<?php endif;?>
			</div>

	</section>






</section>
<!-- end of desktop -->


			


<section class="mobile">
			<section class="about-us mobile" id="about-us">
				<?php 
					$about_logo = get_field('about_logo');
					$about_bg = get_field('about_bg');

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
					<div class="about-tim-title"><h2><?php echo $about_tim_title; ?></h2></div>
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
					<div class="about-nessie-title"><h2><?php echo $about_nessie_title; ?></h2></div>
				<?php endif; ?>
				<?php if($about_nessie_content) : ?>
				<div class="about-nessie-content"><?php echo $about_nessie_content; ?></div>
				<?php endif; ?>
			</section>


<div class = "service-mobile">

			<section class="service-section #services">
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

			<section class="work-section #our-work">
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
		
<!-- end of service mobile -->
			
		<section class="contact-section #contact">

			<div class="contact-content">
					<?php if(have_rows("contact")) : ?>
					<?php while(have_rows("contact")) : the_row(); ?>


				<?php 
					$contact_title = get_sub_field("contact_description");
					$contact_description = get_sub_field("contact_title");
					$contact_logo = get_sub_field("contact_logo");
				?>

				
					<div class="contact-title"><?php echo $contact_title; ?></div>
					<div class="contact-logo"><img src="<?php echo $contact_logo['url']; ?>" alt="">
					</div>
					<div class="contact-description"><?php echo $contact_description; ?></div>
			

						<?php endwhile; ?>
				<?php endif;?>
			</div>



			</section>

</section>
<!-- end of mobile -->



		</main>
	</div>

<?php
get_footer();
