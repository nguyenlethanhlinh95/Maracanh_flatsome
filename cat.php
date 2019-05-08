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
<?php
$total = 0;  // bien tam xem thu mat truoc co san pham live demo
$i = 0;    // bien tam xem thu sau truoc co san pham live demo
?>
<div id="content" class="content-area page-wrapper tuyendung_class view live_demo" role="main">
    <div class="row row-main">
        <div class="large-12 col">
            <div class="col-inner">
                <h1>
                    <?php
                        if (qtranxf_getLanguage() == 'en') {
                            // do stuff
                            echo 'View product';
                        }
                        elseif (qtranxf_getLanguage() == 'vi')
                        {
                            echo 'Xem live sản phẩm';
                        }
                        elseif (qtranxf_getLanguage() == 'Th')
                        {
                            echo 'ดูสินค้า
';
                        }
                        elseif (qtranxf_getLanguage() == 'ko')
                        {
                            echo '제품보기
';
                        }
                        elseif (qtranxf_getLanguage() == 'zh')
                        {
                            echo '查看产品';
                        }
                        elseif (qtranxf_getLanguage() == 'ja')
                        {
                            echo '製品を見る';
                        }
                        else{
                            echo 'View Product';
                        }
                    ?>
                </h1>
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

                        $maracanh = get_field('maracanh');
                        ?>
                        <div class="row">
                            <div class="large-6 col">
                                <div class="wapper_button" id="wapper_button">
                                    <button id="live_mattruoc" class="button_view">Customize front</button>
                                    <button id="live_matsau" class="button_view">Customize behind</button>
                                </div>

                                <br>
<!--                                load data mat truoc-->
                                <div id="load_data_mattruoc" style="display: none" >
                                    <?php
                                    //start hair
//                                    if ($maracanh['mattruoc']['hair']['image1']!= NULL || $maracanh['mattruoc']['hair']['image2']!= NULL || $maracanh['mattruoc']['hair']['image3']!= NULL)
//                                    {
//                                        echo '<h3>Tóc</h3>';
//                                        echo '<ul>';
//                                        foreach( $maracanh['mattruoc']['hair'] as $image ):
//                                            if ($image['url'] != null){
//                                            ?>
<!--                                            <li><img src="--><?php //echo $image["url"] ?><!--" alt=""></li>-->
<!--<!--                                            <li><input type=button id=myCheck class=hair data-link="-->--><?php ////echo $image["url"] ?><!--<!--" value="-->--><?php ////echo $image["name"] ?><!--<!--" </li>-->-->
<!---->
<!--                                        --><?php //}
//                                        endforeach;
//                                        echo '</ul>';
//                                        $total = 1;
//                                    }
                                    //end hair

                                    echo '<h3>Trang phục</h3>';

                                    echo '<select name="dress" id="dress">
                                        <option value="">Chọn</option>
                                        <option value="s">S</option>
                                        <option value="m">M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>
                                    </select>';

//                                    echo '<ul>';
//                                    if ($maracanh['mattruoc']['dress']['s']['image1']!= NULL || $maracanh['mattruoc']['dress']['s']['image2']!= NULL || $maracanh['mattruoc']['dress']['s']['image3']!= NULL)
//                                    {
//                                        foreach( $maracanh['mattruoc']['dress']['s'] as $image ):
//                                            if ($image['url'] != null){
//                                                ?>
<!--                                                    <li><input type=button id=myCheck class=dress data-link="--><?php //echo $image["url"] ?><!--" value="--><?php //echo $image["name"] ?><!--" </li>-->
<!--                                                --><?php
//                                            }
//
//                                        endforeach;
//                                        $total = 1;
//                                    }
//
//                                    if ($maracanh['mattruoc']['dress']['m']['image1']!= NULL || $maracanh['mattruoc']['dress']['m']['image2']!= NULL || $maracanh['mattruoc']['dress']['m']['image3']!= NULL)
//                                    {
//                                        echo '<h3>Dress</h3>';
//                                        echo '<ul>';
//                                        foreach( $maracanh['mattruoc']['dress']['m'] as $image ):
//                                            if ($image['url'] != null){
//                                                ?>
<!--                                                <li><input type=button id=myCheck class=dress data-link="--><?php //echo $image["url"] ?><!--" value="--><?php //echo $image["name"] ?><!--" </li>-->
<!--                                                --><?php
//                                            }
//
//                                        endforeach;
//                                        echo '</ul>';
//                                        $total = 1;
//                                    }
//
//                                    if ($maracanh['mattruoc']['dress']['l']['image1']!= NULL || $maracanh['mattruoc']['dress']['l']['image2']!= NULL || $maracanh['mattruoc']['dress']['l']['image3']!= NULL)
//                                    {
//                                        echo '<h3>Dress</h3>';
//                                        echo '<ul>';
//                                        foreach( $maracanh['mattruoc']['dress']['l'] as $image ):
//                                            if ($image['url'] != null){
//                                                ?>
<!--                                                <li><input type=button id=myCheck class=dress data-link="--><?php //echo $image["url"] ?><!--" value="--><?php //echo $image["name"] ?><!--" </li>-->
<!--                                                --><?php
//                                            }
//
//                                        endforeach;
//                                        echo '</ul>';
//                                        $total = 1;
//                                    }
//
//                                    if ($maracanh['mattruoc']['dress']['xl']['image1']!= NULL || $maracanh['mattruoc']['dress']['xl']['image2']!= NULL || $maracanh['mattruoc']['dress']['xl']['image3']!= NULL)
//                                    {
//                                        echo '<h3>Dress</h3>';
//                                        echo '<ul>';
//                                        foreach( $maracanh['mattruoc']['dress']['xl'] as $image ):
//                                            if ($image['url'] != null){
//                                                ?>
<!--                                                <li><input type=button id=myCheck class=dress data-link="--><?php //echo $image["url"] ?><!--" value="--><?php //echo $image["name"] ?><!--" </li>-->
<!--                                                --><?php
//                                            }
//
//                                        endforeach;
//                                        echo '</ul>';
//                                        $total = 1;
//                                    }
//                                    echo '<ul>'; // end Dress
                                    // load maracanh

                                    if ($total == 0)
                                    {
                                        echo '<h5>No data front</h5>';
                                    }
                                    ?>
                                </div>
<!--                                end load data mat truoc-->

                                <div id="load_data_matsau" style="display: none" >
                                    sau
                                </div>

                            </div>

                            <div class="large-6 col">
<!--                                <div id="load_maracanh">-->
<!--                                        <div class="manocanh_mattruoc" style="display: none" >-->
<!--                                            <canvas id = "viewport" width = "100px" height = "87px" ></canvas >-->
<!--                                            <canvas id = "vay" width = "120px" height = "229px" ></canvas >-->
<!---->
<!--                                        </div >-->
<!---->
<!---->
<!--                                    <div class="manocanh_matsau" style="display: none">-->
<!--                                        <canvas id = "viewport_sau" width = "100px" height = "87px" ></canvas >-->
<!--                                        <canvas id = "vay_sau" width = "120px" height = "229px" ></canvas >-->
<!---->
<!--                                    </div >-->
<!--                                </div>-->
                            </div>
                        </div>


                    <?php endwhile;
                    wp_reset_postdata();
                else:
                    _e( 'No Products' );
                endif;
                ?>

            </div>
        </div>
    </div>
</div>


<style>

</style>



<script>
    jQuery(document).ready(function($){
        // bat su kien click live mat truoc cho hien demo
        $('#live_mattruoc').on('click', function () {
            $('#load_data_matsau').attr('style','display: none');
            $('#load_data_mattruoc').attr('style','display: block');


        });

        $('#live_matsau').on('click', function () {
            $('#load_data_mattruoc').attr('style','display: none');
            $('#load_data_matsau').attr('style','display: block');

        });

        // Script maracanh mat truoc
        /*-------------------- maracanh mat truoc --------------------*/


        /*-------------------- end maracanh mat sau --------------------*/
    });

</script>
<?php get_footer();?>



