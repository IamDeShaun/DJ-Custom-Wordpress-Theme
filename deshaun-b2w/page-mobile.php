<?php 
/* Template Name: Mobile Page           */

$mobile_responsive_headline = get_field('mobile_responsive_headline');
$mobile_responsive_description = get_field('mobile_responsive_description');
$mobile_responsive_image = get_field('mobile_responsive_image');
$mobile_responsive_sub_header = get_field('mobile_responsive_sub_header');
$mobile_responsive_image = get_field('mobile_responsive_image');
$mobile_responsive_sub_description = get_field('mobile_responsive_sub_description');
$mobile_responsive_button_text = get_field('mobile_responsive_button_text');
$mobile_responsive_quote_url = get_field('mobile_responsive_quote_url');


get_header();
?>

<!-- FEATURE IMAGE
	================================================== -->
    <section id="hero" data-type="background" data-speed="5">
     <h2 class="section-header">Mobile Development</h2>
    </section>
    
   
    
    <br />
    <br />
    <div class="container">
			
 <!-- START THE FEATURETTES -->
      <div class="row featurette js--wp-5">
        <div class="col-sm-7">
          <h2 class="featurette-heading"><span><?php echo $mobile_responsive_headline; ?></span></h2>
          <p class="lead"><?php echo $mobile_responsive_description; ?></p>

<h3><?php echo $mobile_responsive_sub_header; ?></h3>
	<p class="lead"><?php echo $mobile_responsive_sub_description; ?></p>
 <p><a class="btn btn-lg btn-danger" href="<?php echo $mobile_responsive_quote_url; ?>" role="button"><?php echo $mobile_responsive_button_text; ?></a></p>

        </div>
        <div class="col-sm-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo $mobile_responsive_image[url]; ?>" alt="Generic placeholder image">
        </div>
      </div>
        <br />
        <br />
        
        </div><!-- container -->
    
    
    
    
    
    
<?php get_footer(); ?>