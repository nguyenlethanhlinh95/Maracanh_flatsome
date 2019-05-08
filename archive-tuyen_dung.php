<?php get_header(); ?>

<div id="content" class="content-area page-wrapper tuyendung_class" role="main">
    <div class="row row-main">
        <div class="large-12 col">
            <div class="col-inner">

                    <header class="entry-header">
                        <h1 class="entry-title mb uppercase"><?php echo get_cat_name(); ?></h1>
                    </header><!-- .entry-header -->

                <div class="row">
                    <div class="large-9 col wapper_content">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="wap_item row">
                                <div class="large-4 col col-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                                <div class="large-8 col col-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                                    <br>
                                   <p><a href="<?php the_permalink(); ?>" class="button">Xem thêm</a></p>
                                </div>
                            </div>
                        <?php endwhile; // end of the loop. ?>

                        <?php if(paginate_links()!='') {?>
                            <div class="quatrang pagination">
                                <?php
                                global $wp_query;
                                $big = 999999999;
                                echo paginate_links( array(
                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format' => '?paged=%#%',
                                    'prev_text'    => __('« Mới hơn'),
                                    'next_text'    => __('Tiếp theo »'),
                                    'current' => max( 1, get_query_var('paged') ),
                                    'total' => $wp_query->max_num_pages
                                ) );
                                ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="large-3 col">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div><!-- .col-inner -->
        </div><!-- .large-12 -->
    </div><!-- .row -->
</div>

<?php get_footer(); ?>
