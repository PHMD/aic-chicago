<?php /*?><?php 
function register_my_menus() {
  register_nav_menus(
    array(
      'Nav-left' => __( 'Nav Left' ),
      'Nav-right' => __( 'Nav Right' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?><?php */?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>American Indian Center Chicago</title>
    <script src="//use.typekit.net/cku8vhq.js"></script>
    <script>try {
            Typekit.load();
        } catch (e) {
        }</script>

    <link rel="stylesheet" href="css/foundation.css"/>
    <script src="bower_components/modernizr/modernizr.js"></script>
    <link rel="stylesheet" type="text/css"
          href="http://doomsdaytuesday.com/aic-chicago/wp-content/themes/AIC-ChicagoTheme/css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="bower_components/slick.js/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="bower_components/slick.js/slick/slick-theme.css"/>

    <title><?php if (is_category()) {
            echo 'Category Archive for &quot;';
            single_cat_title();
            echo '&quot; | ';
            bloginfo('name');
        } elseif (is_tag()) {
            echo 'Tag Archive for &quot;';
            single_tag_title();
            echo '&quot; | ';
            bloginfo('name');
        } elseif (is_archive()) {
            wp_title('');
            echo ' Archive | ';
            bloginfo('name');
        } elseif (is_search()) {
            echo 'Search for &quot;' . esc_html($s) . '&quot; | ';
            bloginfo('name');
        } elseif (is_home() || is_front_page()) {
            bloginfo('name');
            echo ' | ';
            bloginfo('description');
        } elseif (is_404()) {
            echo 'Error 404 Not Found | ';
            bloginfo('name');
        } elseif (is_single()) {
            wp_title('');
        } else {
            echo wp_title(' | ', 'false', 'right');
            bloginfo('name');
        } ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/foundation.css"/>

    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico"
          type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action('foundationPress_after_body'); ?>

<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">

        <?php do_action('foundationPress_layout_start'); ?>
        <header>
            <div class="logo-wrap">
                <div class="row">
                    <div class="small-12 medium-9 columns small-centered">
                        <img src="http://doomsdaytuesday.com/aic-chicago/wp-content/themes/AIC-ChicagoTheme/assets/img/icons/header_img.svg" alt="American Indian Center of Chicago"/>
                    </div>
                </div>
            </div>

            <div class="top-bar-container contain-to-grid sticky">
                <nav class="top-bar" data-topbar role="navigation">
                    <ul class="title-area">
                        <li class="name">
                        </li>
                        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                    </ul>
                    <section class="top-bar-section">
<!-- Left Nav Section -->

<?php wp_nav_menu( array( 'theme' => 'Nav-left' ) ); ?>
                        <!--   <ul class="left">
                            <li><a href="index.html">Home</a></li>
                            <li class="has-dropdown"><a>About</a>
                                <ul class="dropdown">
                                    <li><a href="us.html">Us</a></li>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="history.html">History</a></li>
                                    <li><a href="powwow.html">Powwows</a></li>
                                    <li><a href="opportunities.html">Opportunities</a></li>
                                    <li><a href="membership.html">Membership</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown"><a>Programs</a>
                                <ul class="dropdown">
                                    <li><a href="education.html">Education</a></li>
                                    <li><a href="arts.html">Arts</a></li>
                                    <li><a href="wellness.html">Wellness</a></li>
                                    <li><a href="activities.html">Activities</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown"><a>Media</a>
                                <ul class="dropdown">
                                    <li><a href="photos.html">Photos</a></li>
                                    <li><a href="videos.html">Videos</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Right Nav Section -->
                        <ul class="right">
                        <?php wp_nav_menu( array('container_class' => 'Nav-right',
        'theme_location' => 'Nav-right') ); ?>
                            <!--<li><a href="store.html">Store</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="donate.html">Donate</a></li>-->
                        </ul>
                    </section>
                </nav>
            </div>
        </header>

        <?php get_template_part('parts/off-canvas-menu'); ?>

        <?php //get_template_part('parts/top-bar'); ?>

        <section class="container" role="document">
<?php do_action('foundationPress_after_header'); ?>