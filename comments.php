
<?php

/**
 * The template for displaying comments.
 *
 * @package EmberPress
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>

        <h2 class="comments-title">
            <?php
            printf(
                esc_html(
                    _n(
                        '%s Comment',
                        '%s Comments',
                        get_comments_number(),
                        'emberpress'
                    )
                ),
                esc_html( number_format_i18n( get_comments_number() ) )
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                )
            );
            ?>
        </ol>

    <?php endif; ?>

    <?php
        if ( comments_open() ) {
        comment_form();
    } elseif ( get_comments_number() ) {
        echo '<p class="no-comments">Comments are closed.</p>';
    }
    ?>

</div>
