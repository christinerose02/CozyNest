<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    <div><?php the_content(); ?></div>

    <?php
    wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cozy-nest' ),
        'after'  => '</div>',
    ) );
    ?>

    <?php
    $tags_list = get_the_tag_list( '', ', ' );
    if ( $tags_list ) {
        echo '<div class="post-tags">Tags: ' . $tags_list . '</div>';
    }
    ?>

    <?php
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }
    ?>
</article>
