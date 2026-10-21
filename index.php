
<?php
/**
 * The main template file.
 *
 * @package EmberPress
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php if(have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <?php endif ?>
</main>

<?php
get_footer();
