<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MarketErector
 */

get_header();
?>
<section class="blog-section-main">
	<div class="digital-marketing-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="blog-main-heading text-center">
						<h1>Our blog</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php while(have_posts()):
					 the_post();
					?>
					<div class="blog-content-area">
						<div class="blog-image-main">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="blog-main-text-area">
							<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							<?php the_content(); ?>
							<div class="read-more text-center">
								<a href="<?php the_permalink(); ?>" class="read-button">Read more</a>
							</div>
							<div class="post-info">
								<ul class="list-inline">
									<li class="list-inline-item"><i class="fas fa-calendar-week"></i> <?php the_time( 'F jS' ); ?></li>
									<li class="list-inline-item"><i class="far fa-comment-alt"></i> Comments: <?php comments_number(); ?> </li>
									<li class="list-inline-item"><i class="fas fa-user-shield"></i> <?php the_author(); ?></li>
								</ul>
							</div>
						</div>
					</div>
					 <?php endwhile; ?>

					<nav aria-label="...">
						<ul class="pagination">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active">
								<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
							</li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-md-4">
					<div class="sidebar-widget">
						<div class="input-icons">
							<i class="fas fa-search icon"></i>
							<input class="input-field" placeholder="Search..." type="text">
						</div>
					</div>
					<div class="main-widget">
						<div class="widget-heading text-center">
							<h4>Category</h4>
						</div>
						<div class="widget-content">
							<div class="widget-text-area text-center">
								<i class="fas fa-play fa-xs"></i>
								<a>Lorem ipsum dolor sit amet, consectetur</a>
							</div>
						</div>
						<hr class="blog-vertical">
						<div class="widget-content">
							<div class="widget-text-area text-center">
								<i class="fas fa-play fa-xs"></i>
								<a>Lorem ipsum dolor sit amet, consectetur</a>
							</div>
						</div>
						<hr class="blog-vertical">
						<div class="widget-content">
							<div class="widget-text-area text-center">
								<i class="fas fa-play fa-xs"></i>
								<a>Lorem ipsum dolor sit amet, consectetur</a>
							</div>
						</div>
						<hr class="blog-vertical">
						<div class="widget-content">
							<div class="widget-text-area text-center">
								<i class="fas fa-play fa-xs"></i>
								<a>Lorem ipsum dolor sit amet, consectetur</a>
							</div>
						</div>
						<hr class="blog-vertical">
					</div>
					<div class="main-widget">
						<div class="widget-heading text-center">
							<h4>Recent Post</h4>
						</div>
						<div class="widget-content">
							<div class="widget-text-area">
								<ul class="list-inline">
									<li class="list-inline-item" >
										<a href="#">
											<img class="recent-post-image" src="assets/images/1.png" alt="">
										</a>
									</li>
									<li class="list-inline-item" ><a href="#">Lorem ipsum dolor sit amet.</a><br><i class="far fa-calendar-check fa-xs"></i><span>may 12</span></li>
								</ul>
							</div>
						</div>
						<hr class="blog-vertical">
						<div class="widget-content">
							<div class="widget-text-area">
								<ul class="list-inline">
									<li class="list-inline-item" >
										<a href="#">
											<img class="recent-post-image" src="assets/images/image3.png" alt="">
										</a>
									</li>
									<li class="list-inline-item" ><a href="#">Lorem ipsum dolor sit amet.</a><br><i class="far fa-calendar-check fa-xs"></i><span>may 12</span></li>
								</ul>
							</div>
						</div>
						<hr class="blog-vertical">
						<div class="widget-content">
							<div class="widget-text-area">
								<ul class="list-inline">
									<li class="list-inline-item" >
										<a href="#">
											<img class="recent-post-image" src="assets/images/image3.png" alt="">
										</a>
									</li>
									<li class="list-inline-item" ><a href="#">Lorem ipsum dolor sit amet.</a><br><i class="far fa-calendar-check fa-xs"></i><span>may 12</span></li>
								</ul>
							</div>
						</div>
						<hr class="blog-vertical">
						<div class="widget-content">
							<div class="widget-text-area">
								<ul class="list-inline">
									<li class="list-inline-item" >
										<a href="#">
											<img class="recent-post-image" src="assets/images/image3.png" alt="">
										</a>
									</li>
									<li class="list-inline-item" ><a href="#">Lorem ipsum dolor sit amet.</a><br><i class="far fa-calendar-check fa-xs"></i><span>may 12</span></li>
								</ul>
							</div>
						</div>
						<hr class="blog-vertical">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php

get_footer();
