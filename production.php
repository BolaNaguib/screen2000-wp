<?php  /* Template Name: Production Page Template */  ?>

<!-- START header -->
<?php get_header(); ?>

<section class="uk-section">
  <div class="uk-container">
    <div class="uk-grid-match" uk-grid>

  <!-- // Define our WP Query Parameters -->
<?php $the_query = new WP_Query( 'posts_per_page=999' ); ?>

<!-- // Start our WP Query -->
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<!-- // Display the Post Title with Hyperlink -->
<div class="uk-width-1-4@m uk-width-1-2@s uk-width-1-1">
  <div class="products uk-position-relative">
    <a href="<?php the_permalink() ?>">
    <img class="products__img uk-margin-bottom" src="<?php the_field('project_thumbnail'); ?>" alt="">
    <span class="products__title"><?php the_title(); ?> </span>
    <span class="products__sub">Production : <b>  <?php the_field('production_year'); ?> </b> </span>
    <p class="products__description"> <?php the_field('project_description'); ?> </p>
  </a>
  </div>
</div>

<!-- // Repeat the process and reset once it hits the limit -->
<?php
endwhile;
wp_reset_postdata();
?>

    </div>

  </div>
</section>















<!-- START  footer  -->
<?php get_footer(); ?>
