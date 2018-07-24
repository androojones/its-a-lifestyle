<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header id="header">
	<a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/"><img src="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/wp-content/uploads/2018/06/main-logo.png" alt="White logo for #itsalifestyle" class="main-logo"></a>
	<nav id="nav">
		<div class="nav-items">
			<img src="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/wp-content/uploads/2018/06/main-logo-colour.png" alt="Coloured logo for #itsalifestyle">
			<div class="nav__links">
				<a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/">Home</a>
				<a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/about">About</a>
				<a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/coaching">Coaching</a>
				<a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/blog">Blog</a>
				<a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/faq">FAQ</a>
				<a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/events">Events</a>
				<a href="http://localhost:8888/wordpress/wordpress-freelance-clients/hashtag/contact">Connect</a>
			</div>
			<div class="nav__media">
				<a href="https://www.instagram.com/hashtagitsalifestyle/" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="mailto:hello@hashtagitsalifestyle.com"><i class="far fa-envelope"></i></a>
			</div>
	  	</div>
	  	<div class="ham-nav">
			<span class="nav__line"></span>
			<span class="nav__line"></span>
			<span class="nav__line"></span>
		</div>
	</nav>
	<div id="overlay"></div>

</header><!--/.header-->

