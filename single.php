<?php
/**
 * The Template for displaying all single posts
 */
get_header();
?>

<main class="single-post">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('post-article'); ?>>

            <!-- Post Header -->
            <header class="post-header">
                <?php if(has_category()) : ?>
                <div class="post-categories">
                    <?php the_category(' '); ?>
                </div>
                <?php endif; ?>

                <h1 class="post-title"><?php the_title(); ?></h1>

                <div class="post-meta">
                    <div class="author-info">
                        <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                        <span class="byline">By <?php the_author_posts_link(); ?></span>
                    </div>
                    <time class="post-date"><?php echo get_the_date('F j, Y'); ?></time>
                </div>
            </header>

            <!-- Featured Image -->
            <?php if(has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('large', array(
                            'alt' => get_the_title()
                        )); ?>
            </div>
            <?php endif; ?>

            <!-- Post Content -->
            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <!-- Post Footer -->
            <footer class="post-footer">
                <?php if(has_tag()) : ?>
                <div class="post-tags">
                    <span>Tags:</span>
                    <?php the_tags('', ' '); ?>
                </div>
                <?php endif; ?>
            </footer>

        </article>



        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>