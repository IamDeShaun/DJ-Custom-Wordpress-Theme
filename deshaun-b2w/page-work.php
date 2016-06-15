<?php 
/* Template Name: Work Page  */

$work_intro_text = get_field('work_intro_text');



get_header();
?>

<!-- FEATURE IMAGE
	================================================== -->
 <section id="hero" data-type="background" data-speed="5">
     <h2 class="section-header">Work</h2>
    </section>
    
  
  
   <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row js--wp-4" id="primary">
		    <div id="content" class="col-sm-12">
			    <section class="main-content">
			    	 <?php while ( have_posts() ): the_post(); ?>
                     
                     	<?php the_content(); ?>
                     
                    <?php endwhile; //end of the loop ?>
                    
                     <?php $loop = new WP_Query( array( 'post_type' => 'work', 			                      'orderby' => 'post_id', 'order' => 'ASC' )) ?>
			    	
			    	<div class="row">
                    
                    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    <?php 
						$work_image = get_field('work_image');
						$work_url = get_field('work_url');
						$work_button = get_field('work_add_button');
						$work_button_text = get_field('work_button_text');
				      ?>
                      
                      <div class="col-sm-6">
					    	<img src="<?php echo $work_image[url]; ?>" alt"<?php echo  $work_image[alt]; ?>" width="450px" height="450px">
					    	<h3><a href="<?php echo $work_url; ?>"><?php the_title(); ?></a></h3>
					    	<p><?php the_content(); ?></p>
                            
                            <?php if( !empty($work_button_text) ) : ?>
					    	<p><a href="<?php echo $work_url; ?>" class="btn btn-lg btn-danger"><?php echo $work_button_text; ?></a></p>
                            <?php endif; ?>
				    	</div>
                     <?php endwhile; ?>
			    	</div>
			    </section>
		    </div><!-- content -->	    
	    </div><!-- primary -->
    </div><!-- container -->

<?php get_footer(); ?>
