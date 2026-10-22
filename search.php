
<?php

/**
 * The template for displaying search results.
 *
 * @package EmberPress
 */

get_header();
?>

<main id="primary" class="site-main">

    <header class="page-header">
        <h1 class="page-title">
            Search Results for:
            <?php echo esc_html( get_search_query() ); ?>
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

<div class="search-pagination">
    <?php
    the_posts_pagination(
        array(
            'prev_text' => '&larr; Previous',
            'next_text' => 'Next &rarr;',
        )
    );
    ?>
</div>

    <?php else : ?>

        <p>Sorry, no results matched your search.</p>

    <?php endif; ?>

</main>

<?php
get_footer();
