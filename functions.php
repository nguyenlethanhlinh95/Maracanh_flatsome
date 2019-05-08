<?php
include_once 'short_code.php';
// Add custom Theme Functions here
function chld_thm_cfg_parent_css() {
    //enqueue stylesheet
    wp_enqueue_style( 'main_css_Tito', get_theme_file_uri() . '/assets/css/mystyle_Tito.css' );
    wp_enqueue_style( 'main2_css_Tito', get_theme_file_uri() . '/assets/css/mystyle_Tito2.css' );
    wp_enqueue_style( 'hover-css', get_theme_file_uri() . '/assets/css/hover-min.css' );
    //enqueue script
    //wp_enqueue_script('jquery-1.11.1_js', get_theme_file_uri('/assets/js/jquery-1.11.1.min.js'), array('jquery'), 'v1.11.1',true);
    wp_enqueue_script('scripts', get_theme_file_uri('/assets/js/scripts.js'), array('jquery'), 'v1.0.0',true);
}
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
//hvr-shutter-out-horizontal


add_action( 'init', function () {
    add_ux_builder_post_type( 'custom_post_type' );
} );

/*-----------Register footer widget-----------*/

function footer_widgets_init() {
    register_sidebar( array(
        'name' => __( 'footer widget 1', 'bharat' ),
        'id' => 'sidebar-1',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'bharat' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'footer widget 2', 'bharat' ),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'bharat' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'footer widget 3', 'bharat' ),
        'id' => 'sidebar-3',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'bharat' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'footer widget 4', 'bharat' ),
        'id' => 'sidebar-4',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'bharat' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'footer copyright', 'bharat' ),
        'id' => 'sidebar-copyright',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'bharat' ),
        'before_widget' => '<aside id="%1$s" class="text-center widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


    register_sidebar( array(
        'name' => __( 'footer top icon 1', 'bharat' ),
        'id' => 'sidebar-icon1',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'bharat' ),
        'before_title' => '<p class="widget-title">',
        'after_title' => '</p>',
    ) );
    register_sidebar( array(
        'name' => __( 'footer top icon 2', 'bharat' ),
        'id' => 'sidebar-icon2',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'bharat' ),
        'before_title' => '<p class="widget-title">',
        'after_title' => '</p>',
    ) );
    register_sidebar( array(
        'name' => __( 'footer top icon 3', 'bharat' ),
        'id' => 'sidebar-icon3',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'bharat' ),
        'before_title' => '<p class="widget-title">',
        'after_title' => '</p>',
    ) );
    register_sidebar( array(
        'name' => __( 'footer top icon 4', 'bharat' ),
        'id' => 'sidebar-icon4',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'bharat' ),
        'before_title' => '<p class="widget-title">',
        'after_title' => '</p>',
    ) );
}
add_action( 'widgets_init', 'footer_widgets_init' );
/*-----------End Register footer widget-----------*/


/*-----------Change quick view-----------*/
function my_custom_translations( $strings ) {
    if (qtranxf_getLanguage() == 'vi'){
        $text = array(
            'Quick View' => 'Xem nhanh'
        );
    }
    if (qtranxf_getLanguage() == 'en'){
        $text = array(
            'Quick View' => 'Quick View'
        );
    }

    if (qtranxf_getLanguage() == 'zh'){
        $text = array(
            'Quick View' => '快速查看'
        );
    }

    if (qtranxf_getLanguage() == 'ja'){
        $text = array(
            'Quick View' => 'クイックビュー'
        );
    }

    if (qtranxf_getLanguage() == 'Th'){
        $text = array(
            'Quick View' => 'มุมมองด่วน
'
        );
    }

    if (qtranxf_getLanguage() == 'ko'){
        $text = array(
            'Quick View' => '퀵뷰
'
        );
    }

    $strings = str_ireplace( array_keys( $text ), $text, $strings );
    return $strings;
}
add_filter( 'gettext', 'my_custom_translations', 20 );

/*-----------End Change quick view-----------*/

function wpfi_change_text( $strings ) {
    if (qtranxf_getLanguage() == 'vi'){
        $text = array(
            'Read More' => 'Xem thêm'
        );
    }

    if (qtranxf_getLanguage() == 'en'){
        $text = array(
            'Read More' => 'Read More'
        );
    }

    $strings = str_ireplace( array_keys( $text ), $text, $strings );
    return $strings;
}
add_filter( 'gettext', 'wpfi_change_text', 21 );


/*-----------Change language fix English-----------*/


/*-----------End Change language fix English-----------*/

/*-----------Breadcrumb-----------*/
//function get_breadcrumb()
//{
//    ob_start();
//    if ( function_exists('yoast_breadcrumb') ) {
//        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
//    }
//    $content = ob_get_contents();
//    ob_clean();
//    ob_end_flush();
//    return $content;
//}
//
//add_shortcode('breadcrumb', 'get_breadcrumb');
/*-----------End Breadcrumb-----------*/

/*-----------Except-----------*/
function teaser($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'[...]';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt.'...';
}
/*-----------End Except-----------*/



if (!current_user_can('administrator')):
    show_admin_bar(false);
endif;




