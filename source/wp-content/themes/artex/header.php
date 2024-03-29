<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div class="siteWrapper">
		<?php get_sidebar('right'); ?>
		<?php get_sidebar('left'); ?>
			<!-- wrapper -->
			<div class="wrapper">
				<nav class="navbar-main navbar navbar-fixed-top" role="navigation">
					<div class="left-menu-contain">
						<a class="left-menu show-menu" data-target=".sidebar-left" href="javascript:;"></a>
					</div>
					<div class="navbar-copy">
						<-&nbsp;GRAPHIC DESIGN AND ONLINE MARKETING CONSULTING | BLOG&nbsp;->
					</div>
					<div class="right-menu-contain">
						<a class="right-menu show-menu" data-target=".sidebar-right" href="javascript:;"></a>
					</div>
				</nav>
				<!-- header -->
				<header class="header clear" role="banner">
					<?php if(get_post_type() == 'page') { ?>
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<div class="featured-image">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</div>
					<?php endif; ?>
					<!-- /post thumbnail -->
					<?php } ?>
				</header>
				<!-- /header -->
				<main class="main" role="main">
					<div class="container">
