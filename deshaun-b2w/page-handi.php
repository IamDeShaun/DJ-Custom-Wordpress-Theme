<?php 
/* Template Name: Portfolio H & I Page  */

$port_handi_headline = get_field('port_handi_headline');
$port_handi_description	= get_field('port_handi_description');
$port_handi_image_a = get_field('port_handi_image_a');
$port_handi_button_text = get_field('port_handi_button_text');
$port_handi_image_b = get_field('port_handi_image_b');
$port_handi_quote_url = get_field('port_handi_quote_url');

get_header();
?>

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

      <div class="row featurette js--wp-5">
        <div class="col-sm-7">
          <h2 class="featurette-heading"><?php echo $port_handi_headline; ?></span></h2>
          <p class="lead"><?php echo $port_handi_description; ?></p> 
          
           <p><a class="btn btn-lg btn-danger" href="<?php echo $port_handi_quote_url; ?>" target="_blank" role="button"><?php echo $port_handi_button_text; ?></a></p>
        </div>
        <div class="col-sm-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo $port_handi_image_a[url]; ?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette js--wp-2">
        <div class="col-md-5 col-md-push-7">
          <h2 class="featurette-heading">What I Used</h2>
          <ul class="list-unstyled lead">
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> WordPress Development </strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> UI/UX Development</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> HTML 5</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> CSS3</strong></li>
</ul>
        </div>
        <div class="col-md-7 col-md-pull-5">
         <img class="featurette-image img-responsive center-block" src="<?php echo $port_handi_image_b[url]; ?>" alt="Generic placeholder image">
        </div>
      </div>
      <br />
      <br />

      <!-- /END THE FEATURETTES -->
        
        </div><!-- container -->






<?php get_footer();   ?>
