<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); 
?>
	<!-- Page Banner -->
	<div id="page-banner" class="page-banner">
		<img src="<?php echo get_template_directory_uri(); ?>/images/page-banner.png" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">404</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
						<li><a title="Pages" href="<?php echo esc_url( home_url( '/' ) ); ?>/services">services</a></li>
						<li>404</li>
					</ol>
				</div>
			</div>
		</div><!-- container /- -->
	</div><!-- Page Banner /- -->
	
	<!-- Error Page Section -->
	<div id="error-page-section" class="error-page-section">
		<!-- container -->
		<div class="container">
			<!-- col-md-6 -->
			<div class="col-md-6 error-content">
				<img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt="404" />
				<h3>Ohh! Coundn’t Find it</h3>
				<p>This file May Have Been Moved or Delated. Be Sure to Check Your Spelling.</p>
				<aside class="widget widget_search">
					<form class="search" role="search" action="#" method="get">
						<input type="text" name="s" id="s" placeholder="search again..." class="form-control" required="">
						<span class="search-icon input-group-btn"><button class="btn btn-xlg" type="submit"></button></span>
					</form>
				</aside>
			</div><!-- col-md-6 -->
			<!-- col-md-6 -->
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/images/404-2.jpg" alt="404-2" />
			</div><!-- col-md-6 -->
		</div><!-- container -->
	</div>
	<!-- Error Page Section /- -->
		<?php get_footer(); ?>