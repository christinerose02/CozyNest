<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>

                <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cozy-nest' ),
                    'after'  => '</div>',
                ) );
                ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No pages found.', 'cozy-nest'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
