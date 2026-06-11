<footer class="site-footer" role="contentinfo">
    <div class="container">

        <div class="footer-grid">

            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
                    <?php bloginfo( 'name' ); ?>
                </a>
                <p><?php bloginfo( 'description' ); ?></p>
            </div>

            <div class="footer-col">
                <h4><?php esc_html_e( 'Services', 'tekbyt-theme' ); ?></h4>
                <?php
                $services = get_posts( [
                    'post_type'      => 'service',
                    'posts_per_page' => 5,
                    'orderby'        => 'title',
                    'order'          => 'ASC',
                ] );
                if ( $services ) :
                    echo '<ul>';
                    foreach ( $services as $service ) :
                        echo '<li><a href="' . esc_url( get_permalink( $service->ID ) ) . '">' . esc_html( $service->post_title ) . '</a></li>';
                    endforeach;
                    echo '</ul>';
                endif;
                ?>
            </div>

            <div class="footer-col">
                <h4><?php esc_html_e( 'Locations', 'tekbyt-theme' ); ?></h4>
                <?php
                $locations = get_posts( [
                    'post_type'      => 'location',
                    'posts_per_page' => 5,
                    'orderby'        => 'title',
                    'order'          => 'ASC',
                ] );
                if ( $locations ) :
                    echo '<ul>';
                    foreach ( $locations as $location ) :
                        echo '<li><a href="' . esc_url( get_permalink( $location->ID ) ) . '">' . esc_html( $location->post_title ) . '</a></li>';
                    endforeach;
                    echo '</ul>';
                endif;
                ?>
            </div>

            <div class="footer-col">
                <h4><?php esc_html_e( 'Company', 'tekbyt-theme' ); ?></h4>
                <?php
                wp_nav_menu( [
                    'theme_location' => 'footer',
                    'container'      => false,
                    'fallback_cb'    => false,
                ] );
                ?>
            </div>

        </div>

        <div class="footer-bottom">
            <p>
                &copy; <?php echo esc_html( date( 'Y' ) ); ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>.
                <?php esc_html_e( 'All rights reserved.', 'tekbyt-theme' ); ?>
            </p>
            <p><?php esc_html_e( 'Built with ❤ by TEKBYT', 'tekbyt-theme' ); ?></p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>