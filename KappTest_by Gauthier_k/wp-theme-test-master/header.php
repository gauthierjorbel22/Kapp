<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<h1><?php esc_html_e( 'KAPP', 'kapp-test-theme' ); ?></h1>
	<?php echo Theme_Utils::instance()->greeting(); ?>
	<p>
	<?php
	echo esc_html_e( 'Hey Gauthier' );
	do_action( 'user-greeting' );
	?>
	</p>
</header>
