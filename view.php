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

                                    echo '<h3>Trang phục</h3>';

                                    echo '<select name="dress" id="dress">
                                        <option value="">Chọn</option>
                                        <option value="s">S</option>
                                        <option value="m">M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>
                                    </select>';

                                    //echo '<pre>';
                                    //print_r($maracanh['mattruoc']['hair']);
                                    //echo '</pre>';
                                    if ($maracanh['mattruoc']['dress']['s']['image1']!= NULL || $maracanh['mattruoc']['dress']['s']['image2']!= NULL || $maracanh['mattruoc']['dress']['s']['image3']!= NULL)
                                    {
                                        echo '<ul class="maracanh_dress_s maracanh_dress" style="display: none">';
                                        foreach( $maracanh['mattruoc']['dress']['s'] as $image ):
                                            if ($image['url'] != null){
                                                ?>
                                                <li data-link="<?php echo $image["url"] ?>" style="display: inline-block"><img src="<?php echo $image["url"] ?>" alt=""></li>
                                            <?php }
                                        endforeach;
                                        echo '</ul>';
                                        $total = 1;
                                    }

                                    if ($maracanh['mattruoc']['dress']['m']['image1']!= NULL || $maracanh['mattruoc']['dress']['m']['image2']!= NULL || $maracanh['mattruoc']['dress']['m']['image3']!= NULL)
                                    {
                                        echo '<ul class="maracanh_dress_m maracanh_dress" style="display: none">';
                                        foreach( $maracanh['mattruoc']['dress']['m'] as $image ):
                                            if ($image['url'] != null){
                                                ?>
                                                <li data-link="<?php echo $image["url"] ?>" style="display: inline-block"><img src="<?php echo $image["url"] ?>" alt=""></li>
                                            <?php }
                                        endforeach;
                                        echo '</ul>';
                                        $total = 1;
                                    }
                                    if ($maracanh['mattruoc']['dress']['l']['image1']!= NULL || $maracanh['mattruoc']['dress']['l']['image2']!= NULL || $maracanh['mattruoc']['dress']['l']['image3']!= NULL)
                                    {
                                        echo '<ul class="maracanh_dress_l maracanh_dress" style="display: none">';
                                        foreach( $maracanh['mattruoc']['dress']['l'] as $image ):
                                            if ($image['url'] != null){
                                                ?>
                                                <li data-link="<?php echo $image["url"] ?>" style="display: inline-block"><img src="<?php echo $image["url"] ?>" alt=""></li>
                                            <?php }
                                        endforeach;
                                        echo '</ul>';
                                        $total = 1;
                                    }
                                    if ($maracanh['mattruoc']['dress']['xl']['image1']!= NULL || $maracanh['mattruoc']['dress']['xl']['image2']!= NULL || $maracanh['mattruoc']['dress']['xl']['image3']!= NULL)
                                    {
                                        echo '<ul class="maracanh_dress_xl maracanh_dress" style="display: none">';
                                        foreach( $maracanh['mattruoc']['dress']['xl'] as $image ):
                                            if ($image['url'] != null){
                                                ?>
                                                <li data-link="<?php echo $image["url"] ?>" style="display: inline-block"><img src="<?php echo $image["url"] ?>" alt=""></li>
                                            <?php }
                                        endforeach;
                                        echo '</ul>';
                                        $total = 1;
                                    }
                                    // load maracanh

                                    if ($total == 0)
                                    {
                                        echo '<h5>No data front</h5>';
                                    }
                                    else{
                                        //start hair
                                        if ($maracanh['mattruoc']['hair']['image1']!= NULL || $maracanh['mattruoc']['hair']['image2']!= NULL || $maracanh['mattruoc']['hair']['image3']!= NULL)
                                        {
                                            echo '<div class="wap_toc" style="display: none">';
                                            echo '<h3>Tóc</h3>';
                                            echo '<ul class="maracanh_toc">';
                                            foreach( $maracanh['mattruoc']['hair'] as $image ):
                                                if ($image['url'] != null){
                                                    ?>
                                                    <li data-link="<?php echo $image["url"] ?>" data-name="<?php echo $image["name"] ?>" style="display: inline-block"><img src="<?php echo $image["url"] ?>" alt=""></li>
                                                    <!--                                            <li><input type=button id=myCheck class=hair data-link="--><?php //echo $image["url"] ?><!--" value="--><?php //echo $image["name"] ?><!--" </li>-->

                                                <?php }
                                            endforeach;
                                            echo '</ul>';
                                            echo '</div>';
                                        }
                                        //end hair
                                    }
                                    ?>
                                </div>
<!--                                end load data mat truoc-->

                                <div id="load_data_matsau" style="display: none" >
                                    <?php
                                    echo '<h3>Trang phục</h3>';

                                    echo '<select name="dress" id="dress_sau">
                                        <option value="">Chọn</option>
                                        <option value="s">S</option>
                                        <option value="m">M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>
                                    </select>';

                                    //echo '<pre>';
                                    //print_r($maracanh['mattruoc']['hair']);
                                    //echo '</pre>';
                                    if ($maracanh['matsau']['dress']['s']['image1']!= NULL || $maracanh['matsau']['dress']['s']['image2']!= NULL || $maracanh['matsau']['dress']['s']['image3']!= NULL)
                                    {
                                        echo '<ul class="maracanh_dress_s maracanh_dress" style="display: none">';
                                        foreach( $maracanh['matsau']['dress']['s'] as $image ):
                                            if ($image['url'] != null){
                                                ?>
                                                <li data-link="<?php echo $image["url"] ?>" style="display: inline-block"><img src="<?php echo $image["url"] ?>" alt=""></li>
                                            <?php }
                                        endforeach;
                                        echo '</ul>';
                                        $total = 1;
                                    }
                                    if ($maracanh['matsau']['dress']['m']['image1']!= NULL || $maracanh['matsau']['dress']['m']['image2']!= NULL || $maracanh['matsau']['dress']['m']['image3']!= NULL)
                                    {
                                        echo '<ul class="maracanh_dress_m maracanh_dress" style="display: none">';
                                        foreach( $maracanh['matsau']['dress']['m'] as $image ):
                                            if ($image['url'] != null){
                                                ?>
                                                <li data-link="<?php echo $image["url"] ?>" style="display: inline-block"><img src="<?php echo $image["url"] ?>" alt=""></li>
                                            <?php }
                                        endforeach;
                                        echo '</ul>';
                                        $total = 1;
                                    }
                                    if ($maracanh['matsau']['dress']['l']['image1']!= NULL || $maracanh['matsau']['dress']['l']['image2']!= NULL || $maracanh['matsau']['dress']['l']['image3']!= NULL)
                                    {
                                        echo '<ul class="maracanh_dress_l maracanh_dress" style="display: none">';
                                        foreach( $maracanh['matsau']['dress']['l'] as $image ):
                                            if ($image['url'] != null){
                                                ?>
                                                <li data-link="<?php echo $image["url"] ?>" style="display: inline-block"><img src="<?php echo $image["url"] ?>" alt=""></li>
                                            <?php }
                                        endforeach;
                                        echo '</ul>';
                                        $total = 1;
                                    }
                                    if ($maracanh['matsau']['dress']['xl']['image1']!= NULL || $maracanh['matsau']['dress']['xl']['image2']!= NULL || $maracanh['matsau']['dress']['xl']['image3']!= NULL)
                                    {
                                        echo '<ul class="maracanh_dress_xl maracanh_dress" style="display: none">';
                                        foreach( $maracanh['matsau']['dress']['xl'] as $image ):
                                            if ($image['url'] != null){
                                                ?>
                                                <li data-link="<?php echo $image["url"] ?>" style="display: inline-block"><img src="<?php echo $image["url"] ?>" alt=""></li>
                                            <?php }
                                        endforeach;
                                        echo '</ul>';
                                        $total = 1;
                                    }
                                    // load maracanh


                                    if ($total == 0)
                                    {
                                        echo '<h5>No data behind</h5>';
                                    }
                                    else{
                                        //start hair
                                        if ($maracanh['matsau']['hair']['image1']!= NULL || $maracanh['matsau']['hair']['image2']!= NULL || $maracanh['matsau']['hair']['image3']!= NULL)
                                        {
                                            echo '<div class="wap_toc" style="display: none">';
                                            echo '<h3>Tóc</h3>';
                                            echo '<ul class="maracanh_toc">';
                                            foreach( $maracanh['matsau']['hair'] as $image ):
                                                if ($image['url'] != null){
                                                    ?>
                                                    <li data-link="<?php echo $image["url"] ?>" data-name="<?php echo $image["name"] ?>" style="display: inline-block"><img src="<?php echo $image["url"] ?>" alt=""></li>
                                                    <!--                                            <li><input type=button id=myCheck class=hair data-link="--><?php //echo $image["url"] ?><!--" value="--><?php //echo $image["name"] ?><!--" </li>-->

                                                <?php }
                                            endforeach;
                                            echo '</ul>';
                                            echo '</div>';
                                            $total = 1;
                                        }
                                        //end hair
                                    }
                                    ?>
                                </div>

                            </div>


<!--                            Show-->
                            <div class="large-6 col">
                                <div id="load_maracanh">
                                    <div class="wapper_maracanh"  >
                                        <div class="toc"></div>
                                        <div class="trangphuc"></div>
                                    </div >
                                </div>
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


<script>
    jQuery(document).ready(function($){
       // bat su kien click live mat truoc cho hien demo
        var eventsHanler = {
            init: function () {
                eventsHanler.registerEvent();
            },
            registerEvent: function () {
                $('#live_mattruoc').on('click', function () {
                    $('#load_data_matsau').attr('style', 'display: none');
                    $('#load_data_mattruoc').attr('style', 'display: block');
                });
                $('#live_matsau').on('click', function () {
                    $('#load_data_mattruoc').attr('style', 'display: none');
                    $('#load_data_matsau').attr('style', 'display: block');

                });
                // bat su kien onchange Dress cho hien demo
                $('select#dress').on('change', function (e) {
                    //var optionSelected = $("option:selected", this);
                    var valueSelected = this.value;

                    if (valueSelected != '') {
                        $('.maracanh_dress').attr('style', 'display:none');
                        $('.wap_toc').attr('style','display:block');
                        $('.maracanh_dress_' + valueSelected).attr('style', 'display:block');
                    }
                    else {
                        $('.maracanh_dress').attr('style', 'display:none');
                        $('.wap_toc').attr('style','display:none');
                    }
                });

                $('select#dress_sau').on('change', function (e) {
                    //var optionSelected = $("option:selected", this);
                    var valueSelected = this.value;

                    if (valueSelected != '') {
                        $('.maracanh_dress').attr('style', 'display:none');
                        $('.maracanh_dress_' + valueSelected).attr('style', 'display:block');
                    }
                    else {
                        $('.maracanh_dress').attr('style', 'display:none');
                    }
                });


                // click dress
                $('.maracanh_dress li').off('click').on('click', function(){
                    var __this = $(this);
                    var link_img = __this.attr('data-link');
                    //alert(link_img);

                    $('.wapper_maracanh').attr('style','display:block');
                    $('.wapper_maracanh .trangphuc').attr('style', '');
                    $('.wapper_maracanh .trangphuc').css({
                        'background': 'url(' + link_img + ') no-repeat',
                        'background-size': 'cover'
                    });
                });

                //click toc
                $('.maracanh_toc li').off('click').on('click', function(){
                    var ___this = $(this);
                    var link_img_toc = ___this.attr('data-link');
                    //alert(link_img_toc);

                    $('.wapper_maracanh').attr('style','display:block');
                    $('#load_maracanh .wapper_maracanh .toc').css({
                        'background': 'url(' + link_img_toc + ') no-repeat',
                        'background-size': 'cover'
                    });
                });
            }
        }
        eventsHanler.init();
        // Script maracanh mat truoc
        /*-------------------- maracanh mat truoc --------------------*/


        /*-------------------- end maracanh mat sau --------------------*/
    });
</script>
<?php get_footer();?>



