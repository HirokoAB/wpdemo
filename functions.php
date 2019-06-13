<?php

//header画像投稿の設定のためのファンクション
	$defaults = array(
	'default-image'         => get_template_directory_uri() . '/img/visual_2_pc.png', //デフォルト画像
	'random-default'         => false, //ランダム表示
	'width'                  => '1027', //幅
	'height'                 => '448', //高さ
	'flex-height'            => false, //フレキシブル対応（高さ）
	'flex-width'             => false, //フレキシブル対応（幅）
	'default-text-color'     => '', //デフォルトのテキストの色
	'header-text'            => true, //ヘッダー画像上にテキストを表示する
	'uploads'                => true, //ファイルアップロードを許可する
	'wp-head-callback'       => '', 
	'admin-head-callback'    => '', 
	'admin-preview-callback' => '', 
);


add_theme_support( 'custom-header', $defaults );


// 以下カスタム投稿タイプ追加の記述

function cptui_register_my_cpts_infomation() {

	/**
	 * Post Type: お知らせ.
	 */

	$labels = array(
		"name" => __( "お知らせ", "custom-post-type-ui" ),
		"singular_name" => __( "お知らせ", "custom-post-type-ui" ),
		"menu_name" => __( "お知らせ", "custom-post-type-ui" ),
		"all_items" => __( "お知らせ一覧", "custom-post-type-ui" ),
		"add_new" => __( "新規お知らせの作成", "custom-post-type-ui" ),
		"add_new_item" => __( "お知らせを新規追加", "custom-post-type-ui" ),
		"edit_item" => __( "お知らせの内容", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "お知らせ", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "お知らせ一覧の為の投稿タイプ",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "info_archive",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "info", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "infomation", $args );
}

add_action( 'init', 'cptui_register_my_cpts_infomation' );
function cptui_register_my_taxes_info() {

	/**
	 * Taxonomy: お知らせ.
	 */

	$labels = array(
		"name" => __( "お知らせ", "custom-post-type-ui" ),
		"singular_name" => __( "お知らせ", "custom-post-type-ui" ),
		"menu_name" => __( "お知らせ", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "お知らせ", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'info', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "info",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "info", array( "infomation" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes_info' );

//////////////////////////////////////////
//////ウィジェットに追加に関するコード///////あ
/////////////////////////////////////////



function twp_setup_theme(){
	//サムネイル画像を表示させるPHP
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 300, 300, false);
}
add_action( 'after_setup_theme', 'twp_setup_theme' );



//////////////////////////////////////////
//////ウィジェットに追加に関するコード///////
/////////////////////////////////////////




/////////////////////////
//////パンクスリスト///////
/////////////////////////
function breadcrumb(){
    global $post;
    $str ='';
    if(!is_home()&&!is_admin()){
        $str.= '<div id="breadcrumb" class="cf"><div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;">';
        $str.= '<a href="'. home_url() .'" itemprop="url"><span itemprop="title">ホーム</span></a> &gt;&#160;</div>';
        if(is_category()) {
            $cat = get_queried_object();
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                foreach($ancestors as $ancestor){
$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($ancestor) .'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor) .'</span></a> &gt;&#160;</div>';
                }
            }
$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a> &gt;&#160;</div>';
        } elseif(is_page()){
            if($post -> post_parent != 0 ){
                $ancestors = array_reverse(get_post_ancestors( $post->ID ));
                foreach($ancestors as $ancestor){
                    $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_permalink($ancestor).'" itemprop="url"><span itemprop="title">'. get_the_title($ancestor) .'</span></a> &gt;&#160;</div>';
                }
            }
        } elseif(is_single()){
            $categories = get_the_category($post->ID);
            $cat = $categories[0];
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                foreach($ancestors as $ancestor){
                    $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($ancestor).'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor). '</span></a>→</div>';
                }
            }
            $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a> &gt;&#160;</div>';
        } else{
            $str.='<div>'. wp_title('', false) .'</div>';
        }
        $str.='</div>';
    }
    echo $str;
}


add_filter( 'jetpack_development_mode', '__return_true' );

/////////////////////////
//////Thankyou page///////
/////////////////////////












?>
