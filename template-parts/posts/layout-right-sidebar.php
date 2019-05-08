<?php
do_action('flatsome_before_blog');
?>

<?php if(!is_single() && flatsome_option('blog_featured') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>
    <div class="row row-large <?php if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?>">

        <div class="large-9 col">
            <?php if(!is_single() && flatsome_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
            <?php
            if(is_single()){
                get_template_part( 'template-parts/posts/single');
                //comments_template();

            } elseif(flatsome_option('blog_style_archive') && (is_archive() || is_search())){
                get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style_archive') );
            } else {
                get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style') );
            }
            ?>

            <?php
            // Lay bai viet lien quan
            $tags = wp_get_post_tags($post->ID);
            if ($tags)
            {
                $tag_ids = array();
                foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                // lấy danh sách các tag liên quan
                $args=array(
                    'tag__in' => $tag_ids,
                    'post__not_in' => array($post->ID), // Loại trừ bài viết hiện tại
                    'showposts'=>3, // Số bài viết bạn muốn hiển thị.
                    'caller_get_posts'=>1
                );
                $my_query = new wp_query($args);
                if( $my_query->have_posts() )
                {
                    ob_start();

                    echo '<h3>Bài viết liên quan</h3>
                    <div class="row single_related_posts">';
                    while ($my_query->have_posts())
                    {
                        $my_query->the_post();
                        ?>

                        <div class="large-4 col item">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                <span class="wapper_image"">
                                    <?php the_post_thumbnail('small') ?>
                                </span>
                                <h4><?php the_title(); ?></h4>
                            </a>
                        </div>
                        <?php
                    }

                    echo '</div>';
                    $data = ob_get_contents();
                    ob_clean();
                    ob_flush();
                    echo $data;
                }
            }
            ?>

<!--            comment facebook-->
            <div class="cmt">
                <div class="fb-comments" style="width: 100%" data-width="100%" data-href="<?php the_permalink(); ?>" data-numposts="3"></div>
            </div>

        </div> <!-- .large-9 -->

        <div class="post-sidebar large-3 col">
            <?php get_sidebar(); ?>
        </div><!-- .post-sidebar -->

    </div><!-- .row -->

<?php
do_action('flatsome_after_blog');
?>