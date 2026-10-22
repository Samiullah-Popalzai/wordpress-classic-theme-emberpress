
<?php

/**
 * The template for displaying individual blog posts.
 *
 * @package EmberPress
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?>>

                <header class="entry-header">

                    <h1 class="entry-title">
                        <?php the_title(); ?>
                    </h1>

                    <div class="entry-meta">

                        <span class="posted-on">
                            Published on <?php echo esc_html( get_the_date() ); ?>
                        </span>

                        <span class="post-categories">
                            <?php the_category( ', ' ); ?>
                        </span>

                        <span class="byline">
                            By <?php the_author(); ?>
                        </span>

                    </div>

                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="entry-thumbnail">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

            </article>
<?php
if ( comments_open() || get_comments_number() ) {
    comments_template();
}
?>
            <nav class="post-navigation" aria-label="Post navigation">

                <div class="previous-post">
                    <?php previous_post_link( '%link', '&larr; Previous Post: %title' ); ?>
                </div>

                <div class="next-post">
                    <?php next_post_link( '%link', 'Next Post: %title &rarr;' ); ?>
                </div>

            </nav>

        <?php endwhile; ?>
    <?php endif; ?>

</main>

<?php
get_footer();
