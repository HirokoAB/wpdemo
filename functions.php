<?php

////////////////////////////////////////
//CSS/JSをheader/footerに読み込むコード///
////////////////////////////////////////

//add_action( 'wp_enquence_scripts' , function(){

//登録して出力キューに追加
    //wp_enquence_script( 'my-main',
    //get_template_directory_uri().'/js/app.js'
//);

//});


//header画像投稿の設定のためのファンクション
	$defaults = array(
	'default-image'         => get_template_directory_uri() . '/img/visual_2_pc.png', //デフォルト画像
	'random-default'         => false, //ランダム表示
	'width'                  => 1165, //幅
	'height'                 => 400, //高さ
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

//////////////////////////////////////////
//////画像を任意の大きさで切り取る設定//////
/////////////////////////////////////////

function add_custom_image_sizes() {
    global $my_custom_image_sizes;
    $my_custom_image_sizes = array(
        'original_thumb_crop' => array(
            'name'       => 'footer切り抜き', // 選択肢のラベル名
            'width'      => 300,    // 最大画像幅をpxで設定
            'height'     => 100,    // 最大画像高さをpxで設定	
            'crop'       => true,  // 切り抜きを行うならtrue, 行わないならfalse
            'selectable' => true   // 選択肢に含めるならtrue, 含めないならfalse
        )
    );
    foreach ( $my_custom_image_sizes as $slug => $size ) {
        add_image_size( $slug, $size['width'], $size['height'], $size['crop'] );
    }
}
add_action( 'after_setup_theme', 'add_custom_image_sizes' );

function add_custom_image_size_select( $size_names ) {
    global $my_custom_image_sizes;
    $custom_sizes = get_intermediate_image_sizes();
    foreach ( $custom_sizes as $custom_size ) {
        if ( isset( $my_custom_image_sizes[$custom_size]['selectable'] ) && $my_custom_image_sizes[$custom_size]['selectable'] ) {
            $size_names[$custom_size] = $my_custom_image_sizes[$custom_size]['name'];
        }
    }
    return $size_names;
}
add_filter( 'image_size_names_choose', 'add_custom_image_size_select' );




//////////////////////////////////////////
//////カスタム投稿タイプのUIに関する記述//////
/////////////////////////////////////////


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
		"rewrite" => array( "slug" => "infomation", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "infomation", $args );
}
 add_action( 'init', 'cptui_register_my_cpts_infomation' );


	function cptui_register_my_cpts_slider() {

	/**
	 * Post Type: スライダー画像の新規投稿.
	 */

	$labels = array(
		"name" => __( "スライダー画像の新規投稿", "custom-post-type-ui" ),
		"singular_name" => __( "スライダー画像の新規投稿", "custom-post-type-ui" ),
		"menu_name" => __( "スライダーの","\n","画像変更", "custom-post-type-ui" ),
		"all_items" => __( "スライダー一覧", "custom-post-type-ui" ),
		"add_new_item" => __( "スライダー新規追加", "custom-post-type-ui" ),
		"new_item" => __( "新規スライダー", "custom-post-type-ui" ),
		"view_item" => __( "一覧を表示", "custom-post-type-ui" ),
		"search_items" => __( "スライダー投稿画像の検索", "custom-post-type-ui" ),
		"not_found" => __( "画像の投稿はまだありません", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "ゴミ箱内には何もありません", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "スライダー画像の新規投稿", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "TOP画面のスライダー画像を変更するためのUI",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "slider", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "revisions" ),
	);

	register_post_type( "slider", $args );
}

add_action( 'init', 'cptui_register_my_cpts_slider' );


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




$parent_term_id = $parent_term[ '43' ]; // ターム ID（数値）を取得
wp_insert_term(
  '商品入荷のお知らせ', // ターム名
  'お知らせ', // タクソノミー
  array(
    'description'=> 'Inform from Staff.',
    'parent'=> $parent_term_id
  )
);


////////////////////////////////////////
//////footer menu追加に関するコード///////
////////////////////////////////////////

register_nav_menu( 'footer-menu' , 'フッターメニュー' );




//////////////////////////////////////////
//////ウィジェットに追加に関するコード///////
/////////////////////////////////////////

if (function_exists('register_sidebar')) {
 register_sidebar(array(
 'name' => 'サイドバー1',
 'id' => 'sidebar1',
 "before_widget" => '<div class="%2$s">',
 'after_widget' => '</div>',
 'before_title' => '<h3 class="widgettitle">',
 'after_title' => '</h3>'
 ));
}


if (function_exists('register_sidebar')) {
 register_sidebar(array(
 'name' => 'サイドバー2',
 'id' => 'sidebar2',
 "before_widget" => '<div class="%2$s">',
 'after_widget' => '</div>',
 'before_title' => '<h3 class="widgettitle">',
 'after_title' => '</h3>'
 ));
}

if (function_exists('register_sidebar')) {
 register_sidebar(array(
 'name' => 'フッターバ-1',
 'id' => 'footer1',
 "before_widget" => '<li class="%2$s">',
 'after_widget' => '</li>',
 'before_title' => '<h3 class="widgettitle">',
 'after_title' => '</h3>'
 ));
}

function twp_setup_theme(){
	//サムネイル画像を表示させるPHP
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 300, 300, false);
}
add_action( 'after_setup_theme', 'twp_setup_theme' );


//////////////////////////////////////////
/////////////パンくずリスト////////////////
/////////////////////////////////////////
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




//////////////////////////////////////////
//////////コードで呼び出すための定義/////////
/////////////////////////////////////////

define(' PAGE_SLIDE ' , 298 );


//ショートコードを使ったphpファイルの呼び出し方法
function show_contact_form() {
  ob_start();
  get_template_part( 'single' , 'slider' ); // partials/contact.phpの内容が表示される
  return ob_get_clean();
}
add_shortcode('slider', 'show_contact_form');


//////////////////////////////////////////
////////////  archiveの文字数 /////////////
/////////////////////////////////////////


function cus_excerpt_length($length){
	return 80;
}
add_filter(' excerpt_length ' , 'cus_excerpt_length' );


//////////////////////////////////////////
//////////  記事一覧の続きの表示　　/////////
/////////////////////////////////////////

function new_excerpt_more($more){
    global $post;
    return '...';
}
add_filter('excerpt_more','new_excerpt_more',9999);


//////////////////////////////////////////
////  wp_head()吐き出しコードの調整　///////
/////////////////////////////////////////


remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

//////////////////////////////////////////
////  contact form 7のjsとcssを停止　//////
/////////////////////////////////////////

function my_remove_cf7_js_css() {

    add_filter( 'wpcf7_load_js', '__return_false' );
    add_filter( 'wpcf7_load_css', '__return_false' );

}
add_action( 'after_setup_theme', 'my_remove_cf7_js_css' );

//////////////////////////////////////////
// contact form 7のjsとcssを読み込み　/////
/////////////////////////////////////////

/**
 *    contact form 7のjsとcssを読み込み
 */
function my_enable_cf7_js_css() {
  /**
   * スラッグが「contact」のページだけ読み込み
   */
    if( is_page( 'ask' )  ) {
        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
        }

    }
}
add_action( 'wp_enqueue_scripts', 'my_enable_cf7_js_css' );




//////////////////////////////////////////
/////////  パンくずリストの表示  ///////////
/////////////////////////////////////////

if ( ! function_exists( 'custom_breadcrumb' ) ) {
    function custom_breadcrumb( $wp_obj = null ) {

        // トップページでは何も出力しない
        if ( is_home() || is_front_page() ) return false;

        //そのページのWPオブジェクトを取得
        $wp_obj = $wp_obj ?: get_queried_object();

        echo '<div id="breadcrumb">'.  //id名などは任意で
                '<ul>'.
                    '<li>'.
                        '<a href="'. home_url() .'"><span>ホーム</span></a>'.
                    '</li>';

        if ( is_attachment() ) {

            /**
             * 添付ファイルページ ( $wp_obj : WP_Post )
             * ※ 添付ファイルページでは is_single() も true になるので先に分岐
             */
            echo '<li><span>'. $wp_obj->post_title .'</span></li>';

        } elseif ( is_single() ) {

            /**
             * 投稿ページ ( $wp_obj : WP_Post )
             */
            $post_id    = $wp_obj->ID;
            $post_type  = $wp_obj->post_type;
            $post_title = $wp_obj->post_title;

            // カスタム投稿タイプかどうか
            if ( $post_type !== 'post' ) {

                $the_tax = "";  //そのサイトに合わせ、投稿タイプごとに分岐させて明示的に指定してもよい

                // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
                $tax_array = get_object_taxonomies( $post_type, 'names');
                foreach ($tax_array as $tax_name) {
                    if ( $tax_name !== 'post_format' ) {
                        $the_tax = $tax_name;
                        break;
                    }
                }

                //カスタム投稿タイプ名の表示
                echo '<li>'.
                        '<a href="'. get_post_type_archive_link( $post_type ) .'">'.
                            '<span>'. get_post_type_object( $post_type )->label .'</span>'.
                        '</a>'.
                     '</li>';

            } else {
                $the_tax = 'category';  //通常の投稿の場合、カテゴリーを表示
            }

            // タクソノミーが紐づいていれば表示
            if ( $the_tax !== "" ) {

                $child_terms = array();   // 子を持たないタームだけを集める配列
                $parents_list = array();  // 子を持つタームだけを集める配列

                // 投稿に紐づくタームを全て取得
                $terms = get_the_terms( $post_id, $the_tax );

                if ( !empty( $terms ) ) {

                    //全タームの親IDを取得
                    foreach ( $terms as $term ) {
                        if ( $term->parent !== 0 ) $parents_list[] = $term->parent;
                    }

                    //親リストに含まれないタームのみ取得
                    foreach ( $terms as $term ) {
                        if ( ! in_array( $term->term_id, $parents_list ) ) $child_terms[] = $term;
                    }

                    // 最下層のターム配列から一つだけ取得
                    $term = $child_terms[0];

                    if ( $term->parent !== 0 ) {

                        // 親タームのIDリストを取得
                        $parent_array = array_reverse( get_ancestors( $term->term_id, $the_tax ) );

                        foreach ( $parent_array as $parent_id ) {
                            $parent_term = get_term( $parent_id, $the_tax );
                            echo '<li>'.
                                    '<a href="'. get_term_link( $parent_id, $the_tax ) .'">'.
                                      '<span>'. $parent_term->name .'</span>'.
                                    '</a>'.
                                 '</li>';
                        }
                    }

                    // 最下層のタームを表示
                    echo '<li>'.
                            '<a href="'. get_term_link( $term->term_id, $the_tax ). '">'.
                              '<span>'. $term->name .'</span>'.
                            '</a>'.
                         '</li>';
                }
            }

            // 投稿自身の表示
            echo '<li><span>'. $post_title .'</span></li>';

        } elseif ( is_page() ) {

            /**
             * 固定ページ ( $wp_obj : WP_Post )
             */
            $page_id    = $wp_obj->ID;
            $page_title = $wp_obj->post_title;

            // 親ページがあれば順番に表示
            if ( $wp_obj->post_parent !== 0 ) {
                $parent_array = array_reverse( get_post_ancestors( $page_id ) );
                foreach( $parent_array as $parent_id ) {
                    echo '<li>'.
                            '<a href="'. get_permalink( $parent_id ).'">'.
                                '<span>'.get_the_title( $parent_id ).'</span>'.
                            '</a>'.
                         '</li>';
                }
            }
            // 投稿自身の表示
            echo '<li><span>'. $page_title .'</span></li>';

        } elseif ( is_post_type_archive() ) {

            /**
             * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
             */
            echo '<li><span>'. $wp_obj->label .'</span></li>';

        } elseif ( is_date() ) {

            /**
             * 日付アーカイブ ( $wp_obj : null )
             */
            $year  = get_query_var('year');
            $month = get_query_var('monthnum');
            $day   = get_query_var('day');

            if ( $day !== 0 ) {
                //日別アーカイブ
                echo '<li><a href="'. get_year_link( $year ).'"><span>'. $year .'年</span></a></li>'.
                     '<li><a href="'. get_month_link( $year, $month ). '"><span>'. $month .'月</span></a></li>'.
                     '<li><span>'. $day .'日</span></li>';

            } elseif ( $month !== 0 ) {
                //月別アーカイブ
                echo '<li><a href="'. get_year_link( $year ).'"><span>'.$year.'年</span></a></li>'.
                     '<li><span>'.$month . '月</span></li>';

            } else {
                //年別アーカイブ
                echo '<li><span>'.$year.'年</span></li>';

            }

        } elseif ( is_author() ) {

            /**
             * 投稿者アーカイブ ( $wp_obj : WP_User )
             */
            echo '<li><span>'. $wp_obj->display_name .' の執筆記事</span></li>';

        } elseif ( is_archive() ) {

            /**
             * タームアーカイブ ( $wp_obj : WP_Term )
             */
            $term_id   = $wp_obj->term_id;
            $term_name = $wp_obj->name;
            $tax_name  = $wp_obj->taxonomy;

            /* ここでタクソノミーに紐づくカスタム投稿タイプを出力しても良いでしょう。 */

            // 親ページがあれば順番に表示
            if ( $wp_obj->parent !== 0 ) {

                $parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
                foreach( $parent_array as $parent_id ) {
                    $parent_term = get_term( $parent_id, $tax_name );
                    echo '<li>'.
                            '<a href="'. get_term_link( $parent_id, $tax_name ) .'">'.
                                '<span>'. $parent_term->name .'</span>'.
                            '</a>'.
                         '</li>';
                }
            }

            // ターム自身の表示
            echo '<li>'.
                    '<span>'. $term_name .'</span>'.
                '</li>';


        } elseif ( is_search() ) {

            /**
             * 検索結果ページ
             */
            echo '<li><span>「'. get_search_query() .'」で検索した結果</span></li>';

        
        } elseif ( is_404() ) {

            /**
             * 404ページ
             */
            echo '<li><span>お探しの記事は見つかりませんでした。</span></li>';

        } else {

            /**
             * その他のページ（無いと思うが一応）
             */
            echo '<li><span>'. get_the_title() .'</span></li>';
        }

        echo '</ul></div>';  // 冒頭に合わせて閉じタグ

    }
}















?>
