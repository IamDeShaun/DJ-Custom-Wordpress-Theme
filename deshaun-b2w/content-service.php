<?php
$design_url = get_field('design_url');
$ecommerce_url = get_field('ecommerce_url');
$responsive_url = get_field('responsive_url');
$cms_url = get_field('cms_url');
$seo_url = get_field('seo_url');


$service_feature_image = get_field('service_feature_image');
$service_feature_title = get_field('service_feature_title');
$service_design_title = get_field('service_design_title');
$service_ecommerce_title = get_field('service_ecommerce_title');
$service_responsive_title = get_field('service_responsive_title');
$service_cms_title = get_field('service_cms_title');
$service_seo_title = get_field('service_seo_title');
$service_design_description = get_field('service_design_description');
$service_ecommerce_description = get_field('service_ecommerce_description');
$service_responsive_description = get_field('service_responsive_description');
$service_cms_description = get_field('service_cms_description');
$service_seo_description = get_field('service_seo_description');

?>



<!-- Services
	================================================== -->
	<section id="who-benefits">
		<div class="container">
			
			<div class="section-header">
				<?php if( !empty ($service_feature_image) ) : ?>
            	<img src="<?php echo $service_feature_image ['url'] ?> " alt="<?php echo $service_feature_image ['alt']   ?>">
                
            <?php endif; ?>
                
                
				<h2><?php echo $service_feature_title; ?></h2>
			</div><!-- section-header -->
			
            <div class="row js--wp-4">
				<div class="col-md-4">
					<i class="fa fa-5x fa-desktop"></i>
					<h3><a href="<?php echo $design_url; ?>"><?php echo $service_design_title; ?></a></h3>
		<p><?php echo $service_design_description; ?></p> 
				</div><!-- col -->
                
				<div class="col-md-4">
					<i class="fa fa-5x fa-shopping-cart"></i>
					<h3><a href="<?php echo $ecommerce_url; ?>"><?php echo $service_ecommerce_title; ?></a></h3>
					<p><?php echo $service_ecommerce_description; ?></p>
                    
				</div><!-- col -->
				<div class="col-md-4">
					<i class="fa fa-5x fa-mobile"></i>
					<h3><a href="<?php echo $responsive_url; ?>"><?php echo $service_responsive_title; ?></a></h3>
						<p><?php echo $service_responsive_description; ?></p>
                    
				</div><!-- col -->
                </div>
              
                <div class="row js--wp-4">
				<div class="col-md-4">
					<i class="fa fa-5x fa-wordpress"></i>

					<h3><a href="<?php echo $cms_url; ?>"><?php echo $service_cms_title; ?></a></h3>
				<p><?php echo $service_cms_description; ?></p>
                    
				</div><!-- col -->
				<div class="col-md-4">
					<i class="fa fa-5x fa-search"></i>
					<h3><a href="<?php echo $seo_url; ?>"><?php echo $service_seo_title; ?></a></h3>
						<p><?php echo $service_seo_description ?></p>
                   
				</div>
                <div class="col-md-4">
					<i class="fa fa-5x fa-wrench"></i>
					<h3><a href="http://deshaunjones.com/site-maintenance">Maintenance</a></h3>
						<p> I can maintain your website while you focus on what you do best – your busines</p>
				</div><!-- col -->
                <!-- col -->
		</div><!-- row -->
        
        </div><!-- container -->
	</section><!-- Services -->