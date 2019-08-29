<?php
/**
* Template Name: Home
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();
?>
<?php	global $redux_demo; ?>
    <!-- Services section -->
    <section class="digital-services">
      <div class="digital-marketing-wrapper">
      	<div class="container-fluid service-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/services-bg.jpg');">
      		<div class="row">
      			<div class="col-md-12">
		      		<div class="service-content-area text-center">
		      			<div class="services-heading">
		                 <h3><?php echo $redux_demo['services-heading']; ?></h3>
		               </div>
		               <div class="services-content">
		               	<p><?php echo $redux_demo['service-heading-2']; ?></p>
		               </div>
		      		</div>
	      		</div>
	      		<div class="col-md-8 offset-md-3">
	      		    <div class="main-services-isotop">
	      				<div class="filters filter-button-group">
			      			<ul>
			      			  	<h4>
								    <li class="active" data-filter="*">SHOW All |</li>
								    <li data-filter=".seo"> SEO |</li>
								    <li data-filter=".sem"> SEM |</li>
								    <li data-filter=".smm"> SMM |</li>
								    <li data-filter=".smm"> EMAIL MARKETING |</li>
								    <li data-filter=".other"> OTHER </li>
				                </h4>
				            </ul>
		                </div>

					<div class="content grid">

					  <div class="single-content seo sem smm grid-item">
							<a href="" target="_blank">
								<img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg">
							</a>
					  </div>

					  <div class="single-content smm seo grid-item">
							<a href="" target="_blank">
								<img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg">
						    </a>
					  </div>

					  <div class="single-content smm grid-item">
							<a href="" target="_blank">
								<img class="p2" src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg">
						    </a>
					  </div>

			            <div class="single-content seo grid-item">
							<a href="" target="_blank">
								<img class="p2" src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg">
						    </a>
					  </div>

			            <div class="single-content seo grid-item">
							<a href="" target="_blank">
								<img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg">
						    </a>
					  </div>

			            <div class="single-content seo other grid-item">
							<a href="" target="_blank"><img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg"></a>
					  </div>

			            <div class="single-content seo grid-item">
							<a href="" target="_blank"><img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg"></a>
					  </div>

			            <div class="single-content seo sem grid-item">
							<a href="" target="_blank"><img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg"></a>
					  </div>

			            <div class="single-content seo sem grid-item">
							<a href="" target="_blank"><img class="p2" src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg"></a>
						</div>
				    </div>
	      		  </div>
	      		</div>
      		</div>
      	</div>
      </div>
    </section>

    <section class="our-support-part">
    	<div class="digital-marketing-wrapper">
    		<div class="cotanier-fluid best-bg">
    			<div class="row">
    				<div class="col-md-12">
                      <div class="support-part-main-heading text-center">
                      	<h2><?php echo $redux_demo['different-heading']; ?></h2>
                      </div>
    				</div>
    			</div>
    			<div class="support-icon-main-part">
    				<div class="row">
    					<div class="col-md-4">
    						<div class="support-icon text-center">
    							<i class="far fa-chart-bar"></i>
    						</div>
    						<div class="support-icon-heading text-center">
    							<h3><?php echo $redux_demo['didicated-1']; ?></h3>
    						</div>
    						<div class="support-icon-content">
    							<p><?php echo $redux_demo['textarea-1']; ?></p>
    							<!-- <div class="vertical-line"></div> -->
    						</div>

    					</div>
    					<div class="col-md-4">
    						<div class="support-icon text-center">
    							<i class="fas fa-shopping-cart"></i>
    						</div>
    						<div class="support-icon-heading text-center">
    							<h3><?php echo $redux_demo['didicated-2']; ?></h3>
    						</div>
    						<div class="support-icon-content">
    							<p><?php echo $redux_demo['textarea-2']; ?></p>
    							<!-- <div class="vertical-line"></div> -->
    						</div>

    					</div>
    					<div class="col-md-4">
    						<div class="support-icon text-center">
    							<i class="fas fa-comments"></i>
    						</div>
    						<div class="support-icon-heading text-center">
    							<h3><?php echo $redux_demo['didicated-3']; ?></h3>
    						</div>
    						<div class="support-icon-content">
    							<p><?php echo $redux_demo['textarea-3']; ?></p>
    						</div>
    					</div>

    				</div>
    				<div class="row happay-bg-color">
    					<div class="col-md-4">

    						<div class="happy-client">
		           		       <i class="far fa-chart-bar"></i>
    						</div>
    						<div class="number-con">
    							<h3><?php echo $redux_demo['happy-1']; ?></h3>
    							<p><?php echo $redux_demo['happy-4']; ?></p>
    						</div>

    					</div>
    					<div class="col-md-4">
    						<div class="happy-client">
		           		       <i class="fas fa-shopping-cart"></i>
    						</div>
    						<div class="number-con">
    							<h3><?php echo $redux_demo['happy-2']; ?></h3>
    							<p><?php echo $redux_demo['happy-5']; ?></p>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="happy-client">
		           		       <i class="fas fa-comments"></i>
    						</div>
    						<div class="number-con">
    							<h3><?php echo $redux_demo['happy-3']; ?></h3>
    							<p><?php echo $redux_demo['happy-6']; ?></p>
    						</div>
    					</div>
    				</div>
    				<div class="row accordion-part-margin">
                      <div class="col-md-6">
                      	<div class="support-last-headding-part">
                           <h3><?php echo $redux_demo['great-result']; ?></h3>
                      	</div>
                      	<div class="support-last-content-part">
                      		<p><?php echo $redux_demo['grea-content']; ?></p>
                      	</div>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $redux_demo['progress-1']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $redux_demo['progress-1']; ?>; background-color: green;"><?php echo $redux_demo['progress-1']; ?></div>
							</div>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $redux_demo['progress-2']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $redux_demo['progress-2']; ?>; background-color: #00b894;"><?php echo $redux_demo['progress-2']; ?></div>
							</div>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $redux_demo['progress-3']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $redux_demo['progress-3']; ?>; background-color: #ff7675;"><?php echo $redux_demo['progress-3']; ?></div>
							</div>
                      </div>
                      <div class="col-md-6">
                      	<div class="accordion-container">
							  <div class="set">
							    <a href="#">
							      <?php echo $redux_demo['accordion-1']; ?>
							      <i class="fa fa-plus"></i>
							    </a>
							    <div class="contents">
							      <p><?php echo $redux_demo['ass-cont-1']; ?></p>
							    </div>
							  </div>
							  <div class="set">
							    <a href="#">
							      <?php echo $redux_demo['accordion-2']; ?>
							      <i class="fa fa-plus"></i>
							    </a>
							    <div class="contents">
							      <p><?php echo $redux_demo['ass-cont-2']; ?></p>
							    </div>
							  </div>
							  <div class="set">
							    <a href="#">
							      <?php echo $redux_demo['accordion-3']; ?>
							      <i class="fa fa-plus"></i>
							    </a>
							    <div class="contents">
							      <p><?php echo $redux_demo['ass-cont-3']; ?></p>
							    </div>
							  </div>
							</div>
                      </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="creative-team-part">
    	<div class="digital-marketing-wrapper">
    		<div class="cotanier creative-bg-color" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/background.png');">
    			<div class="row">
    				<div class="col-md-12">
    					<div class="creative-part text-center">
    						<h3><?php echo $redux_demo['creative-heading']; ?></h3>
    					</div>
    					<div class="creative-content">
    						<p><?php echo $redux_demo['creative-content']; ?></p>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col-md-12">
    						<div class="image-part">
                   <div class="first-image">
                   	<a href="#"><img src="<?php echo $redux_demo['creative-img-1']['url']; ?>"></a>
                   </div>
                   <div class="secount-image">
                   	<a href="#"><img src="<?php echo $redux_demo['creative-img-2']['url']; ?>"></a>
                   </div>
                   <div class="third-image">
                   	<a href="#"><img src="<?php echo $redux_demo['creative-img-3']['url']; ?>"></a>
                   </div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="testimonial-part">
    	<div class="digital-marketing-wrapper">
    		<div class="cotanier-fluid">
    			<div class="testimonial-part-two-side-less">
    				<div class="row">
    					<div class="col-md-12">
    					 <div class="testimonial-heading text-center">
    						<h1><?php echo $redux_demo['test-main-heading']; ?></h1>
    					</div>
    					<div class="testimonial-content text-center">
    						<p><?php echo $redux_demo['test-main-content']; ?></p>
    					</div>
    				  </div>
    				</div>
    				      <!-- test code -->
<!--====== TESTIMONIALS PART START ======-->

    <section id="testimonial" class="pt-200 pb-200">
        <div class="container">
            <div class="row">
               <!-- place image start-->
                <div class="col-lg-2">
                    <div class="place-image d-none d-sm-block">
                        <ul>
                            <li>
                                <img src="<?php echo $redux_demo['testi-img-1']['url']; ?>" alt="Image">
                            </li>
                            <li>
                                <img src="<?php echo $redux_demo['testi-img-2']['url']; ?>" alt="Image">
                            </li>
                            <li>
                                <img src="<?php echo $redux_demo['testi-img-3']['url']; ?>" alt="Image">
                            </li>
                            <li>
                                <img src="<?php echo $redux_demo['testi-img-4']['url']; ?>" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- place image ends-->

                <!-- testimonial image start-->
                <div class="col-lg-2">
                    <div class="testimonial-image">
                        <div class="singel-testimonial-img">
                            <img src="<?php echo $redux_demo['testi-img-1']['url']; ?>" alt="image">
                        </div>
                        <div class="singel-testimonial-img">
                            <img src="<?php echo $redux_demo['testi-img-2']['url']; ?>" alt="image">
                        </div>
                        <div class="singel-testimonial-img">
                            <img src="<?php echo $redux_demo['testi-img-3']['url']; ?>" alt="image">
                        </div>
                        <div class="singel-testimonial-img">
                            <img src="<?php echo $redux_demo['testi-img-4']['url']; ?>" alt="image">
                        </div>
                    </div>
                </div>
                <!-- testimonial image ends-->

                <!-- testimonial text start-->
                <div class="col-lg-6 offset-lg-2">
                    <div class="testimonial-text">
                        <div class="singel-testimonial-text">
                            <i class="fas fa-quote-left"></i>
                            <p><?php echo $redux_demo['test-group-1']; ?></p>
                            <h6><?php echo $redux_demo['test-group-2']; ?></h6>
                            <span><?php echo $redux_demo['test-group-3']; ?></span>
                        </div>
                        <div class="singel-testimonial-text">
                            <i class="fas fa-quote-left"></i>
                            <p><?php echo $redux_demo['test-group-4']; ?></p>
                            <h6><?php echo $redux_demo['test-group-5']; ?></h6>
                            <span><?php echo $redux_demo['test-group-6']; ?></span>
                        </div>
                        <div class="singel-testimonial-text">
                            <i class="fas fa-quote-left"></i>
                            <p><?php echo $redux_demo['test-group-7']; ?></p>
                            <h6><?php echo $redux_demo['test-group-8']; ?></h6>
                            <span><?php echo $redux_demo['test-group-9']; ?></span>
                        </div>
                        <div class="singel-testimonial-text">
                            <i class="fas fa-quote-left"></i>
                            <p><?php echo $redux_demo['test-group-10']; ?></p>
                            <h6><?php echo $redux_demo['test-group-11']; ?></h6>
                            <span><?php echo $redux_demo['test-group-12']; ?></span>
                        </div>
                    </div>
                </div>
                <!-- testimonial text ends-->
            </div>
        </div>
    </section>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="our-partner-part">
    	<div class="digital-marketing-wrapper">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<div class="our-partner-heading text-center">
    						<h2><?php echo $redux_demo['carosul-logo']; ?></h2>
    					</div>
    				</div>
    			</div>
				<div class="row">
				 <section class="regular slider">
				    <div>
				      <img src="<?php echo $redux_demo['logo-carosul-1']['url']; ?>">
				    </div>
				    <div>
				      <img src="<?php echo $redux_demo['logo-carosul-2']['url']; ?>">
				    </div>
				    <div>
				      <img src="<?php echo $redux_demo['logo-carosul-3']['url']; ?>">
				    </div>
				    <div>
				      <img src="<?php echo $redux_demo['logo-carosul-4']['url']; ?>">
				    </div>
				    <div>
				      <img src="<?php echo $redux_demo['logo-carosul-5']['url']; ?>">
				    </div>
          </section>
				</div>
      </div>
    	</div>
    </section>
    <section class="digital-services">
      <div class="digital-marketing-wrapper">
      	<div class="container-fluid service-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/second.jpg'); opacity: 0.6">
      		<div class="row">
      			<div class="col-md-12">
		      		<div class="service-content-area text-center">
		      			<div class="services-heading">
		                 <h3><?php echo $redux_demo['Portfolio-heading']; ?></h3>
		               </div>
		               <div class="services-content">
		               	<p><?php echo $redux_demo['Portfolio-heading-2']; ?></p>
		               </div>
		      		</div>
	      		</div>
	      		<div class="col-md-8 offset-md-3">
	      		    <div class="main-services-isotop">
	      				<div class="filters filter-button-group">
			      			<ul>
			      			  	<h4>
								    <li class="active" data-filter="*">SHOW All |</li>
								    <li data-filter=".seo"> SEO |</li>
								    <li data-filter=".sem"> SEM |</li>
								    <li data-filter=".smm"> SMM |</li>
								    <li data-filter=".smm"> EMAIL MARKETING |</li>
								    <li data-filter=".other"> OTHER </li>
				                </h4>
				            </ul>
		                </div>

					<div class="content grid">

					  <div class="single-content seo sem smm grid-item">
							<a href="" target="_blank">
								<img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg">
							</a>
					  </div>

					  <div class="single-content smm seo grid-item">
							<a href="" target="_blank">
								<img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg">
						    </a>
					  </div>

					  <div class="single-content smm grid-item">
							<a href="" target="_blank">
								<img class="p2" src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg">
						    </a>
					  </div>

			            <div class="single-content seo grid-item">
							<a href="" target="_blank">
								<img class="p2" src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg">
						    </a>
					  </div>

			            <div class="single-content seo grid-item">
							<a href="" target="_blank">
								<img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg">
						    </a>
					  </div>

			            <div class="single-content seo other grid-item">
							<a href="" target="_blank"><img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg"></a>
					  </div>

			            <div class="single-content seo grid-item">
							<a href="" target="_blank"><img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg"></a>
					  </div>

			            <div class="single-content seo sem grid-item">
							<a href="" target="_blank"><img class="p2"  src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg"></a>
					  </div>

			            <div class="single-content seo sem grid-item">
							<a href="" target="_blank"><img class="p2" src="https://biztechub.com/wp-content/uploads/2018/05/pexels-photo-257897.jpeg"></a>
						</div>
				    </div>
	      		  </div>
	      		</div>
      		</div>
      	</div>
      </div>
    </section>
    <section class="free-website-trail">
      <div class="digital-marketing-wrapper">
      	<div class="container-fluid free-trail-bg-color">
      		<div class="row">
      			<div class="free-website-less">
      			<div class="col-md-12">
      				<div class="main-heading">
      					<h2>Free Website Audit</h2>
      				</div>
      				<div class="website-audit-subtitle">
      					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, dolorem!</p>
      				</div>
      				<div class="contact-from">
      					<form action="">
      						 <div class="form-group">
      					       <input class="form-control form-control-lg" type="text" placeholder="Name">
      				        </div>
      				        <div class="form-group">
      					      <input class="form-control form-control-lg" type="text" placeholder="Email">
      					    </div>
      					    <div class="form-group">
      					     <input class="form-control form-control-lg" type="text" placeholder="Phone">
		      				</div>
		      					<div class="form-group">
		      					<input class="form-control form-control-lg" type="text" placeholder="Webside">
		      				</div>
		      				<div class="form-group">
		      					<textarea class="form-control form-control-lg" rows="5">Message</textarea>
		      				</div>
		      				<div class="from-group">
		      					<a href="#" class="myButton">Send Message</a>
		      				</div>
      					</form>

      				</div>
      			</div>
      		  </div>
      		</div>
      	</div>
      </div>
    </section>
<?php get_footer(); ?>
