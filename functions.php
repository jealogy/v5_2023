<?php 
add_theme_support( 'post-thumbnails' );

function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );
add_filter( 'big_image_size_threshold', '__return_false' );

add_filter( 'wp_insert_post_data', function( $data, $postarr ) {
if ( ! empty( $data['post_content'] ) ) {
    $data['post_content'] = wp_encode_emoji( $data['post_content'] );
}
return $data;
}, 99, 2 );


function comments_callback( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	?>
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<div class="comment_meta"><div class="name"><?php comment_author(); ?>
				</div>
				<div class="date"><?php comment_date('n-j-Y'); ?></div>
			<p><?php comment_text(); ?></p>
			<p>
				<strong><?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply to this?', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></strong></p>
			</div>
		</article>
<?php
}

function shapeSpace_block_proxy_visits() {

if (@fsockopen($_SERVER['REMOTE_ADDR'], 80, $errstr, $errno, 1)) {

die('Access to this website via proxy is not allowed'); } } add_action('after_setup_theme',

'shapeSpace_block_proxy_visits');

?>
