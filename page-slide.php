<!-- 
<?php
$postid = $post -> ID;
 
    $args = array(
    'numberposts' => -1,//取得件数（初期値は5件、-1で全添付を取得）
  'order' => 'ASC',//並び順
  'orderby' => 'menu_order',//並び順の規準
        'post_type' => 'attachment',//取得種類（この指定で添付を取得できる）
        'post_mime_type' => 'image',//取得種類（この指定で添付の種類ギャラリーを取得できる）
        'post_parent' => $post//帰属する投稿ID
    );
    $attachments = get_posts( $args );
 
    if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
            $guid = $attachment->guid;//オリジナル画像のURL
 
        }
    }

    var_dump($guid);


?> -->

<!-- 

<img src="<?php echo ( $guid ) ;?> ">

<?php $custom_fields = get_post_custom( 298 ); ?>

<?php  var_dump($custom_fields);?> -->

<?php echo CFS()->get( 'slider2' ); ?>




























<!-- if ( $value ){
  echo $value;
} ?>

 -->






