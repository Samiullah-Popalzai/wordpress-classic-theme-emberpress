<?php

/**
 * The main template file.
 *
 * @package EmberPress
 */

get_header();
?>

<main id="primary" class="site-main">

    <div class="content-area">
        <h1 class="page-title">Latest Articles</h1>
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <article <?php post_class(); ?>>

                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>

                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <?php the_excerpt(); ?>

                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>no content</p>
        <?php endif; ?>

    </div>

</main>

<?php
get_footer();
