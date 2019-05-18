<!-- START header -->
<?php get_header(); ?>
<section class="uk-section">
  <div class="uk-container">
    <div class="uk-flex uk-flex-middle">
      <img class="header__icon uk-margin-right" src="<?php echo get_template_directory_uri(); ?>/images/movie-icon.svg"></img>
      <h3 class="uk-margin-remove "><?php the_field('block_title'); ?> </h3>

    </div>
        <hr class="uk-margin">
<?php the_field('block_caption'); ?>
  </div>
</section>

<!-- START  footer  -->
<?php get_footer(); ?>
