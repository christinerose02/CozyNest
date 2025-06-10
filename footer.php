<div class="footer-container">
    <footer class="site-footer">
        <p class="footer-text">&copy; <?php echo date('Y'); ?> 
            <?php echo esc_html(get_theme_mod('cozy-nest_footer_text', get_bloginfo('name') . '. ' . __('All Rights Reserved.', 'cozy-nest'))); ?>
        </p>
        <p>
            <a class="nav-link <?php echo esc_attr(is_page('privacy-policy') ? 'active' : ''); ?>" 
                href="<?php echo esc_url(home_url('/privacy-policy')); ?>">
                <?php _e('Privacy Policy', 'cozy-nest'); ?>
            </a>
        </p>
    </footer>
</div>

<style>
    footer {
        background: #F5E1DA;
        color: #6f4e37;
        padding: 20px 0;
        text-align: center;
        /* margin-top: 40px; orig*/
         margin-top: 0;
        align-items: center;
        gap: 0;
    }

    footer p {
        margin: 0;
        font-size: 14px;
        color: #6f4e37;
    }

    @media (max-width: 768px) {
        footer {
            padding: 15px 10px;
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        footer {
            padding: 10px 5px;
            font-size: 10px;
        }
    }
</style>

<?php wp_footer(); ?>
</body>
</html>
