<?php include("header.php"); ?>
  <div class="item-single" justify-content-center>
      <div class="item-in">
        <h4><?php the_title(); ?></h4>
        <div class="seperator"></div>
        <div class="single"><?php the_post_thumbnail(); ?></div>
       <?php the_content();?>
      </div>
    </div>
 
  <?php include("footer.php");?>
