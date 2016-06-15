<?php 
/* Template Name: SEO Page           */

$seo_headline = get_field('seo_headline');
$seo_service_description = get_field('seo_service_description');
$seo_button_text = get_field('seo_button_text');
$seo_service_image = get_field('seo_service_image');
$seo_quote_url = get_field('seo_quote_url');

get_header(); ?>

<!-- FEATURE IMAGE
	================================================== -->
     <section id="hero" data-type="background" data-speed="5">
     <h2 class="section-header">SEO</h2>
    </section>
    
    <br />
    <br />
    <div class="container">
    <!-- START THE FEATURETTES -->
      <div class="row featurette js--wp-5">
        <div class="col-sm-7">
          <h2 class="featurette-heading"><span><?php echo $seo_headline; ?></span></h2>
          <p class="lead"><?php echo $seo_service_description; ?></p>
 <p><a class="btn btn-lg btn-danger" href="<?php echo $seo_quote_url; ?>" role="button"><?php echo $seo_button_text; ?></a></p>
        </div>
        <div class="col-sm-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo $seo_service_image[url]; ?>" alt="Generic placeholder image">
        </div>
      </div>
    </div>
    
    <br />'
    <br />
    
<?php get_footer(); ?>