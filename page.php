<?php

/**
 * The template for displaying individual pages.
 *
 * @package EmberPress
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <article <?php post_class(); ?>>

                <header class="entry-header">
                    <h1 class="entry-title">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile; ?>
    <?php else: ?>
        <p>Sorry, no content was found.</p>
    <?php endif; ?>

</main>

<?php
get_footer();
