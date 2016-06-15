<?php
/**
 	Template Name: Home Page
 */

get_header(); ?>

    <?php get_template_part('content','hero'); ?>
     
     <?php get_template_part('content','optin'); ?>

    <?php get_template_part('content','welcome'); ?>

     <?php get_template_part('content','service'); ?>
     
     <?php get_template_part('content','guarantee'); ?>
     
     <?php get_template_part('content','boss'); ?>
     
     <?php get_template_part('content','video'); ?>
     
     <?php get_template_part('content','testimonial'); ?>

<?php get_footer(); ?>
