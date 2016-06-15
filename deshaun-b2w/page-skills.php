<?php 
/* Template Name: Skills Page           */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
get_header();
?>

<!-- FEATURE IMAGE
	================================================== -->
      <?php if ( has_post_thumbnail() ) { ?>
    
    <section class="feature-image feature-image-default" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    	<h1>Services</h1>
    </section>
    
    <?php } else { // Fallback Image ?>
    
     <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    	<h1>Services</h1>
    </section>
    
    <?php } ?>
    
    
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
                    
                    
			   <hr>
			    	
			    	<div class="row js--wp-6">
                    
                    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    <?php 
						$skills_image = get_field('skills_image');
						$skills_url = get_field('skills_url');
						$add_button = get_field('add_button');
						$skills_button_text = get_field('skills_button_text');
				      ?>
                      
                    	<div class="col-sm-4">
                        
						<img src="<?php echo $skills_image[url]; ?>" alt"<?php echo $skills_image[alt]; ?>">
                            
					    	<h3><a href="<?php echo $skills_url; ?>"><?php the_title(); ?></a></h3>
					    	<p><?php the_content(); ?>
                            
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