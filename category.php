<?php get_header(); ?>

<?php /* Your Posts Content */ ?>
<div id="content">
<!--    <div class="row breadcrumbs">-->
<!--        <div class="col small-12 large-12">-->
<!--            <div class="col-inner">-->
<!--                <p id="breadcrumbs">-->
<!--                    --><?php //echo do_shortcode('[breadcrumb]'); ?>
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <article class="wapper_article">
        <div class="row wapper_article_row wapper_tin_tuc">
            <!-- Display name archive-->
<!--            --><?php //$pt = get_post_type_object( 'tin_tuc' ); ?>
<!--            <div class="col large-12 pd0 col-title">-->
<!--                <h1>--><?php //echo $pt->labels->name; ?><!--</h1>-->
<!--            </div>-->
            <!-- Query loop post-->
            <div class="col large-9 small-9 medium-12">
                <div class="row">
                    <?php if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                            <div class="col medium-6 small-12 large-6 wapper_article_col">
                                <div class="wapper_item">
                                    <div class="wapper_image">
                                        <!-- Get thumbnail -->
                                        <a class="thumnail" href="<?php the_permalink(); ?>">
                                            <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ); ?>
                                            <div class="background_blue"></div>
                                        </a>
                                        <!-- Get thumbnail -->

                                    </div>
                                    <div class="image_overlay"></div>
                                    <a class="head_title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <p><?php echo teaser(40); ?></p>
                                </div>

                            </div>


                            <!--  Phan trang-->
                            <?php if(paginate_links()!='') {?>
                                <div class="pagination">
                                    <?php
                                    global $wp_query;
                                    $big = 999999999;
                                    echo paginate_links( array(
                                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                        'format' => '?paged=%#%',
                                        'prev_text'    => __('«'),
                                        'next_text'    => __('»'),
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $wp_query->max_num_pages
                                    ) );
                                    ?>
                                </div>
                            <?php } ?>
                        <?php endwhile;
                    else: ?>
                        <div class="post">
                            <p><?php _e('Sorry, no posts matched your criteria.', "hi-rezz"); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col small-12 large-3 col-md-3 single-sidebar">
                <?php get_sidebar(); ?>
            </div>

            <!-- END Query loop post-->
        </div> <!-- END row-->
    </article>
</div>
<?php get_footer(); ?>
