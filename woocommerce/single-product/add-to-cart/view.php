<?php
/**
 * Created by PhpStorm.
 * User: Computer of Linh
 * Date: 4/16/2019
 * Time: 3:54 PM
 */
/* Template Name: View style product */
?>
<?php get_header();?>
    <div id="content" class="content-area page-wrapper tuyendung_class view" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">
                    <h1>View product</h1>
                    <?php $id = htmlspecialchars($_GET["id"]); ?>
                    <?php
                        $args = array(
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'p' => $id,   // id of the post you want to query
                        );
                    ?>

                    <?php
                    $wc_query = new WP_Query($args);
                    if ($wc_query->have_posts()) :
                        while ($wc_query->have_posts()) :
                            $wc_query->the_post();

                            $maracanh = get_field('maracanh');?>
                            <img src="<?php echo $maracanh['dress']['url'] ?>" alt="">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">1</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-8">

                                </div>
                            </div>


                        <?php endwhile;
                        wp_reset_postdata();
                    else:
                        _e( 'No Products' );
                    endif;
                    ?>



                    <?php // vars
                    //$maracanh = get_field('maracanh');?>

<!--                    <img src="--><?php //echo $maracanh['hair']; ?><!--" alt="">-->
                    <?php //echo $maracanh['hair'];
//                    if( $maracanh ):
//
//                    endif
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>