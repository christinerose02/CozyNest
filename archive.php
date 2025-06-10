<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <header>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="post-meta">
                        <span class="post-date"><?php the_date(); ?></span> 
                        <span class="post-author"><?php the_author(); ?></span>
                    </p>
                </header>
                <div><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>

        <?php
        the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __('« Prev', 'cozy-nest'),
            'next_text' => __('Next »', 'cozy-nest'),
        ) );
        ?>


    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'cozy-nest'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
