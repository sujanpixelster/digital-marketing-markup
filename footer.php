<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package MarketErector
*/

?>
<?php	global $redux_demo; ?>
<section class="main-footer">
	<div class="digital-marketing-wrapper">
		<div class="container-fluid main-footer-bg">
			<div class="main-footer-twoside-less">
				<div class="row">
					<div class="col-md-3">
						<div class="footer-logo">
							<a href=""><img src="assets/images/1.png" alt=""></a>
						</div>
						<div class="footer-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, dolores.</p>
						</div>

					</div>
					<div class="col-md-3">
						<div class="footer-logo">
							<a href=""><img src="assets/images/1.png" alt=""></a>
						</div>
						<div class="footer-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, dolores.</p>
						</div>

					</div>
					<div class="col-md-3">
						<div class="footer-logo">
							<a href=""><img src="assets/images/1.png" alt=""></a>
						</div>
						<div class="footer-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, dolores.</p>
						</div>

					</div>
					<div class="col-md-3">
						<div class="footer-logo">
							<a href=""><img src="assets/images/1.png" alt=""></a>
						</div>
						<div class="footer-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, dolores.</p>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid small-footer-bg">
			<div class="bottom-footer-twoside-less">
				<div class="row">
					<div class="col-md-6">
						<div class="copy-right-text">
							<p><?php echo $redux_demo['copyright-text']; ?></p>
						</div>
					</div>
					<div class="col-md-6">

						<div class="terms-and-condition">


           <?php
					 wp_nav_menu(array(
								'location' => 'footer-1',
				        'menu_class'=>'list-inline horizontal-line'
            ) ); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php wp_footer(); ?>
</body>
</html>
