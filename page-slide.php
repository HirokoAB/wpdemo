

          <?php $meta = get_post_meta( get_the_ID() ); ?>
          <?php var_dump( $meta ); ?>
<?php 
$value = get_post_meta( get_the_ID(), 'slider1' , true )
;?>
<img src="<?php echo ( $value ); ?>">

<?php var_dump ( $value );   ?>





<?php
$postid = $post -> ID;
 
    $args = array(
    'numberposts' => -1,//取得件数（初期値は5件、-1で全添付を取得）
  'order' => 'ASC',//並び順
  'orderby' => 'menu_order',//並び順の規準
        'post_type' => 'attachment',//取得種類（この指定で添付を取得できる）
        'post_mime_type' => 'image',//取得種類（この指定で添付の種類ギャラリーを取得できる）
        //'post_mime_type' => 'application/pdf',//PDFファイル
        //'post_mime_type' => 'audio',//audioファイル
        //'post_mime_type' => 'video',//videoファイル
        //'post_mime_type' => 'application/msword',//wordファイル
        //'post_mime_type' => 'application/doc',//wordファイル
        'post_parent' => $postid//帰属する投稿ID
    );
    $attachments = get_posts( $args );
 
    if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
 
            $imgtag = wp_get_attachment_image( $attachment->ID, 'thumbnail' );//thumbnail, medium, large, full
            $img = wp_get_attachment_image_src( $attachment->ID, 'thumbnail' );//thumbnail, medium, large, full
            $imgURL = $img[0];//取得したイメージのURL
            $imgWidth = $img[1];//取得したイメージの幅
            $imgHeight = $img[2];//取得したイメージの高さ
 
            $ID = $attachment->ID;//添付ID
            $post_author = $attachment->post_author;//投稿者ID
            $post_content = $attachment->post_content;//「説明」
            $post_title = $attachment->post_title;//「タイトル」初期値はファイル名
            $post_excerpt = $attachment->post_excerpt;//「キャプション」
            $post_parent = $attachment->post_parent;//帰属する投稿ID
            $guid = $attachment->guid;//オリジナル画像のURL
 
        }
    }

    var_dump($guid);
    var_dump($imgURL);
?>

































<!-- if ( $value ){
  echo $value;
} ?>

 -->






