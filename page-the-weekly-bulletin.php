<?php
/**
 * The template for displaying the bulletin archive pages
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<section class = "mb-3">
    <div id = "latest_bulletin" class="container-fluid">
        <div class="container">
         <div class="row">
            <?php 
            $query = new WP_Query( array('post_type' => 'weekly-bulletin','posts_per_page' => 1) ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class = "col-sm-12">
                    <h1 class = "mb-5">This Week's Bulletin</h1>
                </div>
                <div class="col-lg-7">
                    <embed src="<?php the_field('file'); ?>" width="100%" height="750px" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                </div><!-- .col-lg-7 -->
                <div class="col-lg-4 offset-lg-1 dl_box">
                    <h3 class = "mb-3"><?php the_title(); ?></h3>
                    <a href = '<?php the_field('file'); ?>'>
                        <button role = 'button' class = 'btn btn-primary btn-lg'>DOWNLOAD</button>
                    </a>
                </div><!-- col.lg-4 -->
            <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div><!-- .row -->   
        </div><!-- .container -->
    </div><!-- .container-fluid -->
</section>

<section id = "bulletin_archives">
    <div class="container">
        <div class="row">
            <div class = "mb-3 col-sm-12">
                <h1>Bulletin Archive</h1>
            </div>
            
             <?php 

add_action('pre_get_posts', 'myprefix_query_offset');
add_filter('found_posts', 'myprefix_adjust_offset_pagination', 1, 2 );
             $the_query = new WP_Query( array('post_type'=>'weekly-bulletin',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            );
             remove_filter('found_posts', 'myprefix_adjust_offset_pagination', 1, 2 );
                            remove_action('pre_get_posts', 'myprefix_query_offset'); 
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<div class="col-lg-12 mb-3 d-flex align-items-center">
                <h5 class = "bulletin_title mb-0 mr-5"><?php the_title(); ?></h5>
                <a href = '<?php the_field('file'); ?>'>
                    <button role = 'button' class = 'btn btn-primary'>DOWNLOAD</button>
                </a> 
            </div>
<?php
endwhile;

$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
) );

wp_reset_postdata(); ?>
        </div><!-- .row -->
    </div><!-- .container -->
</section>

<?php get_footer();