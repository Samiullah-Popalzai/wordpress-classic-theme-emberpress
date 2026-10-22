
<?php

/**
 * The template for displaying the site front page.
 *
 * @package EmberPress
 */

get_header();
?>

<main id="primary" class="site-main">

    <header class="page-header">
        <h1 class="page-title">
            Latest Articles
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

                
<div class="entry-meta">
    <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
        <?php echo esc_html( get_the_date() ); ?>
    </time>

    <span class="entry-categories">
        <?php the_category( ', ' ); ?>
    </span>
</div>

<h2 class="entry-title">
    <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
</h2>

<?php the_excerpt(); ?>

<a class="read-more-link" href="<?php echo esc_url( get_permalink() ); ?>">
    <?php esc_html_e( 'Read More', 'emberpress' ); ?>
    <span aria-hidden="true">&rarr;</span>
</a>


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

        <p>No articles have been published yet.</p>

    <?php endif; ?>

</main>

<?php
get_footer();
