<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deshaun_b2w
 */

?>



<?php wp_footer(); ?>

<!-- SIGN UP SECTION
	================================================== -->
	<section id="signup" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>Are you ready to take your business to next level?</h2>
					<p><a href="http://deshaunjones.com/contact" class="btn btn-lg btn-danger">Hire Me</a></p>
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- signup -->


	<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<p><a href="/"><img src="http://deshaunjones.com/wp-content/uploads/2016/01/DeShaunJones-e1453211638262.png" alt="DeShaun Jones"></a></p>
			</div><!-- end col -->
			<div class="col-sm-6">
				<?php
						wp_nav_menu( array(
							
							'theme_location'	=> 'footer',
							'container'			=> 'nav',
							'menu_class'		=> 'list-unstyled list-inline'
							
						) );
					?>
			</div><!-- end col -->
			<div class="col-sm-3">
				<p class="pull-right"> &copy; <?php echo date('Y'); ?> DeShaun Jones</p>
			</div><!-- end col -->
		</div><!-- container -->
	</footer>


	<!-- MODAL
	================================================== -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Let's Get Started!</h4>
				</div><!-- modal-header -->
				
				<div class="modal-body">
					<p>Send us your info and we will contact you shortly<em>!</em></p>
					
					<form action="http://deshaunjones.us12.list-manage.com/subscribe/post" method="POST">
						<input type="hidden" name="u" value="86e3ede1639906799ee636eda">
						<input type="hidden" name="id" value="5c6550bde8">

						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>
							<input type="text" class="form-control" name="MERGE1" id="MERGE1" size="10" placeholder="Your first name">
						</div>
						<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your email</label>
							<input type="text" class="form-control" name="MERGE0" id="MERGE0" size="10" placeholder="and your email">
						</div>
						<input type="submit" class="btn btn-danger" name="submit" value="Send!">
					</form>
					
					<hr>
					
					<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
				</div><!-- modal-body -->
				
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->



 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
    
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>

    
     <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.waypoints.min.js"></script>
    
    <script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  

</body>
</html>
