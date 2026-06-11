<?php
/**
 * Main index template (fallback).
 *
 * @package tekbyt-theme
 */
get_header(); ?>

<main class="site-main section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <h1 class="section-title"><?php esc_html_e( 'Latest Posts', 'tekbyt-theme' ); ?></h1>
            <div class="services-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'service-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'tekbyt-card' ); ?></a>
                        <?php endif; ?>
                        <h2 class="service-card__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <p class="service-card__desc"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="location-card__link"><?php esc_html_e( 'Read more', 'tekbyt-theme' ); ?></a>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination( [ 'mid_size' => 2 ] ); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'No content found.', 'tekbyt-theme' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>