<!DOCTYPE html>
<html>

<title> <?php the_title(); ?> </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet"> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="canonical" href="<?php the_permalink(); ?>"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php the_field('favicon', 'option') ?>" />
<meta name="key" content="" />
<meta name="title" content=" <?php the_field('meta_title'); ?> " />
<meta name="keywords" content=" <?php the_field('meta_keywords'); ?> " />
<meta name="description" content=" <?php the_field('meta_description'); ?> " />
<?php the_field('header_js_general', 'option'); ?>
<?php the_field('header_js'); ?>
<?php wp_head(); ?>

<body>
  <div id="loading"></div>

  <!-- HEADER -->
  <div class="header">

  <div class="uk-container">

  <!-- START uk-sticky -->
  <div   class="nav">

    <!-- START .navbar -->
    <nav class="navbar mainbar" uk-navbar>

      <!-- START .uk-navbar-left -->
      <div class="uk-navbar-left">
        <a href="/">
          <img width="100px" src="<?php the_field('logo', 'option') ?>" alt="Screen2000">
        </a>
      </div> <!-- END .uk-navbar-left -->

      <!-- START .uk-navbar-right -->
      <div class="uk-navbar-right">

        <?php wp_nav_menu([
                 'theme_location'  => '',
                   'menu'            => '',
                   'container'       => '',
                   'container_class' => '',
                   'container_id'    => '',
                   'menu_class'      => '',
                   'menu_id'         => '',
                   'echo'            => true,
                   'fallback_cb'     => '',
                   'before'          => '',
                   'after'           => '',
                   'link_before'     => '',
                   'link_after'      => '',
                   'items_wrap'      => '<ul id="%1$s" class="%2$s uk-navbar-nav navbar_main_bg">%3$s</ul>',
                   'depth'           => 0,
                   'walker'          => new Bootstrap_Walker_Menu_Nav(),

                 ]); ?>

        <!-- START .uk-navbar-nav -->
        <ul class="uk-navbar-nav navbar_main_bg" style="    margin-top: 30px !important;">

          <li><a href="#offcanvas-slide" class="uk-hidden@s nav__toggle_color_white" uk-toggle>
              <span class="" uk-navbar-toggle-icon>

              </span>
            </a>
          </li>

        </ul><!-- END .uk-navbar-nav -->
      </div><!-- END .uk-navbar-right -->
    </nav><!-- END .navbar -->
  </div><!-- END uk-sticky -->


  <!-- Start uk-offcanvas Mobile Nav  -->
  <div id="offcanvas-slide" uk-offcanvas>

    <!-- START .uk-offcanvas-bar -->
    <div class="uk-offcanvas-bar">

      <?php wp_nav_menu([
               'theme_location'  => '',
                 'menu'            => '',
                 'container'       => '',
                 'container_class' => '',
                 'container_id'    => '',
                 'menu_class'      => '',
                 'menu_id'         => '',
                 'echo'            => true,
                 'fallback_cb'     => '',
                 'before'          => '',
                 'after'           => '',
                 'link_before'     => '',
                 'link_after'      => '',
                 'items_wrap'      => '<ul id="%1$s" class="%2$s uk-nav navbar_main_bg">%3$s</ul>',
                 'depth'           => 0,
                 'walker'          => new Bootstrap_Walker_Menu_mobile(),

               ]); ?>

    </div> <!-- END .uk-offcanvas-->
  </div><!-- END uk-offcanvas Mobile Nav  -->

  <hr class="green_hr">
</div>
</div>

  <!-- END HEADER -->
