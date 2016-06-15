<?php 
/* Template Name: Portfolio Enveonline Page  */

$port_enve_headline = get_field('port_enve_headline');
$port_enve_description = get_field('port_enve_description');
$port_enve_button_text = get_field('port_enve_button_text');
$port_enve_image = get_field('port_enve_image');
$port_enve_image_b = get_field('port_enve_image_b');

get_header();

?>

<!-- FEATURE IMAGE
	================================================== -->
 <?php if ( has_post_thumbnail() ) { ?>
    
    <section class="feature-image feature-image-default" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    	<h1>Portfolio</h1>
    </section>
    
    <?php } else { // Fallback Image ?>
    
     <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    	<h1>Portfolio</h1>
    </section>
    
  <?php } ?>
  
  <br />
  <br />
  	<div class="container">
			
 <!-- START THE FEATURETTES -->

      <div class="row featurette js--wp-2">
        <div class="col-sm-7">
          <h2 class="featurette-heading"><?php echo $port_enve_headline; ?></h2>
          <p class="lead"><?php echo $port_enve_description; ?> </p>
          
           <p><a class="btn btn-lg btn-danger" href="/" role="button"><?php echo $port_enve_button_text; ?></a></p>
        </div>
        <div class="col-sm-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo $port_enve_image[url]; ?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">What I Used</h2>
          <ul class="list-unstyled lead">
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> WordPress Development </strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> HTML 5</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> CSS3</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Photoshop CC</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Adobe Premiere CC</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Google Web Master</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Google Analytics</strong></li>
</ul>
        </div>
        <div class="col-md-5 col-md-pull-7">
         <img class="featurette-image img-responsive center-block" src="<?php echo $port_enve_image_b[url]; ?>" alt="Generic placeholder image">
        </div>
      </div>

      <!-- /END THE FEATURETTES -->
        
        </div><!-- container -->





<?php get_footer(); ?>