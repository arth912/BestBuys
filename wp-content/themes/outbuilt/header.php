<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('partials/loader'); ?>

    <div id="page" class="site">

        <?php get_template_part('partials/menu/mobile', 'menu'); ?>

        <div class="wide-container">

            <?php do_action('outbuilt_header'); ?>

            <div id="content" class="site-content">
