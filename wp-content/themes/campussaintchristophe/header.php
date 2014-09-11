<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Campus Saint Christophe
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="" class="header-intranet">Intranet du campus</a>
					<div class="header-lang">
						<?php do_action('icl_language_selector'); ?>
					</div>
					
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo">
						<img src="<?php echo get_template_directory_uri().'/img/logo.png'; ?>" />
					</a>
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="header-navigation">
						<ul>
							<li><a href="">News</a></li>
							<li><a href="">Technopôle</a></li>
							<li>
								<a href="">Services</a>
								<ul>
									<li><a href="">Restauration</a></li>
									<li><a href="">Crèche</a></li>
									<li><a href="">Sport</a></li>
									<li><a href="">Transports</a></li>
									<li><a href="">Autres services</a></li>
								</ul>
							</li>
							<li><a href="">Cadre de vie</a></li>
							<li><a href="">écologie</a></li>
							<li><a href="">localisation</a></li>
							<li><a href="">disponibilités</a></li>
							<li><a href="">galerie</a></li>
							<li><a href="">contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
