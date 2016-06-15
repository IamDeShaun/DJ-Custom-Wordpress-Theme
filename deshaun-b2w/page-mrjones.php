<?php 
/* Template Name: Portfolio MrJones Page  */

$port_mrjones_headline = get_field('port_mrjones_headline');
$port_mrjones_description = get_field('port_mrjones_description');
$port_mrjones_image = get_field('port_mrjones_image');
$port_mrjones_image_b = get_field('port_mrjones_image_b');
$port_mrjones_button_text = get_field('port_mrjones_button_text');
$port_mrjones_quote_url = get_field('port_mrjones_quote_url');

get_header();
?>

<?php if ( has_post_thumbnail() ) { ?>
    
    <section class="feature-image feature-image-default" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    	
    </section>
    
    <?php } else { // Fallback Image ?>
    
     <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    	
    </section>
    
  <?php } ?>
  
  <br />
  <br />
  <div class="container">
			
 <!-- START THE FEATURETTES -->

      <div class="row featurette js--wp-6">
        <div class="col-sm-7">
          <h2 class="featurette-heading"><?php echo $port_mrjones_headline; ?></h2>
          <p class="lead"><?php echo $port_mrjones_description; ?>
           <p><a class="btn btn-lg btn-danger" href="<?php echo $port_mrjones_quote_url; ?>" role="button"><?php echo $port_mrjones_button_text; ?></a></p>
        </div>
        <div class="col-sm-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo $port_mrjones_image[url]; ?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5 col-md-push-7">
          <h2 class="featurette-heading">What I Used</h2>
          <ul class="list-unstyled lead">
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Create Wireframes/Mockup</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> WordPress Development </strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Responsive Mobile Development</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> PHP</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> HTML 5</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> CSS3</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Jquery</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Javascript</strong></li>
</ul>
        </div>
        <div class="col-md-7 col-md-pull-5">
         <img class="featurette-image img-responsive center-block" src="<?php echo $port_mrjones_image_b[url]; ?>" alt="Generic placeholder image">
        </div>
      </div>
		<br />
       <br />
      <!-- /END THE FEATURETTES -->
        
        </div><!-- container -->
  
  
  
  
  
  
  
  
  
  <?php get_footer(); ?>