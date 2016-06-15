<?php 
/* Template Name: Services Page           */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
$service_web_url = get_field('service_web_url');
get_header();
?>

<!-- FEATURE IMAGE
	================================================== -->

   <section id="hero" data-type="background" data-speed="5">
     <h2 class="section-header">Services</h2>
    </section>
    
    
    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	
                    <?php while ( have_posts() ): the_post(); ?>
                     
                     	<?php the_content(); ?>
                     
                    <?php endwhile; //end of the loop ?>
                    
                    <?php $loop = new WP_Query( array( 'post_type' => 'service', 'orderby' => 'post_id', 'order' => 'ASC' )) ?>
                    
                    
			 
			    	
			    	<div class="row js--wp-6">
                    
                    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    <?php 
						$skills_image = get_field('skills_image');
						$skills_url = get_field('skills_url');
						$add_button = get_field('add_button');
						$skills_button_text = get_field('skills_button_text');
				      ?>
                      
                    	<div class="col-sm-4">
                        
						<figure><img src="<?php echo $skills_image[url]; ?>" alt"<?php echo $skills_image[alt]; ?>"></figure>
                            
					    	<h3><a href="<?php echo $skills_url; ?>"><?php the_title(); ?></a></h3>
					    	<p><?php the_content(); ?></p>
                            
                            <?php if( !empty($skills_button_text) ) : ?>
					    	<p><a href="<?php echo $skills_url; ?>" class="btn btn-lg btn-danger"><?php echo $skills_button_text; ?></a></p>
                            <?php endif; ?>
				    	</div>
                    
                    <?php endwhile; ?>
               
			    	</div>
             
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
    
    <?php get_footer(); ?>