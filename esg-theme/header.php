<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> <?php echo get_bloginfo('description'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php wp_head(); ?>
  </head>
  <body>
  <div class="outside-container">
  <div class="container">
	<div class="row full-width">
		<div class="tagline text-center">
			<?php echo get_bloginfo('description'); ?>
		</div>
		<div class="large-12 medium-12 small-12 columns text-center hero">
			<div class="box ">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/esg-logo.jpg" alt="ESG Logo">
				</a>
			</div>
			<div>
				<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			</div>
			<div class="box hide-for-small-only">
				<img src="http://sc4.edu/uploadedImages/Website/Website_Assets/Images/SiteSpecific/sc4-logo-lg.gif?n=2829" alt="">
			</div>
		</div>
	</div>
	<div class="row full-width">
		<nav class="header-navigation hide-for-small-only menu">
			<?php wp_nav_menu( $defaults ); ?>
		</nav>
		<nav class="header-navigation-small hide-for-large text-right">
			<div class="navigation-menu">
				<div class="hamburger-icon">
        			<b>Navigation</b> <i class="fa fa-bars"></i>
      			</div>
			</div>
			<div class="mobile-links text-center menu">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>
		</nav>
	</div>

