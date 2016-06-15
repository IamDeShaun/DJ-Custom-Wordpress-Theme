<?php
$boss_section_title = get_field ('boss_section_title');
$boss_name = get_field ('boss_name');
$bio_excerpt = get_field ('bio_excerpt');
$full_bio = get_field ('full_bio');
$twitter_username = get_field ('twitter_username');
$facebook_username = get_field ('facebook_username');
$instagram_username = get_field ('instagram_username');
$github_username = get_field ('github_username');
$linkedin_profile = get_field('linkedin_profile');
$interest_family = get_field ('interest_family');
$interest_pizza = get_field ('interest_pizza');
$interest_tmnt = get_field ('interest_tmnt');
    
?>



<!-- Boss
	================================================== -->
	<section id="instructor">
		<div class="container">
			<div class="row js--wp-5">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $boss_section_title ?> <small><?php echo $boss_name ?></small></h2>
						</div><!-- end col -->
                        
						<div class="col-md-4">
							<a href="<?php echo $linkedin_profile; ?>" class="badge social linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                          
                          
                           <?php if( !empty($github_username) ): ?>
							<a href="http://github.com/<?php echo $github_username; ?>" class="badge social github" target="_blank"><i class="fa fa-github-alt"></i></a>
                          <?php endif; ?>
                           
                          
						</div><!-- end col -->
					
					</div><!-- row -->
					
					<p class="lead"><?php echo $bio_excerpt ?></p>
				
					<p><?php echo $full_bio ?></p>
                    <div class="meter red">
	<span style="width: 80%"></span>
</div>
				    <div class="row">
                    <div class="col-lg-8">
                    <h2>My Skills</h2>
                    </div>
                    </div>
                    <div class="row">
						<div class="col-md-6">
                        <strong>HTM5</strong> 
                        <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                        
                        </div>
                      </div> 
                      
                      <strong>Javascript</strong> 
                      <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="90" style="width:90%">
                         
                        </div>
                        
                      </div> 
                      
                       <strong>Wordpress Theme Dev.</strong> 
                      <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width:80%">
                         
                        </div>
                        
                      </div> 
                      
                      </div>
                      <div class="col-md-6">
                        <strong>CSS3</strong> 
                        <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                        
                        </div>
                      </div> 
                      
                      <strong>PHP</strong> 
                      <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75" style="width:75%">
                        
                        </div>
                        
                      </div> 
                      
                       <strong>Photoshop</strong> 
                      <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90" style="width:90%">
                       
                        </div>
                        
                      </div> 
                      
                      </div>
                     </div>
					
                    	<hr>
					<h3>My Interest<small> outside the web</small></h3>
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $interest_family; ?><span></span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $interest_pizza; ?> <span></span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
								<?php echo $interest_tmnt; ?><span></span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor -->