<?php
/**
 * Template part for displaying posts.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (is_singular()) : ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php else : ?>
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
        <?php endif; ?>

        <div class="entry-meta">
            <span class="post-date"><?php echo get_the_date(); ?></span>
            <span class="post-author"><?php esc_html_e('By', 'EduPortal'); ?> <?php the_author(); ?></span>
        </div>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        if (is_singular()) {
            the_content();
        } else {
            the_excerpt();
        }

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'EduPortal'),
                'after'  => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
        // Display categories and tags
        the_category(', ');
        the_tags('<span class="tags-links">', ', ', '</span>');
        ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->