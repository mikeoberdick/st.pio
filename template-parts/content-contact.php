<section id = "sectionOne" class = "container">
	<div class="row">
		<div class="col-sm-12">
			<h3>Contact St. Pio of Pietrelcina</h3>
		</div><!-- .col-sm-12 -->
	</div><!-- .row -->
	<div class="row">
		<div class="col-md-4">
			<div id = "contactBox" class="contact-info">
				<div class = "d-flex mb-3"><i class="fa fa-phone mr-2" aria-hidden="true"></i><?php the_field('st_pio_phone', 'option'); ?></div>
				<div class = "d-flex mb-3"><i class="fa fa-envelope mr-2" aria-hidden="true"></i><?php the_field('email', 'option'); ?></div>
				<div class = "d-flex"><i class="fa fa-map-marker mr-2" aria-hidden="true"></i><?php echo get_field('st_pio_address_line_1', 'option') . '<br>' . get_field('st_pio_address_line_2', 'option'); ?></div>
			</div><!-- .contact-info -->
		</div><!-- .col-md-4 -->
		<div class="col-md-8">
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
		</div><!-- .col-md-8 -->
	</div><!-- .row -->
</section><!-- #sectionOne -->

<section id = "sectionTwo" class = "container">
	<div class="row">
		<div class="col-sm-12">
			<h3>Maps & Directions</h3>
		</div><!-- .col-sm-12 -->
	</div><!-- .row -->
	<div class="row">
		<div class="map col-md-6">
			<h5 class = "mb-3 d-inline-block">St. Pio of Pietrelcina</h5><p class="d-inline small"> (Click map for directions)</p>
			<?php $st_pio_map = get_field('st_pio_map','option'); ?>
			<a target = "_blank" href = "<?php the_field('st_pio_directions', 'option'); ?>" rel = "nofollow"><img src="<?php echo $st_pio_map['url'] ?>" alt="<?php echo $st_pio_map['alt'] ?>"></a>
		</div><!-- .col-md-6 -->
		<div class="map col-md-6">
			<h5 class = "mb-3 d-inline-block">St. Vincent De Paul</h5><p class="d-inline small"> (Click map for directions)</p>
			<?php $st_vincent_map = get_field('st_vincent_map','option'); ?>
			<a target = "_blank" href = "<?php the_field('st_vincent_directions', 'option'); ?>" rel = "nofollow"><img src="<?php echo $st_vincent_map['url'] ?>" alt="<?php echo $st_vincent_map['alt'] ?>"></a>
		</div><!-- .col-md-6 -->
	</div><!-- .row -->
</section><!-- #sectionTwo -->