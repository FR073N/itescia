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
				<div class="col-lg-4 col-md-3 col-sm-3 col-xs-2">
					<a href="#" class="header-mobile-button visible-xs visible-sm pull-left">
						Menu
						<span class="icon-menu"></span>
					</a>
					
					<a href="" class="header-intranet hidden-xs pull-left">Intranet <span class="hidden-sm hidden-xs">du campus</span></a>
					<div class="header-lang hidden-xs pull-left">
						<?php language_selector(); ?>
					</div>
					
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-8">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo img-responsive">
						<img src="<?php echo get_template_directory_uri().'/img/logo.png'; ?>" />
					</a>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-3 col-xs-2">
					<div class="header-weather pull-right hidden-xs">
						<img src="<?php echo get_template_directory_uri().'/img/weather.png'; ?>" />
					</div>

					<div class="header-lang visible-xs pull-right">
						<?php language_selector(); ?>
					</div>
					<div class="header-social pull-right">
						<ul>
							<?php if(get_field('facebook','option')): ?>
								<li class="hidden-xs">
									<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="social-facebook"></a>
								</li>
							<?php endif; ?>
							<?php if(get_field('email','option')): ?>
								<li class="visible-xs">
									<a href="mailto:<?php the_field('email', 'option'); ?>" target="_blank" class="social-mail"></a>
								</li>
							<?php endif; ?>
						</ul>
						
					</div>
				</div>
			</div>
			<div class="navigation-wrapper">
				<div class="header-navigation">
						<div class="mobile-navigation-header">
							<a href="" class="mobile-navigation-close">Fermer</a>
							<span class="mobile-navigation-title">Navigation</span>
							<div class="clearfix"></div>
						</div>
						<ul>
							<li><a href="">News<span class="nav-icon">></span></a></li>
							<li>
								<a href="">Technopôle
									<span class="nav-icon nav-icon-plus">+</span>
									<span class="nav-icon nav-icon-less">-</span>
								</a>
							</li>
							<li>
								<a href="">
									Services
									<span class="nav-icon nav-icon-plus">+</span>
									<span class="nav-icon nav-icon-less">-</span>
								</a>
								<ul>
									<li><a href="">Restauration</a></li>
									<li><a href="">Crèche</a></li>
									<li><a href="">Sport</a></li>
									<li><a href="">Transports</a></li>
									<li><a href="">Autres services</a></li>
								</ul>
							</li>
							<li>
								<a href="">Cadre de vie
									<span class="nav-icon nav-icon-plus">+</span>
									<span class="nav-icon nav-icon-less">-</span>
								</a>
							</li>
							<li><a href="">écologie<span class="nav-icon nav-icon-plus">+</span></a></li>
							<li><a href="">localisation<span class="nav-icon">></span></a></li>
							<li><a href="">disponibilités<span class="nav-icon">></span></a></li>
							<li><a href="">galerie<span class="nav-icon nav-icon-plus">+</span></a></li>
							<li><a href="">contact<span class="nav-icon">></span></a></li>
						</ul>
						<div class="mobile-navigation-footer">
							<span>Copyright 2014 - All rights reserved</span>
						</div>
					</div>
				</div>
			</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
