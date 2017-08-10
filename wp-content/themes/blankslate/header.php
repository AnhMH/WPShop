<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thời trang Elise</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link href='/wp-content/themes/blankslate/assets/css/kose.css' rel='stylesheet' media="only screen and (min-width:750px)" />
    <link href='/wp-content/themes/blankslate/assets/css/mobile.css' rel='stylesheet' media="only screen and (max-width:750px)"/>
    <link href='/wp-content/themes/blankslate/assets/css/slidebars.css' rel='stylesheet' media="only screen and (max-width:750px)"/>
    <link rel="stylesheet" href="/wp-content/themes/blankslate/assets/css/styles.css" />
    <?php wp_head(); ?>
    <script src="/wp-content/themes/blankslate/assets/js/slidebars.js"></script>
    <!--<script src="/wp-content/themes/blankslate/assets/js/script.js"></script>-->
    <script src="/wp-content/themes/blankslate/assets/js/script2.js"></script>
</head>
<body <?php body_class(); ?>>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <section id="branding">
                <div id="site-title">
                    <?php $showHl = ( is_front_page() || is_home() || is_front_page() && is_home() ) ? true : false; ?>
                    <?php if ( $showHl ) : ?> 
                        <h1>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
                                <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                            </a>
                        </hl>
                    <?php else: ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
                            <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                        </a>    
                    <?php endif; ?>
                </div>
                <div id="site-description">
                    <?php bloginfo( 'description' ); ?>
                </div>
            </section>

            <nav id="menu" role="navigation">
                <div id="search">
                    <?php get_search_form(); ?>
                </div>

                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
        </header>
        
        <div id="container">