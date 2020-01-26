<?php 
$images = get_field('slider_images');
if( $images ): ?>
    <section id = "heroSliderWrapper" class = "container-fluid p-0">
		<div id="heroSlider">
            <?php foreach( $images as $image ): ?>
                <div class = "slide">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				</div><!-- .slide -->
            <?php endforeach; ?>
    	</div><!-- #heroSlider -->
    	
    	<div id = "sliderContent" class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<div id = "sliderContentWrapper">
	    				<h1 class = "mb-3">Welcome to St. Pio of Pietrelcina Parish</h1>
	    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores alias dolorem repellendus nobis placeat eaque, molestiae facilis debitis aliquid vel, sapiente quos iure, commodi delectus quis temporibus eos, voluptatum tempora.</p>
    				</div><!-- #sliderContentWrapper -->
    			</div><!-- .col-sm-12 -->
    		</div><!-- .row -->
    	</div><!-- .container -->

	</section><!-- .container-fluid -->
<?php endif; ?>

<section id="sectionOne" class = "py-5">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src = "http://via.placeholder.com/750x500?text=Parish%20Image">
				</div><!-- .col-md-6 -->
				<div class="col-md-6">
					<h3>Welcome to St. Pio of Pietrelcina</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, cupiditate maxime? Incidunt reiciendis aut ullam ea harum hic perspiciatis suscipit, error expedita voluptate deserunt ipsum! Iusto quam, enim fuga maxime?</p>
					<a href = '<?php echo bloginfo('url'); ?>/our-parish'><button role = 'button' class = 'btn btn-primary'>Learn More</button></a>
				</div><!-- .col-md-6 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .container-fluid -->
</section><!-- #sectionOne -->

<section id="sectionTwo" class = "py-5">
	<div class="container">
		<div id="sectionTwoContentWrapper" class = "px-5 py-4">
			<div class="row">
				<div class="col-sm-12">
					<h5 class = "mb-3">St. Pio Mass Times</h5>
				</div><!-- .col-sm-12 -->
				<?php
				if( have_rows('st_pio_hours', 'option') ):
					while( have_rows('st_pio_hours', 'option') ): the_row(); 
						// vars
							$day = get_sub_field('days');
							$times = get_sub_field('hours');
						?>

						<div class="col-md-3">
							<h6><?php echo $day; ?></h6>
							<p><?php echo $times; ?></p>
						</div><!-- .col-md-3 -->
					<?php endwhile; ?>
				<?php endif; ?>

				<div class="col-sm-12">
					<h5 class = "my-3">St. Vincent De Paul Mass Times</h5>
				</div><!-- .col-sm-12 -->
					<?php
				if( have_rows('st_vincent_hours', 'option') ):
					while( have_rows('st_vincent_hours', 'option') ): the_row(); 
						// vars
							$day = get_sub_field('days');
							$times = get_sub_field('hours');
						?>

						<div class="col-md-3">
							<h6><?php echo $day; ?></h6>
							<p><?php echo $times; ?></p>
						</div><!-- .col-md-3 -->
					<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- .row -->	
		</div><!-- #sectionTwoContentWrapper -->
	</div><!-- .container -->
</section><!-- #sectionTwo -->