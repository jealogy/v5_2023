<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

	<?php if ( have_comments() ) : ?>
	
	<div class="col-md-12"/>
    <div class="item-single">
        <div class="comment"><h4>Comments on this post</h4></div>
        <div class="seperator" style="margin: 0 auto; float: none;"></div>
        

			<?php
				wp_list_comments( array( 'callback' => 'comments_callback' ) );
			?>

		<?php
			// Are there comments to navigate through?
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
			?>
		<nav class="navigation comment-navigation">
		<h1 class="screen-reader-text section-heading">
			<?php
			/* translators: Hidden accessibility text. */
			_e( 'Comment navigation', 'twentythirteen' );
			?>
		</h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentythirteen' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>
		

</div><!-- #comments -->
</div>

