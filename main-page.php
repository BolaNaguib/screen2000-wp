<?php  /* Template Name: Main Page Template */  ?>

<!-- START header -->
<?php get_header(); ?>
<?php

// check if the repeater field has rows of data
if( have_rows('slider') ):?>

<section>
  <div class="sliderx">

    <div class="uk-position-relative uk-visible-toggle uk-light"  uk-slider="autoplay: true; autoplay-interval: 1000">

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m">
          <?php	// loop through the rows of data
             while ( have_rows('slider') ) : the_row();?>

             <li>
                 <img src="<?php the_sub_field('slider_image'); ?>" alt="">
                 <div class="uk-position-center uk-panel"><h1></h1></div>
             </li>

             <?php endwhile;?>

        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

  </div>
</section>
<?php
else :

    // no rows found

endif;

?>


<?php

$posts = get_field('featured_projects');

if( $posts ): ?>


<section class="green_bg">

</section>
<section class="section_floater">
  <div class="uk-container">

    <h1 class="" style="    color: #fff;
    margin: 0px 0px 20px 0px;"> Our Featured Projects </h1>

    <div class="uk-grid">
      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
      <div class="uk-width-1-6@m uk-width-1-3@s uk-width-1-1">
        <div class="card">
          <a href="<?php the_permalink(); ?> ">
          <img class="card_image" src=" <?php the_field('project_thumbnail'); ?>" alt="">

          <!-- <span class="card_category" href="#"> <?php the_field('project_type') ?> </span> -->

          <h5 class="card_title uk-margin-small"><?php the_title(); ?> </h5>
          </a>
        </div>
      </div>

    <?php endforeach; ?>

    </div>
  </div>
</section>


<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>




<section class="uk-padding uk-padding-remove-horizontal">
  <div class="uk-container">
    <div class="uk-grid">
      <div class="uk-width-1-2@m uk-wdith-1-1 uk-margin-bottom">
          <div class="uk-text-center">
            <img class="mediumthumb" src="<?php the_field('serviceblock_image'); ?>" alt="">

          </div>

    <div class="">
      <div class="uk-text-center uk-text-left@m">
        <h3><?php the_field('serviceblock_title'); ?></h3>
        <p> <?php the_field('serviceblock_caption'); ?> </p>
      </div>

  <div class="uk-text-right@m uk-text-center">
    <a class="uk-button primary-button" href="<?php the_field('serviceblock_button_url'); ?>"><?php the_field('serviceblock_button_title'); ?></a>

    </div>
  </div>
      </div>


<div class="uk-width-1-2@m uk-width-1-1">
  <div class="uk-text-center">
    <img class="mediumthumb" src="<?php the_field('contactblock_image'); ?>" alt="">

  </div>
  <div class="uk-text-center uk-text-left@m">
    <h3> <?php the_field('contactblock_title') ?> </h3>
    <h5 class="uk-margin-remove">Address:</h5>
    <p class="uk-margin-small"> <?php the_field('contactblock_address'); ?></p>
    <h5 class="uk-margin-remove">Phones</h5>
    <p class="uk-margin-small"><?php the_field('contactblock_phone'); ?></p>
    <h5 class="uk-margin-remove">Email</h5>
    <p class="uk-margin-small"><?php the_field('contactblock_email'); ?></p>

  </div>
</div>
 </div>




  </div>
</section>








<!-- START  footer  -->
<?php get_footer(); ?>
