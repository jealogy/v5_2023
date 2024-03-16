<?php include("header.php"); ?>
  <div class="item-single" justify-content-center>
      <div class="item-in">
        <div class="icon">
			<?php
					$categories = get_the_category();
					foreach ( $categories as $category ) { 
  					echo '<div class="icon-topic">' . esc_html( $category->name ) . '</div>'; }
			?>
        </div>
        <br /><br />
        <h4><?php the_title(); ?></h4>
        <div class="seperator"></div>
        <div class="mobile-timedate">
                <span class="smalldate"><?php echo get_the_date(); ?></span> |
                    <?php comments_number( 'Comments (0)', 'Comments (1)', 'Comments (%)' ); ?> 
            </div>
        <div class="single"><?php the_post_thumbnail(); ?></div>
       <?php the_content();?>
      </div>
    </div>
   <div class="single-container">
         <div class="col-md-6" />
          <div class="single-page">
      <div class="title">Previous Post</div>
       <?php previous_post_link('%link'); ?>
    </div></div>
    
    <div class="col-md-6" />
    <div class="single-page">
      <div class="title">Next Post</div>
        <?php next_post_link('%link'); ?>
    </div></div>
    </div>
    <div class="col-md-12"/>
    <div class="item-single">
        <div class="comment"><h4>Leave A Comment</h4></div>
        <div class="seperator" style="margin: 0 auto; float: none;"></div>
         
    <form>
       <?php comment_form(); ?>
      </form>
    </div>
    </div>

<?php comments_template(); ?>
 
    
  <?php include("footer.php");?>
