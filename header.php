<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?> <!-- Added for theme compliance -->


<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e('Skip to content', 'cozy-nest'); ?></a>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F5E1DA;">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/cozy-nest.png'); ?>" width="80px" alt="Cozy Nest Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'cozy-nest'); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo esc_attr(is_home() || is_front_page() ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/')); ?>">
                        <?php esc_html_e('Home', 'cozy-nest'); ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo esc_attr(is_page('stays') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/stays')); ?>">
                        <?php esc_html_e('Our Stays', 'cozy-nest'); ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo esc_attr(is_page('contact-us') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/contact-us')); ?>">
                        <?php esc_html_e('Contact', 'cozy-nest'); ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo esc_attr(is_page('account') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/account')); ?>">
                        <?php esc_html_e('Account', 'cozy-nest'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

