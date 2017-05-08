<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php bloginfo('name'); ?>
	</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'class-name' ); ?>>
	<header id="header">
		<div class="left"></div>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('description'); ?>">
			<h1>
				<?php bloginfo('description'); ?>
			</h1>
		</div>
		<a href="javascript:void(0)" class="right" id="menu-button">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</a>
	</header>
	<nav class="menu-wrapper">
		<?php
					$args = array(
						'theme_location'=>'primary'	
					);
				?>
			<?php wp_nav_menu($args); ?>
			<div class="menu-close">
				<a href="javascript:void(0)" id="menu-close">
					<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 195.8 195.8" style="enable-background:new 0 0 195.8 195.8;" xml:space="preserve">
						<polygon class="exit-button" points="105,97.9 195.8,188.7 188.7,195.8 97.9,104.9 7.1,195.8 0,188.7 90.8,97.9 0,7.1 7.1,0 97.9,90.8 188.7,0 195.8,7.1 "/>
					</svg>
				</a>
			</div>
	</nav>
