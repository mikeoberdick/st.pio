<?php //disable until images are added through ACF ?>

<!-- <?php if( have_rows('slider_images') ): ?>
<div id="homepageSlider" tabindex="-1">
    <?php while( have_rows('slider_images') ): the_row(); ?>
    	<?php
    		//vars
    		$image = get_sub_field('slider_image');
    		$size = 'hp-slider';
    		$img = $image['sizes'][ $size ];?>
        <img src = "<?php echo $img; ?>">  
    <?php endwhile; ?>
</div>
<?php endif; ?> -->

<div id="homepageSlider">
	<img src="http://via.placeholder.com/1920X800&text=Image%201" alt="">
    <img src="http://via.placeholder.com/1920X800&text=Image%202" alt="">
    <img src="http://via.placeholder.com/1920X800&text=Image%203" alt="">
</div><!-- #homepageSlider -->

<section id="welcome">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 offset-md-1">
				<img src = "http://via.placeholder.com/750x500?text=Parish%20Image">
			</div><!-- .col-md-5 -->
			<div class="col-md-5 pl-5">
				<h3>Welcome to St. Pio of Pietrelcina</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, cupiditate maxime? Incidunt reiciendis aut ullam ea harum hic perspiciatis suscipit, error expedita voluptate deserunt ipsum! Iusto quam, enim fuga maxime?</p>
				<div class="row">
					<div class="col-md-6 times">
						<h5><i class="fa fa-clock-o mr-2" aria-hidden="true"></i>Mass Times</h5>
						<ul class = "list-unstyled">
							<li>Friday: 9:30 - 10:30</li>
							<li>Saturday: 9:00 - 10:00 & 10:30 - 11:15</li>
							<li>Sunday: 9:00 - 10:00 & 10:30 - 11:00</li>
						</ul>
					</div><!-- .col-md-6 -->
					<div class="col-md-6">
						Div 2
					</div><!-- .col-md-6 -->
				</div>
				<div class="text-center">
					<a href = '<?php echo bloginfo('url'); ?>/'><button role = 'button' class = 'btn btn-lg'>New to the Parish?  Click to Get Started!</button></a>	
				</div>
			</div><!-- .col-md-5 -->
		</row><!-- .row -->
	</div><!-- .container -->
</section><!-- #welcome -->

<section id="homepage-blog">
	<div class="container-fluid">
		<div class="row">
			<div class = "col-md-12">
				<h1 class = "text-center mb-5">Parish News</h1>
			</div>
			<?php 
				// the query
				$the_query = new WP_Query( array(
				'posts_per_page' => 4,
				)); 
			if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post();
				//vars
			if ( in_category('pilgrimages') ) {
				$icon = '<i class="fa fa-suitcase" aria-hidden="true"></i>';
			} else if ( in_category('news') ) {
				$icon = '<i class="fa fa-newspaper-o" aria-hidden="true"></i>';
			} ?>
				<div class="col-md-3 hp-single-post">
					<div class="post-wrapper">
						<div class = "category-icon mb-3">
							<?php echo $icon; ?>
						</div>
						<h3 class = "mb-3"><?php the_title(); ?></h3>
						<?php the_post_thumbnail( 'medium' ); ?>	
					</div>
				</div><!-- .col-md-3 -->
  			<?php endwhile; ?>
  			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<div class="col-sm-12 mt-5 text-center">
				<a href = '/parish-news'>
					<button role = 'button' class = 'btn btn-primary btn-lg'>View All News</button>
				</a>
			</div>
		</div><!-- .row -->
	</div><!-- .container-fluid -->
</section><!-- #homepage-blog -->