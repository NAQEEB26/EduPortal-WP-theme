<?php
/**
 * The template for displaying comments
 *
 * This template displays the area of the page that contains both the current comments
 * and the comment form.
 * If the current post is protected by a password and
 * the visitor has not yet entered the password, return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // Start editing here.
    if ( have_comments() ) :
        ?>
    <h2 class="comments-title">
        <?php
            $eduportal_comment_count = get_comments_number();
            if ( '1' === $eduportal_comment_count ) {
                printf(
                    /* translators: 1: title. */
                    esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'eduportal' ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            } else {
                printf(
                    /* translators: 1: comment count number, 2: title. */
                    esc_html(
                        _nx(
                            '%1$s thought on &ldquo;%2$s&rdquo;',
                            '%1$s thoughts on &ldquo;%2$s&rdquo;',
                            $eduportal_comment_count,
                            'comments title',
                            'eduportal'
                        )
                    ),
                    number_format_i18n( $eduportal_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            }
            ?>
    </h2><!-- .comments-title -->

    <?php the_comments_navigation(); ?>

    <ol class="comment-list">
        <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size' => 50, // Adjust avatar size if needed
                )
            );
            ?>
    </ol><!-- .comment-list -->

    <?php the_comments_navigation(); ?>

    <?php
        // If comments are closed and there are comments, display a note.
        if ( ! comments_open() ) :
            ?>
    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'eduportal' ); ?></p>
    <?php
        endif;

    endif; // Check for have_comments().

    comment_form();
    ?>

</div><!-- #comments -->