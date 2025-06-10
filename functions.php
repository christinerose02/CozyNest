<?php

// Add this to functions.php
if (!function_exists('wp_print_speculation_rules')) {
    function wp_print_speculation_rules() {
        // Safe fallback: Do nothing.
    }
}

// Load Theme Textdomain for translations
function cozy_nest_load_theme_textdomain() {
    $locale = get_locale(); // Get the current locale
    $path = get_template_directory() . '/languages/cozy-nest-' . $locale . '.mo';

    $loaded = load_textdomain('cozy-nest', $path);

    if ($loaded) {
        error_log('✅ cozy-nest textdomain loaded for locale: ' . $locale);
    } else {
        error_log('❌ cozy-nest textdomain NOT loaded for locale: ' . $locale);
    }
}
add_action('after_setup_theme', 'cozy_nest_load_theme_textdomain');




// Log current locale for debugging
add_action('init', function() {
    error_log('Current Locale: ' . get_locale());
});




// Enqueue Styles and Scripts
function cozy_nest_enqueue_styles() {
    wp_enqueue_style('cozy-nest-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'cozy_nest_enqueue_styles');

function cozy_nest_scripts() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/styles.css');
    wp_enqueue_style('cozy-nest-style', get_stylesheet_uri());

    wp_enqueue_script('jquery'); // Use WP's built-in jQuery
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('cozy-nest-script', get_template_directory_uri() . '/js/scripts.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'cozy_nest_scripts');




// Theme Setup
function cozy_nest_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'cozy-nest'),
    ));

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption')); // Adding HTML5 support
    add_theme_support('automatic-feed-links'); // Enable RSS feed links

    // Block styles and patterns
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('custom-header', array(
        'width' => 1200,
        'height' => 280,
        'flex-height' => true,
    ));
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));

    // Add editor style
    add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'cozy_nest_theme_setup');




// Register Widget Area
function cozy_nest_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'cozy-nest'),
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'cozy_nest_widgets_init');




// Block Styles
function cozy_nest_register_block_styles() {
    register_block_style(
        'core/image',
        array(
            'name'  => 'rounded-image',
            'label' => __('Rounded Image', 'cozy-nest'),
            'style_handle' => 'cozy-nest-style',
        )
    );
}
add_action('init', 'cozy_nest_register_block_styles');




// Block Patterns
function cozy_nest_register_block_patterns() {
    register_block_pattern(
        'cozy-nest/hero-section',
        array(
            'title'       => __('Hero Section', 'cozy-nest'),
            'description' => _x('A custom hero section', 'Block pattern description', 'cozy-nest'),
            'content'     => "<!-- wp:heading --><h2>Welcome to Coazy Nest</h2><!-- /wp:heading -->",
        )
    );
}
add_action('init', 'cozy_nest_register_block_patterns');




// Comment Reply Script
function mytheme_enqueue_scripts() {
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');




//Admin Notice
function cozy_nest_admin_notice() {
    if (get_option('cozy_nest_notice_dismissed')) return;
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e('Thanks for activating Cozy Nest! Visit Appearance → Customize to personalize your site.', 'cozy-nest'); ?></p>
    </div>
    <?php
}
add_action('admin_notices', 'cozy_nest_admin_notice');

?>
