<?php wp_footer(); ?>
<section class="footer">
  <div class="uk-container">
    <div class="uk-grid">

<?php

// check if the flexible content field has rows of data
if( have_rows('footer', 'option') ):

     // loop through the rows of data
    while ( have_rows('footer', 'option') ) : the_row();

        if( get_row_layout() == 'footer_links' ):

?>

<div class="uk-width-1-3@m uk-width-1-1  uk-margin-bottom">
  <h5 class="footer_title"><?php the_sub_field('block_title'); ?></h5>
  <ul class="uk-list">
<?php

// check if the repeater field has rows of data
if( have_rows('block_data') ):

// loop through the rows of data
while ( have_rows('block_data') ) : the_row();
?>

<li><a class="footer_link" href="<?php echo get_home_url(); ?>/<?php the_sub_field('link_url'); ?>"> <?php the_sub_field('link_title'); ?> </a></li>



<?php


endwhile;

else :

// no rows found

endif;

?>
</ul>

</div>
<?php
        elseif( get_row_layout() == 'footer_block' ):

?>

      <div class="uk-width-1-3@m uk-width-1-1 uk-margin-bottom">
        <h5 class="footer_title"> <?php the_sub_field('block_title'); ?></h5>
        <div class="uk-grid uk-grid-match footx">
          <?php

          // check if the repeater field has rows of data
          if( have_rows('block_data') ):

          // loop through the rows of data
          while ( have_rows('block_data') ) : the_row();
          ?>

          <div class="uk-width-1-3">
        <div class="card">
        <a href="<?php the_sub_field('block_url'); ?>"><img class="" src="<?php the_sub_field('block_image'); ?>" alt=""></a>
        </div>
          </div>


          <?php


          endwhile;

          else :

          // no rows found

          endif;

          ?>




        </div>


      </div>



<?php
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>

</div>
</div>
<section class="uk-padding-small uk-padding-remove-horizontal	 " style="color:#fff">
  <div class="uk-container">
    <hr class="green_hr uk-margin-top uk-margin-bottom" style=" ">
      <div class="uk-child-width-1-2@m uk-child-width-1-1  uk-grid" uk-grid="">
        <div class="uk-text-left@m uk-text-center">
          Copyright © screen2000 - All rights reserved 2019
        </div>
        <div class="uk-text-right@m uk-text-center">
          Made with  <i style="color:red" class="fas fa-heart"></i> By <a style="color:red"  target="_blank" href="inetwork-me.com"> Inetwork-me.com</a>
        </div>



    </div>
  </div>
</section>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
<script>
function hideLoader() {
$('#loading').hide();
}

$(window).ready(hideLoader);

// Strongly recommended: Hide loader after 20 seconds, even if the page hasn't finished loading
setTimeout(hideLoader, 20 * 1000);
</script>
</body>
</html>
