
<?php

/**
 * The template for displaying date-based archives.
 *
 * @package EmberPress
 */

get_header();
?>

<main id="primary" class="site-main">

    <header class="page-header">
        <h1 class="page-title">
            <?php
            if ( is_day() ) {
                echo esc_html( get_the_date( 'F j, Y' ) );
            } elseif ( is_month() ) {
                echo esc_html( get_the_date( 'F Y' ) );
            } elseif ( is_year() ) {
                echo esc_html( get_the_date( 'Y' ) );
            } else {
                echo 'Archive';
            }
            ?>
        </h1>
    </header>

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?>>

                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'medium' ); ?>
                    </a>
                <?php endif; ?>

                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <?php the_excerpt(); ?>

            </article>

        <?php endwhile; ?>

        <?php
        the_posts_pagination(
            array(
                'prev_text' => '&larr; Previous',
                'next_text' => 'Next &rarr;',
            )
        );
        ?>

    <?php else : ?>

        <p>No posts were found for this date.</p>

    <?php endif; ?>

</main>

<?php
get_footer();
