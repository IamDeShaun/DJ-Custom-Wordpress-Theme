<?php 
/* Template Name: eCommerce Page           */


$ecommerce_headline = get_field('ecommerce_headline');
$ecommerce_description = get_field('ecommerce_description');
$ecommerce_pic = get_field('ecommerce_pic');
$ecommerce_button_text = get_field('ecommerce_button_text');
$ecommerce_quote_url = get_field('ecommerce_quote_url');

get_header();


?>

<!-- FEATURE IMAGE
	================================================== -->
      <section id="hero" data-type="background" data-speed="5">
     <h2 class="section-header">E-Commerce</h2>
    </section>
    
  
<br />
<br />
		<div class="container">	
 <!-- START THE FEATURETTES -->

      <div class="row featurette js--wp-5">
        <div class="col-sm-7">
          <h2 class="featurette-heading"><span><?php echo $ecommerce_headline; ?></span></h2>
          <p class="lead"><?php echo $ecommerce_description; ?></p>
          <p><a class="btn btn-lg btn-danger" href="<?php echo $ecommerce_quote_url ?>" role="button"><?php echo $ecommerce_button_text; ?></a></p>

        </div>
        <div class="col-sm-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo $ecommerce_pic[url]; ?>">
        </div>
      </div>

      <hr class="featurette-divider">
      
<div class="row">          
<div class="col-sm-6">
<div class="white-box box-1-serv">
<h3 class="purple-text">Quality Information</h3>
<p class="lead">Potential customers will come to you site and make their purchasing decisions mainly on the information you provide them. With clear item descriptions, any specifications clearly listed, and high quality pictures, an <strong>E-Commerce</strong> site will likely see great success.
</p>
<ul class="list-unstyled text-center lead">
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Well-written text</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Relevant content &amp; images</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Promote traffic conversion</strong></li>
</ul>
</div>
</div>

<div class="col-sm-6">
	<div class="white-box box-2-serv">
<h3 class="purple-text">Easy Navigation</h3>
<p class="lead">Clearly displayed and easy to find information is a great way to ensure customers will buy your products over another e-commerce store. Often times we see online stores that look disorganized. If you want a buyer to have confidence in your e-commerce store, a great place to start is having a well-organized and aesthetically pleasing layout.
</p>
<ul class="list-unstyled text-center lead">
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> User-friendly</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Concise &amp; Logical</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Promote click through</strong></li>
</ul>
</div>
</div>

</div> <!-- /End Of Row -->

<div class="row">
	<div class="col-sm-6">
<div class="white-box box-3-serv">
<h3 class="purple-text">Convenient Checkout</h3>
<p class="lead">You want your <strong>E-Commerce</strong> site to make it as easy as possible for your customers to make purchases. By offering multiple payment options such as credit cards, sending checks, or PayPal, you are more likely to reach a wider range of customers.
</p>

<ul class="list-unstyled text-center lead">
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Provide options</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Reach a wider audience</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Promote conversion</strong></li>
</ul>
</div>
</div> <!-- /End Of The Col -->

<div class="col-sm-6">
<div class="white-box box-4-serv">
<h3 class="purple-text">Inspire Confidence &amp; Reliability</h3>
<p class="lead">Customers shopping online want to know first and foremost that their information is safe. This can easily be established by using an <a href="http://en.wikipedia.org/wiki/Transport_Layer_Security" target="_blank" title="What is this?">SSL Certificate</a> to ensure your customers privacy and safety. Customers also feel safer knowing that you have a return policy in place, money-back guarantee, and provide open communication such as telephone or email support.
</p>

<ul class="list-unstyled text-center lead">
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Maintain privacy</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Excellent customer service</strong></li>
<li><strong><span class="purple-text"><i class="fa fa-check"></i></span> Promote trust &amp; safety</strong></li>
</ul>
</div>
</div> <!--End OF The Col -->

</div> <!-- /End Of The Row -->
      <!-- /END THE FEATURETTES -->
        
        </div><!-- container -->
<?php get_footer(); ?>