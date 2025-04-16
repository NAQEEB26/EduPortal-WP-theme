<?php get_header(); ?>

<div class="content-area">
    <div class="container">
        <?php if(have_posts()):
            while(have_posts()): the_post();
                get_template_part('template-parts/content', get_post_type());
            endwhile;
        else:
            get_template_part('template-parts/content', 'none');
        endif; ?>
    </div>
</div>

<?php get_footer(); ?>