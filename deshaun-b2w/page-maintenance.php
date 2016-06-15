<?php 
/* Template Name: Maintenance Page  */

$maintenance_headline = get_field('maintenance_headline');
$maintenance_description = get_field('maintenance_description');
$maintenance_image = get_field('maintenance_image');
$maintenance_button_text = get_field('maintenance_button_text');
$maintenance_qoute_url = get_field('maintenance_qoute_url');

get_header();
?>

<!-- FEATURE IMAGE
	================================================== -->
     <section id="hero" data-type="background" data-speed="5">
     <h2 class="section-header">Web Maintenance</h2>
    </section>
    
    
    <!-- MAIN CONTENT
	================================================== -->
    
    		<div class="container">
			
 <!-- START THE FEATURETTES -->
		<br />
        <br />
      <div class="row featurette">
        <div class="col-sm-7">
          <h2 class="featurette-heading"><span><?php echo $maintenance_headline; ?></span></h2>
          <p class="lead"><?php echo $maintenance_description; ?> </p>
    <p><h3>I offer maintenance plans in which I will:</h3></p>
<ul>
<li>Download and store your website files and database backups on my computer</li>
<li>Update your website theme, plugins, and WordPress version</li>
<li>Update and/or add copy, links, photos, and videos</li>
<li>Add a site monitor to track when your site is down or is being hacked into</li>
<li>Set up a Google Webmaster account</li>
<li>Optimize your pages for search engines with keywords you want to rank for</li>
<li>Set up local and online directory listings (Yelp, Kudzu, Hotfrog, Superpages, etc.)</li>
<li>Set up any Social Media Company Page (Facebook, YouTube, Twitter, LinkedIn, etc.)</li>
</ul>
 <p><a class="btn btn-lg btn-danger" href="<?php echo $maintenance_qoute_url; ?>" role="button"><?php echo $maintenance_button_text; ?></a></p>

        </div>
        <div class="col-sm-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo $maintenance_image[url]; ?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
        
        </div><!-- container -->
    
    
    
    
    
    
    <?php get_footer(); ?>