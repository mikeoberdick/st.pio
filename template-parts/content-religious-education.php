<section id = "sectionOne" class = "container mb-5">
	<div class="row">
		<div class="col-sm-12">
			<h3>Religious Education Program</h3>
		</div><!-- .col-sm-12 -->
		<div class="col-md-3">
			<?php $img = get_field('ccd_image', 'option'); ?>
			<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
		</div><!-- .col-md-3 -->
		<div class="col-md-9">
			<p class = "mb-3"><?php the_field('ccd_general_info', 'option') ?></p>
			<div class="row my-4">
				<?php if( have_rows('ccd_program_info', 'option') ): ?>
				<?php while( have_rows('ccd_program_info', 'option') ): the_row(); 

				// vars
				$header = get_sub_field('heading');
				$content = get_sub_field('content');

				?>

				<div class="col-md-3 d-flex">
					<div class="class-info-wrapper d-flex flex-column">
						<div class = "class-header"><?php echo $header; ?></div>
						<p class = "class-content mb-0 h-100 text-center"><?php echo $content; ?></p>	
					</div><!-- .class-info-wrapper -->
				</div><!-- .col-md-3 d-flex -->

				<?php endwhile; ?>
			<?php endif; ?>
			</div><!-- .row -->
			<?php $name = get_field('ccd_contact_person', 'option'); $title = get_field('ccd_contact_title', 'option'); ?>
			<p><?php echo 'Contact <i>' . $name . '</i>, ' . $title . ', for more information.'; ?></p>
			<div class="class-contact row">
				<div class="col-md-6">
					<i class="fa fa-envelope mr-2" aria-hidden="true"></i>
					<?php the_field('ccd_contact_email', 'option'); ?>
				</div><!-- .col-md-6 -->
				<div class="col-md-6">
					<i class="fa fa-phone mr-2" aria-hidden="true"></i>
					<?php the_field('ccd_contact_phone', 'option'); ?>
				</div><!-- .col-md-6 -->
			</div><!-- .row -->
			<hr>
		</div><!-- .col-md-9 -->
	</div><!-- .row -->	
</section><!-- #sectionOne -->

<section id = "sectionTwo" class = "container mb-5">
	<div class="row">
		<div class="col-sm-12">
			<h3>Adult Faith Formation</h3>
		</div><!-- .col-sm-12 -->
		<div class="col-md-3">
			<?php $img = get_field('af_image', 'option'); ?>
			<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
		</div><!-- .col-md-3 -->
		<div class="col-md-9">
			<p class = "mb-3"><?php the_field('af_general_info', 'option') ?></p>
			<div class="row my-4">
				<?php if( have_rows('af_program_info', 'option') ): ?>
				<?php while( have_rows('af_program_info', 'option') ): the_row(); 

				// vars
				$header = get_sub_field('header');
				$content = get_sub_field('content');

				?>

				<div class="col-md-4 d-flex">
					<div class="class-info-wrapper d-flex flex-column">
						<div class = "class-header"><?php echo $header; ?></div>
						<p class = "class-content mb-0 h-100 text-center"><?php echo $content; ?></p>	
					</div><!-- .class-info-wrapper -->
				</div><!-- .col-md-4 d-flex -->

				<?php endwhile; ?>
			<?php endif; ?>
			</div><!-- .row -->
			<?php $name = get_field('af_contact_person', 'option'); $title = get_field('af_contact_title', 'option'); ?>
			<p><?php echo 'Contact <i>' . $name . '</i>, ' . $title . ', for more information.'; ?></p>
			<div class="class-contact row">
				<div class="col-md-6">
					<i class="fa fa-envelope mr-2" aria-hidden="true"></i>
					<?php the_field('af_contact_email', 'option'); ?>
				</div><!-- .col-md-6 -->
				<div class="col-md-6">
					<i class="fa fa-phone mr-2" aria-hidden="true"></i>
					<?php the_field('af_contact_phone', 'option'); ?>
				</div><!-- .col-md-6 -->
			</div><!-- .row -->
			<hr>
		</div><!-- .col-md-9 -->
	</div><!-- .row -->	
</section><!-- #sectionTwo -->

<section id = "sectionThree" class = "container">
	<div class="row">
		<div class="col-sm-12">
			<h3>Bible Studies</h3>
			<?php if( have_rows('bs_sections', 'option') ): ?>
				<?php while( have_rows('bs_sections', 'option') ): the_row(); 

				// vars
				$header = get_sub_field('header');
				$content = get_sub_field('content');

				?>

				<div class="class-info">
					<h5><?php echo $header; ?></h5>
					<p><?php echo $content; ?></p>
				</div><!-- .class-info -->

				<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- .col-sm-12 -->
	</div><!-- .row -->	
</section><!-- #sectionThree -->