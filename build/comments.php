<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @package instapress
 * @since 1.0
 */

if ( post_password_required() ) {
    return;
}

?>

<div id="comments" class="comments">
    <?php
        if ( have_comments() ) {
            printf(
                '<div class="comment-list">%s</div>',

                wp_list_comments(
                    array(
                        'echo' => false,
                        'style' => 'div'
                    )
                )
            );

            if ( function_exists( 'the_comments_navigation' ) ) {
                the_comments_navigation();
            }
        }

        comment_form(
            array(
                'submit_field' => '<div class="comment-submit">%1$s %2$s</div>'
            )
        );
    ?>
</div>