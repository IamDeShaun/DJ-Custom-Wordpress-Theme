<?php
/* Template Name: Contact Template */


	$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
	get_header();
?>

 <!-- FEATURE IMAGE
    ================================================== -->
    
 <section id="hero" data-type="background" data-speed="5">
     <h2 class="section-header">Contact</h2>
    </section>
    
<div class="container">
	    <div class="row js--wp-5" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	 <?php while ( have_posts() ): the_post(); ?>
                     
                     	<?php the_content(); ?>
                     
                    <?php endwhile; //end of the loop ?>
			    </section>
		    	
		    </div><!-- content -->
	    </div><!-- primary -->
    </div><!-- container -->

<?php get_footer(); ?>