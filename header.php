<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js legacy-ie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php
			wp_title( '|', true, 'right' );
			bloginfo( 'name' ); ?>
		</title>

		<!-- this action runs the hook that creates all the meta, be sure to
		 look it over before you deploy and make sure these are desired --><?php
		echo v_site_meta(); ?>

		<!-- code functions --><?php
		wp_head(); ?>
		<!-- /code functions -->
	</head>
	<body <?php body_class(); ?>><?php
		do_action( 'v_pre_site_wrapper' ); ?>
		<div class="hfeed site-wrapper">
			<header class="site-header" role="banner">
				<div class="site-header-wrap clearfix">
					<h1 class="site-title">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php
							bloginfo( 'name' ); ?>
						</a>
					</h1>
					<h2 class="site-description"><?php
						bloginfo( 'description' ); ?>
					</h2>
					<nav role="navigation"><?php
						do_action( 'v_site_navigation' ); ?>
					</nav>
				</div>
			</header>

			<div class="site-main" role="main">
