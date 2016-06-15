<?php 
/* Template Name: Web Page           */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

$web_header_a = get_field('web_header_a');
$web_description_a = get_field('web_description_a');
$web_image_a = get_field('web_image_a');

$web_header_b = get_field('web_header_b');
$web_sub_header_b = get_field('web_sub_header_b');
$web_description_b = get_field('web_description_b');
$web_image_b = get_field('web_image_b');

$web_header_c = get_field('web_header_c');
$web_description_c = get_field('web_description_c');
$web_image_c = get_field('web_image_c');

$web_button_text = get_field('web_button_text');
$web_quote_url = get_field('web_quote_url');



get_header();
?>

<!-- FEATURE IMAGE
	================================================== -->
      <section id="hero" data-type="background" data-speed="5">
     <h2 class="section-header">Web Design & Development</h2>
    </section>
    
  
    
    
    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
		    <div id="content" class="col-sm-12">  
      <div class="row featurette js--wp-6">
        <div class="col-sm-7">
          <h2 class="featurette-heading"><?php echo $web_header_a; ?></h2>
          <p class="lead"><?php echo $web_description_a; ?></p>
          <p><a class="btn btn-lg btn-danger" href="<?php echo $web_quote_url; ?>" role="button"><?php echo $web_button_text ?></a></p>
        </div>
        <div class="col-sm-5">
          <img src="<?php echo $web_image_a ['url'] ?> " alt="<?php echo $web_image_a ['alt']   ?>">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette js--wp-4">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><?php echo $web_header_b; ?></h2>
          <h3><?php echo $web_sub_header_b; ?></h3>
          <?php echo $web_description_b; ?>
        </div>
        <div class="col-md-5 col-md-pull-7">
         <img src="<?php echo $web_image_b ['url'] ?> " alt="<?php echo $web_image_b ['alt']   ?>">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette js--wp-2">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $web_header_c; ?></span></h2>
         <?php echo $web_description_c; ?>
        </div>
        <div class="col-md-5">
          <img src="<?php echo $web_image_c ['url'] ?> " alt="<?php echo $web_image_c ['alt']   ?>">
        </div>
      </div>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
    
    <?php get_footer(); ?>