<?php /* Template Name: Weekly Bulletin */ ?>

<?php get_header(); ?>

<section class = "mb-3">
    <div id = "latest_bulletin" class="container-fluid">
        <div class="container">
            <div class="row">
                <?php $query = new WP_Query (
                    array(
                        'post_type' => 'weekly-bulletin',
                        'posts_per_page' => 1)
                    ); ?>
                <?php if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="col-lg-9">
                                <h3 class="mb-3">This Week's Bulletin</h3>
                                <embed src="<?php the_field('file'); ?>" width="100%" height="750px" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                            </div><!-- .col-lg-9 -->
                        <?php endwhile; ?>
                <?php endif; ?>
                    
                <div id = "bulletinArchives" class="col-lg-3">
                    <h3 class="mb-3">Bulletin Archive</h3>
                    <?php

$blogtime = date('Y');
$prev_limit_year = $blogtime - 1;
$prev_month = '';
$prev_year = '';

$args = array(
    'post_type' => 'weekly-bulletin',
    'posts_per_page' => 60,
    'post_status' => 'any'
);

$postsbymonth = new WP_Query($args); ?>
<?php $i = 0; ?>
<?php while( $postsbymonth->have_posts() ) : $postsbymonth->the_post();

    if(get_the_time('F') != $prev_month || get_the_time('Y') != $prev_year && get_the_time('Y') == $prev_limit_year) {
                    if ( $i != 0) { echo '</div>'; } ?>
                   <h5 data-toggle="collapse" data-target="#month-<?php echo $i; ?>" aria-expanded="true" aria-controls="month-<?php echo $i; ?>" class = "mb-2 archive-header <?php if ( $i != 0 ) { echo 'collapsed'; } ?>"><i class="fa fa-caret-down mr-2" aria-hidden="<?php if ( $i == 0 ) { echo 'true'; } else { echo 'false'; } ?>"></i>
                    <?php echo get_the_time('F, Y'); ?>
                    </h5>
                    <div id = "month-<?php echo $i; ?>" class = "<?php if ( $i == 0 ) { echo 'collapse show'; } else { echo 'collapse'; } ?>" data-parent = "#bulletinArchives">

        <?php } ?>

        <a class = "d-block mb-3" target = "_blank" href="<?php the_field('file'); ?>"><button role = 'button' class = 'btn btn-primary'>View <?php the_title(); ?></button></a>
    
    <?php
    $prev_month = get_the_time('F');
    $prev_year = get_the_time('Y');
    $i++;
    ?><?php endwhile; ?>
                </div><!-- .col-lg-3 -->
            </div><!-- .row -->   
        </div><!-- .container -->
    </div><!-- .container-fluid -->
</section>

<?php get_footer();