
<?php

/**
 * Custom search form for EmberPress.
 *
 * @package EmberPress
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <label class="search-form-label">
        <span class="screen-reader-text">
            <?php echo esc_html_x( 'Search for:', 'label', 'emberpress' ); ?>
        </span>

        <input
            type="search"
            class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search articles...', 'placeholder', 'emberpress' ); ?>"
            value="<?php echo esc_attr( get_search_query() ); ?>"
            name="s"
        >
    </label>

    <button type="submit" class="search-submit">
        <?php echo esc_html_x( 'Search', 'submit button', 'emberpress' ); ?>
    </button>

</form>
