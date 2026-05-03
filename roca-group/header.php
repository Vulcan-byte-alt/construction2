<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" aria-label="Site header">
	<div class="header-inner">

		<!-- Logo -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="Roca Group — Home">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/roca-logo.png' ); ?>"
				alt="Roca Group"
				height="48"
				width="auto"
			>
		</a>

		<!-- Pure-CSS hamburger toggle -->
		<input type="checkbox" id="nav-toggle" class="nav-toggle-input" aria-hidden="true">
		<label for="nav-toggle" class="nav-toggle-label" aria-label="Toggle navigation">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</label>

		<!-- Primary navigation — hardcoded links -->
		<nav class="primary-nav" id="primary-nav" aria-label="Primary navigation">
			<ul class="nav-list">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li><a href="<?php echo esc_url( home_url( '/our-approach' ) ); ?>">Our Approach</a></li>
				<li><a href="<?php echo esc_url( home_url( '/our-sectors' ) ); ?>">Our Sectors</a></li>
				<li><a href="<?php echo esc_url( home_url( '/our-projects' ) ); ?>">Our Projects</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact Us</a></li>
			</ul>
		</nav>

	</div>
</header>
