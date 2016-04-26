<?php
/**
 * Created by PhpStorm.
 * User: ambitos
 * Date: 26/4/2016
 * Time: 11:35 μμ
 */
?><!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>Law Firm</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" type="text/css">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="header">
    <div class="clearfix">
        <div class="logo">
            <a href="index.html"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="LOGO" height="52" width="362"></a>
        </div>
        <ul class="navigation">
            <li class="active">
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <a href="practices.html">Practices</a>
            </li>
            <li>
                <a href="lawyers.html">Our Lawyers</a>
            </li>
            <li>
                <a href="news.html">News</a>
                <div>
                    <a href="singlepost.html">News Single Post</a>
                </div>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
    </div>
</div>
<div id="contents">