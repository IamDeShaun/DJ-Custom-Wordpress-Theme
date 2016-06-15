<?php

 // Custome Fields

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );



$discount_price = get_post_meta(9, 'discount_price', true);
$custom_web = get_post_meta(9, 'custom_web', true);
$design_url = get_post_meta(9, 'design_url', true);
$ecommerce_url = get_post_meta(9, 'ecommerce_url', true);

$hero_header_a = get_field('hero_header_a');
$hero_header_b = get_field('hero_header_b');
$hero_header_c = get_field('hero_header_c');

$hero_description_a = get_field('hero_description_a');
$hero_description_b = get_field('hero_description_b');
$hero_description_c = get_field('hero_description_c');
 ?>
 
 <!-- HERO
    ================================================== -->
     
   <section id="hero" data-type="background" data-speed="5">
     <h2 class="section-header">Web Design & Development, E-Commerce, and More!<br />
     Albany, New York & Beyond!</h2>
    </section>
    
  
    
	