<!-- START header -->
<?php get_header(); ?>

<?php
      // Start the Loop.
    if ( have_posts() ) : ?>

    <section class="uk-section embeded__info">
    <div class="uk-container">
      <h3> <?php the_title(); ?>  </h3>
      <hr>
      <div class="" uk-grid>

      <div class="uk-width-2-3@m uk-width-1-1">
        <iframe style="min-height:450px;" width="100%" height="100%" src="https://www.youtube.com/embed/<?php the_field('project_trailer') ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
      <div class="uk-width-1-3@m uk-width-1-1">
        <div class="embeded__info_container">
          <div class="embeded__info_sub_container">
            <b class="embeded__info__tit" >Type :</b>
            <?php

// check if the repeater field has rows of data
if( have_rows('project_type') ):

 	// loop through the rows of data
    while ( have_rows('project_type') ) : the_row();
?>
<span class="cast__link"> <?php the_sub_field('project_type') ?> </span>

<?php
    endwhile;

else :

    // no rows found

endif;

?>


          </div>
          <div class="embeded__info_sub_container">
            <b class="embeded__info__tit" >Description :</b>
             <p> <?php the_field('project_description'); ?> </p>

          </div>
          <div class="embeded__info_sub_container">
            <b class="embeded__info__tit" > Written by </b>
            <?php

// check if the repeater field has rows of data
if( have_rows('project_writer') ):

  // loop through the rows of data
    while ( have_rows('project_writer') ) : the_row();
?>
<span class="cast__link"> <?php the_sub_field('project_writer') ?> </span>

<?php
    endwhile;

else :

    // no rows found

endif;

?>

          </div>
          <div class="embeded__info_sub_container">
            <b class="embeded__info__tit" > Directed by </b>
            <?php

// check if the repeater field has rows of data
if( have_rows('project_director') ):

  // loop through the rows of data
    while ( have_rows('project_director') ) : the_row();
?>
<span class="cast__link"> <?php the_sub_field('project_director') ?> </span>

<?php
    endwhile;

else :

    // no rows found

endif;

?>


          </div>
          <div class="embeded__info_sub_container">
            <b class="embeded__info__tit" > Cast by </b>

            <?php

// check if the repeater field has rows of data
if( have_rows('project_cast') ):

  // loop through the rows of data
    while ( have_rows('project_cast') ) : the_row();
?>
<span class="cast__link"> <?php the_sub_field('project_cast') ?> </span>

<?php
    endwhile;

else :

    // no rows found

endif;

?>
          </div>

        </div>
      </div>
    </div>

    </div>
    </section>

      <?php

    endif; ?>


    <section class="uk-section">
      <div class="uk-container">
    <h3> Similar Productions</h3>
    <div class="uk-grid-match" uk-grid>


    <?php

    $posts = get_field('also_watch');

    if( $posts ): ?>
        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>

                  <div class="uk-width-1-4@m uk-width-1-2@s uk-width-1-1">
                    <div class="products uk-position-relative">
                      <a href="#">
                      <img class="products__img uk-margin-bottom" src="<?php the_field('project_thumbnail'); ?>" alt="">
                      <span class="products__title"> <?php the_title(); ?> </span>
                      <span class="products__sub">Production : <b>  <?php the_field('production_year'); ?>  </b> </span>
                       <p class="products__description"> <?php the_field('project_description'); ?> </p>
                    </a>
                    </div>
                  </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>






    </div>
      </div>
    </section>



<!-- START  footer  -->
<?php get_footer(); ?>
