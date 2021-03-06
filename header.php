<?php
/**
 * The header for the theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() . '/favicons/apple-touch-icon.png';?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() . '/favicons/favicon-32x32.png';?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() . '/favicons/favicon-16x16.png';?>">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri() . '/favicons/manifest.json';?>">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() . '/favicons/safari-pinned-tab.svg';?>" color="#334396">
	<meta name="apple-mobile-web-app-title" content="Silver Mill Tours">
	<meta name="application-name" content="Silver Mill Tours">
	<meta name="msapplication-TileColor" content="#2d89ef">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-lg">

			<div class="container">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class = "mobileToggle"><i class="fa fa-bars" aria-hidden="true"></i> Menu</span>
				</button>
					
				<a rel = "home" class="navbar-brand" data-itemprop="url" title="<?php echo esc_attr( get_bloginfo( 'name') ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<h3 class = "logo" alt = "<?php echo esc_attr( get_bloginfo( 'name') ); ?>"><?php echo esc_attr( get_bloginfo( 'name') ); ?></h3>
				</a>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				<div id="nav-buttons">
					<a href = "/the-weekly-bulletin/ " class = "mr-3"><button role = 'button' class = 'btn btn-primary'><i class="fa fa-thumb-tack rotate-45 mr-1" aria-hidden="true"></i> WEEKLY BULLETIN</button></a>
					<a target = "_blank" href = 'https://pompeiichurch.churchgiving.com/'><button role = 'button' class = 'btn btn-primary'><i class="fa fa-heart mr-1" aria-hidden="true"></i> GIVE</button></a>	
				</div><!-- #nav-buttons -->
			</div><!-- .container -->
		</nav><!-- .site-navigation -->
	</div><!-- .wrapper-navbar end -->

	<?php if(!is_page('home')) { ?>
		<header class="page-header container-fluid">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
	<?php } ?>