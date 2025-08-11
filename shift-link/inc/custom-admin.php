<?php
// ==========================================================================
// コメントの無効化
// ==========================================================================
function comment_status_none( $open, $post_id ) {
    $post = get_post( $post_id );
    //投稿のコメントを投稿できないようにします
    if( $post->post_type == 'post' ) {
        return false;
    }
    //固定ページのコメントを投稿できないようにします
    if( $post->post_type == 'page' ) {
        return false;
    }
    //メディアのコメントを投稿できないようにします
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return false;
}

add_filter( 'comments_open', 'comment_status_none', 10 , 2 );
function remove_menus() {
    remove_menu_page( 'edit-comments.php' ); // コメント
  }
  add_action( 'admin_menu', 'remove_menus', 999 );