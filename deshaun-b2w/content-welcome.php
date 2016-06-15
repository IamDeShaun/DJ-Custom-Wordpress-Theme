<?php 

//Advanced Custome Fields
$welcome_feature_image = get_field('welcome_feature_image');
$welcome_feature_title = get_field('welcome_feature_title');
$welcome_feature_description = get_field('welcome_feature_description');

?>


<!-- Welcome Message
	================================================== -->
	<section id="boost-income">
		<div class="container">
			
			<div class="section-header">
            
            <!-- If user uploaded an image -->
            <?php if( !empty ($welcome_feature_image) ) : ?>
            	<img src="<?php echo $welcome_feature_image ['url'] ?> " alt="<?php echo $welcome_feature_image ['alt']   ?>">
                
            <?php endif; ?>
 
				<h2><?php echo $welcome_feature_title; ?></h2>
			</div><!-- section-header -->
			
         <p style="text-align: center; font-size: 18px;"><?php echo $welcome_feature_description; ?> </p>
			
		
		</div><!-- container -->
	</section><!-- Welcome Message -->