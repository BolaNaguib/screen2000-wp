


<section id="footer" class="section section_theme_midnight">
  <div class="uk-container">
    <?php if( have_rows('top_footer', 'option') ): ?>
      <?php while( have_rows('top_footer', 'option') ): the_row(); ?>
        <div class="uk-margin-large">

      <h3> <?php the_sub_field('block_title'); ?> </h3>
      <hr>
      <div class="uk-child-width-1-4" uk-grid>

        <?php if( have_rows('link')): ?>
          <?php while( have_rows('link')): the_row(); ?>
          <li class="uk-margin-remove">
            <a class="footer__link footer__link_type_city uk-button-text"
             href="<?php the_sub_field('link_url'); ?>">
               <?php the_sub_field('link_title'); ?> </a></li>

                   <?php endwhile; ?>

                   <?php endif; ?>

      </div>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>
</div>

</section>


<section class="uk-padding-small uk-padding-remove-horizontal	 section_theme_midnight">
  <div class="uk-container">
    <hr class=" hr_theme_sunflower" style="
        border: 1px solid;
        border-radius: 20px;
    ">    <div class="uk-child-width-1-2@m uk-child-width-1-1 uk-flex uk-flex-middle" uk-grid>
      <div class="">
        <div class="uk-text-left@m uk-text-center">
          © 2019 Garage Doors Tech LLC
        </div>
        <div class="uk-text-left@m uk-text-center">
          Made with  <i style="color:red" class="fas fa-heart"></i> By <a target="_blank" href="bolanaguib.com"> Bolanaguib.com</a>
        </div>
      </div>

      <div class="uk-text-right@m uk-text-center">
        <img style="height:30px"src=" <?php echo get_template_directory_uri(); ?>/images/credit-card-icons.png " alt="">
      </div>

    </div>
  </div>
</section>
<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
<?php wp_footer(); ?>

<script type="text/javascript">
  $(".clickopen").on('click',(e) => {
    $(".dxd").css('display','-webkit-inline-box');
  });
</script>
<script type="text/javascript">
  $(".childx").parent().parent().addClass("uk-parent");
</script>

</body>
</html>
