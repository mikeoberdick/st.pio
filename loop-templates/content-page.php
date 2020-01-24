<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<div class="container">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<div class="entry-content">

			<?php the_content(); ?>

		</div><!-- .entry-content -->

	</article><!-- #post-## -->
</div>
