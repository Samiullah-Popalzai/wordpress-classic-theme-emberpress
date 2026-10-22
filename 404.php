
<?php

/**
 * The template for displaying 404 pages.
 *
 * @package EmberPress
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="error-404">

        <header class="page-header">
            <h1 class="page-title">
                Page Not Found
            </h1>
        </header>

        <div class="page-content">
            <p>
                Sorry, the page you're looking for doesn't exist
                or may have been moved.
            </p>

            <p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    Return to the homepage
                </a>
            </p>
        </div>

    </section>

</main>

<?php
get_footer();
