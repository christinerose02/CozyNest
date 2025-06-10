<?php get_header(); ?>

<main>
    <h1><?php esc_html_e('Oops! That page can’t be found.', 'cozy-nest'); ?></h1>
    <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'cozy-nest'); ?></p>
    <?php get_search_form(); ?>
</main>

<?php get_footer(); ?>