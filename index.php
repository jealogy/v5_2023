<?php include("header.php");?>

		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
				?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
<div class="pagination p2">
			<?php the_posts_pagination( array(
    				'screen_reader_text' => ' ', 
    				'prev_text'          => __( '<', 'v5' ),
    				'next_text'          => __( '>', 'v5' ),
) );?>
</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
<?php include("footer.php");?>
