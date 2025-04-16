<?php
/**
 * Category Template: Card Layout
 */
get_header();
?>

<main class="category-main">
    <div class="container">
        <header class="category-header">
            <h1 class="category-title"><?php single_cat_title(); ?></h1>
        </header>

        <div class="posts-grid">
            <?php if (have_posts()) : 
                while (have_posts()) : the_post(); ?>
            <article class="post-card">
                <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="card-image-link">
                    <?php the_post_thumbnail('large', array(
                        'class' => 'card-image',
                        'alt' => esc_attr(get_the_title())
                    )); ?>
                </a>
                <?php endif; ?>

                <div class="card-content">
                    <div class="post-meta">
                        <span class="post-date"><?php echo get_the_date('M j, Y'); ?></span>
                        <span class="post-author"><?php echo get_the_author(); ?></span>
                    </div>

                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <div class="post-excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="read-more-btn">
                        <?php esc_html_e('Read More', 'eduportal'); ?> →
                    </a>
                </div>
            </article>
            <?php endwhile; ?>
            <?php else : ?>
            <p class="no-posts"><?php esc_html_e('No posts found in this category.', 'eduportal'); ?></p>
            <?php endif; ?>
        </div>

        <div class="pagination-wrapper">
            <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('« Previous', 'eduportal'),
                'next_text' => __('Next »', 'eduportal'),
            )); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>