<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php wp_title(''); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <a href="<?php bloginfo('url'); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/images/lowwwe-logo.svg" alt="lowwwe.net">
    </a>