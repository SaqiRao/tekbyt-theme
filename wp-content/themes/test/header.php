<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="container">
        <div class="site-header__inner">

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?>">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    $name_parts = explode( ' ', get_bloginfo( 'name' ), 2 );
                    echo esc_html( $name_parts[0] );
                    if ( isset( $name_parts[1] ) ) {
                        echo '<span>' . esc_html( $name_parts[1] ) . '</span>';
                    }
                }
                ?>
            </a>

            <nav class="site-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'tekbyt-theme' ); ?>">
                <?php
                wp_nav_menu( [
                    'theme_location' => 'primary',
                    'menu_class'     => '',
                    'container'      => false,
                    'fallback_cb'    => 'tekbyt_fallback_nav',
                ] );
                ?>
            </nav>

            <a href="#lead-form" class="header-cta btn btn--primary">
                <?php esc_html_e( 'Get Free Quote', 'tekbyt-theme' ); ?>
            </a>

        </div>
    </div>
</header>
<?php

/**
 * Fallback nav when no menu is assigned.
 */
function tekbyt_fallback_nav() {
    echo '<ul>';
    wp_list_pages( [ 'title_li' => '', 'depth' => 1 ] );
    echo '</ul>';
}