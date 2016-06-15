<?php 
/* Template Name: Custom CMS Page           */

$custom_cms_headline = get_field('custom_cms_headline');
$custom_cms_description = get_field('custom_cms_description');
$custom_cms_image = get_field('custom_cms_image');
$custom_cms_button_text = get_field('custom_cms_button_text');
$custom_cms_qoute_url = get_field('custom_cms_qoute_url');


get_header();
?>

<!-- FEATURE IMAGE
	================================================== -->
    
  <section id="hero" data-type="background" data-speed="5">
     <h2 class="section-header">Custom CMS</h2>
    </section>
    
    <br />
    <br />
    <div class="container">
			
 <!-- START THE FEATURETTES -->
      <div class="row featurette js--wp-5">
        <div class="col-sm-7">
          <h2 class="featurette-heading"><span><?php echo $custom_cms_headline; ?></span></h2>
          <p class="lead"><?php echo $custom_cms_description; ?></p>
 <p><a class="btn btn-lg btn-danger" href="<?php echo $custom_cms_qoute_url; ?>" role="button"><?php echo $custom_cms_button_text; ?></a></p>

        </div>
        <div class="col-sm-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo $custom_cms_image[url]; ?>" alt="Generic placeholder image">
        </div>
      </div>

      <br />
      <br />
        
        </div><!-- container -->
    
    
<?php get_footer(); ?>








