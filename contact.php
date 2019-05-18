<?php  /* Template Name: Contact Template */  ?>

<!-- START header -->
<?php get_header(); ?>

<section class="uk-section">
  <div class="uk-container">
    <div class="uk-child-width-1-2@m uk-child-width-1-1" uk-grid>
<div class="">
  <div class="uk-flex uk-flex-middle">

  <img class="header__icon uk-margin-right" src="<?php echo get_template_directory_uri(); ?>/images/movie-icon.svg"></img>
  <h3 class="uk-margin-remove "><?php the_field('block_title'); ?> </h3>
</div>
  <hr class="uk-margin">
<?php the_field('block_caption'); ?>
</div>
<div class="contact">
<?php echo do_shortcode('[contact-form-7 id="206" title="Contact form 1"]'); ?>
</div>
    </div>
  </div>
</section>


<!-- START  footer  -->
<?php get_footer(); ?>
