<?php
$guarantee_feature_image = get_field ('guarantee_feature_image');
$guarantee_feature_title = get_field ('guarantee_feature_title');
$guarantee_design_image = get_field ('guarantee_design_image');
$guarantee_design_title = get_field ('guarantee_design_title');
$guarantee_design_description= get_field ('guarantee_design_description');
$guarantee_html5_image = get_field ('guarantee_html5_image');
$guarantee_html_title = get_field ('guarantee_html_title');
$guarantee_html5_description = get_field ('guarantee_html5_description');
$guarantee_cms_image = get_field ('guarantee_cms_image');
$guarantee_cms_title = get_field ('guarantee_cms_title');
$guarantee_cms_description = get_field ('guarantee_cms_description');

?>


<!-- My Guarantee
	================================================== -->
	<section id="course-features">
		<div class="container">
		
			<div class="section-header">
				
              <?php if( !empty ($guarantee_feature_image) ) : ?>
            	<img src="<?php echo $guarantee_feature_image ['url'] ?> " alt="<?php echo $guarantee_feature_image ['alt']   ?>">
                
            	<?php endif; ?>
              
				<h2><?php echo $guarantee_feature_title; ?></h2>
			</div><!-- section-header -->
			
			<div class="row js--wp-2">
				<div class="col-sm-4">
                
				<?php if( !empty ($guarantee_design_image) ) : ?>
            	<img src="<?php echo $guarantee_design_image ['url'] ?> " alt="<?php echo $guarantee_design_image ['alt']   ?>">
                
            	<?php endif; ?>
                    
                    
                    
					<h3><?php echo $guarantee_design_title; ?></h3>
					<p><?php echo $guarantee_design_description; ?></p>
				</div><!-- col -->
				<div class="col-sm-4">
                
					<?php if( !empty ($guarantee_html5_image) ) : ?>
            	<img src="<?php echo $guarantee_html5_image ['url'] ?> " alt="<?php echo $guarantee_html5_image ['alt']   ?>">
                
            	<?php endif; ?>
                    
					<h3><?php echo $guarantee_html_title; ?></h3>
					<p><?php echo $guarantee_html5_description; ?></p>
				</div><!-- col -->
				<div class="col-sm-4">
                
					<!-- If user uploaded an image -->
            <?php if( !empty ($guarantee_cms_image) ) : ?>
            	<img src="<?php echo $guarantee_cms_image ['url'] ?> " alt="<?php echo $guarantee_cms_image ['alt']   ?>">
                
            <?php endif; ?>
                    
                    
					<h3><?php echo $guarantee_cms_title ?></h3>
					<p><?php echo $guarantee_cms_description ?></p>
				</div><!-- col -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- My Guarantee -->