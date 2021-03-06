<?php /*Template Name: Home Page*/

get_header(); ?>


<div class="container">
	<?php
		while ( have_posts() ) : the_post(); ?>
		<section id="hero" class="hero">
			<?php the_post_thumbnail(); ?>
		</section>
		<?php the_content();
		endwhile;
	?>
		<?php 
		$hpbPod1 = new Pod('home-page-block-1');
		$hpbPod1->findRecords('name', -1);
		echo $hpbPod1->showTemplate('Home Page Block Template 1');
	
		$hpbPod2 = new Pod('home-page-block-2');
		$hpbPod2->findRecords('name', -1);
		echo $hpbPod2->showTemplate('Home Page Block Template 2');
		
		$hpiPod = new Pod('home-page-item');
		$hpiPod->findRecords('name', -1); 
		echo $hpiPod->showTemplate('Home Page Items Template');
	?>
		<section class="contact-form">
			<div class="title">
				<h1>give us a <span class="orange">hoot</span></h1>
			</div>
			<div class="form">
				<div class="form-container">
					<?php 
						gravity_form( 1, false, false, false, '', true );
					?>
				</div>
			</div>
		</section>
</div>


<?php get_footer(); ?>
