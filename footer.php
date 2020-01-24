<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<footer id="colophon" class = "pt-5">
	<div class="container">
		<div class="row">
				<div id = "left" class="col-md-4">
					<h5>LOGO</h5>
					<p>Phone</p>
					<p>Email</p>
					<p>Addy</p>
				</div><!-- .col-md-4 -->
				<div id = "right" class="col-md-8">
					<div id="buttons" class = "mb-3">
						<a href = "/the-weekly-bulletin/ " class = "mr-3"><button role = 'button' class = 'btn btn-primary'><i class="fa fa-thumb-tack rotate-45 mr-1" aria-hidden="true"></i> WEEKLY BULLETIN</button></a>
						<a target = "_blank" href = 'https://pompeiichurch.churchgiving.com/'><button role = 'button' class = 'btn btn-primary'><i class="fa fa-heart mr-1" aria-hidden="true"></i> GIVE</button></a>	
					</div><!-- #buttons -->
					<p class = "mb-3">lorem lorem lorem...</p>
					<div id = "footerSocial">
						<div class = "social-links mb-3">
							<a target = "_blank" href="<?php the_field('facebook_url', 'options'); ?>" class="social-link">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							<a target = "_blank" href="<?php the_field('twitter_url', 'options'); ?>" class="social-link">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a target = "_blank" href="<?php the_field('youtube_url', 'options'); ?>" class="social-link">
								<i class="fa fa-youtube" aria-hidden="true"></i>
							</a>
						</div><!-- .social-links -->
					</div><!-- #footerSocial -->
				</div><!-- .col-md-8 -->
			</div><!-- .row -->
			
			<div id = "copyright" class="row text-center text-white pt-3 mx-3 mx-lg-0">
				<div class="col-sm-12" id="attribution">
					<p class = "mb-0">&copy <?php bloginfo( 'name' ); ?> All rights reserved</p>
					<p>Site designed and devloped by <a target = "_blank" href = "https://designs4theweb.com" alt = "Designs 4 The Web - WordPress Website Developer">Designs 4 The Web</a></p>
				</div><!-- #attribution.col-sm-12 -->
			</div><!-- .row -->

		</div><!-- .container -->
	</footer><!-- #colophon -->

</div><!-- #page-wrapper -->

<?php wp_footer(); ?>

</body>

</html>
