<?php
/* Template Name: About Us Page */
get_header(); ?>



<!--About Us -->
<section class="about-container">
    <div class="about-image">
       <img src="<?php echo esc_url(get_template_directory_uri() . '/img/cozy-nest.png'); ?>" width="50px" alt="<?php _e( 'Cozy Nest Logo', 'cozy-nest' ); ?>">
    </div>
    <div class="about-text">
        <h1><?php _e( 'Welcome to Cozy-Nest 🌿', 'cozy-nest' ); ?></h1>
        <p>
            <?php _e( 'At cozy-nest, we believe that comfort, calm, and connection should be at the heart of every getaway.', 'cozy-nest' ); ?>
            <?php _e( 'Born from the idea of creating meaningful escapes, cozy-nest is your home away from home — whether', 'cozy-nest' ); ?>
            <?php _e( 'you\'re nestled in a cabin in the woods, unwinding by the beach, or enjoying the charm of a rustic barnhouse.', 'cozy-nest' ); ?>
        </p>
        <p>
            <?php _e( 'Our carefully curated staycations are designed to help you pause, breathe, and reconnect — with nature,', 'cozy-nest' ); ?>
            <?php _e( 'with your loved ones, and with yourself.', 'cozy-nest' ); ?>
        </p>
    </div>
</section>


<!--Our Story-->
<section class="story text-center d-flex align-items-center justify-content-center text-white position-relative" 
    style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/abbys.png') center/cover no-repeat; height: 45vh;">

    <div class="overlay" 
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

    <div class="story-content container position-relative" style="z-index: 2; max-width: 800px;">
        <h2 style="font-size: 36px; font-weight: bold;"><?php _e( 'Our Story', 'cozy-nest' ); ?></h2>
        <p style="font-size: 20px; margin-top: 10px;">
            <strong><?php _e( 'cozy-nest', 'cozy-nest' ); ?></strong> <?php _e( 'started with a simple mission:', 'cozy-nest' ); ?><br>
            <em><?php _e( 'To make every stay feel like a warm hug.', 'cozy-nest' ); ?></em>
        </p>
        <p style="font-size: 18px;">
            <?php _e( 'We noticed that people craved not just vacations, but intentional experiences.', 'cozy-nest' ); ?>
            <?php _e( 'Not just a place to stay, but a place to belong. And so,', 'cozy-nest' ); ?> <strong><?php _e( 'cozy-nest', 'cozy-nest' ); ?></strong> <?php _e( 'was born — a collection of charming and cozy spots designed for comfort, relaxation, and joy.', 'cozy-nest' ); ?>
        </p>
    </div>
</section>




<!---->
<section class="special-section py-5" style="background-color: #fafafa;">
    <div class="container text-center">
        <h2 class="mb-5" style="font-size: 36px; color: #3c3c3c;"><?php _e( 'What Makes Us Special', 'cozy-nest' ); ?></h2>
        <div class="row justify-content-center gx-4">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 card1">
                <div class="special-card text-center">
                    <div class="emoji">🏡</div>
                    <h5 class="mt-3"><?php _e( 'Handpicked Stays', 'cozy-nest' ); ?></h5>
                    <p><?php _e( 'Each location is chosen for its unique charm, natural beauty, and cozy ambiance.', 'cozy-nest' ); ?></p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6 card2">
                <div class="special-card text-center">
                    <div class="emoji">🤍</div>
                    <h5 class="mt-3"><?php _e( 'Comfort-First Philosophy', 'cozy-nest' ); ?></h5>
                    <p><?php _e( 'From soft linens to calming aesthetics, we prioritize your comfort.', 'cozy-nest' ); ?></p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6 card3">
                <div class="special-card text-center">
                    <div class="emoji">🌱</div>
                    <h5 class="mt-3"><?php _e( 'Nature-Inspired Escapes', 'cozy-nest' ); ?></h5>
                    <p><?php _e( 'Reconnect with nature in serene, picturesque surroundings.', 'cozy-nest' ); ?></p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6 card4">
                <div class="special-card text-center">
                    <div class="emoji">👨‍👩‍👧‍👦</div>
                    <h5 class="mt-3"><?php _e( 'Perfect for All', 'cozy-nest' ); ?></h5>
                    <p><?php _e( 'Whether you\'re a solo traveler, couple, family, or group of friends, there\'s a cozy-nest for you.', 'cozy-nest' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>







<section class="our-promise">
    <div class="container">
        <h2 class="section-title"><?php _e( 'Our Promise', 'cozy-nest' ); ?></h2>
        <p class="promise-intro">
            <?php _e( 'We’re more than just a place to stay.', 'cozy-nest' ); ?>
        </p>
        <p class="promise-feeling">
            <?php _e( 'We’re a feeling.', 'cozy-nest' ); ?>
        </p>
        <p class="promise-description">
            <?php _e( "A warm, safe, and inspiring space — thoughtfully designed just for you. Whether you're unwinding for the weekend or creating new memories, cozy-nest is your home of comfort and calm.", 'cozy-nest' ); ?>
        </p>
    </div>
</section>









    <!---Quick Links Section -->
    <section class="quicklinks py-5" style="background-color: #FFF8F0;">
        <div class="container">
            <div class="row text-center">
                <!-- Logo Column -->
                <div class="col-md-3 mb-4 mb-md-0 d-flex flex-column align-items-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cozy-nest.png" alt="<?php esc_attr_e('Cozy Nest Logo', 'cozy-nest'); ?>" style="max-width: 150px;">
                    <p class="mt-2" style="color: #4A3B3B;"><?php esc_html_e('Your cozy escape starts here.', 'cozy-nest'); ?></p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-3 mb-4 mb-md-0 d-flex flex-column align-items-center">
                    <h5 class="fw-bold" style="color: #4A3B3B;"><?php esc_html_e('Quick Links', 'cozy-nest'); ?></h5>
                    <ul class="list-unstyled text-center">
                        <li class="nav-item" style="color: #4A3B3B;">
                            <a class="nav-link <?php echo esc_attr(is_page('stays') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/stays')); ?>">
                                <?php esc_html_e('Our Stays', 'cozy-nest'); ?>
                            </a>
                        </li>
                        <li class="nav-item" style="color: #4A3B3B;">
                            <a class="nav-link <?php echo esc_attr(is_page('about-us') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/about-us')); ?>">
                                <?php esc_html_e('About Us', 'cozy-nest'); ?>
                            </a>
                        </li>
                        <li class="nav-item" style="color: #4A3B3B;">
                            <a class="nav-link <?php echo esc_attr(is_page('contact') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/contact-us')); ?>">
                                <?php esc_html_e('Contact', 'cozy-nest'); ?>
                            </a>
                        </li>
                        <li class="nav-item" style="color: #4A3B3B;">
                            <a class="nav-link <?php echo esc_attr(is_page('testimonials') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/testimonials')); ?>">
                                <?php esc_html_e('Testimonials', 'cozy-nest'); ?>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Helpful Info -->
                <div class="col-md-3 mb-4 mb-md-0 d-flex flex-column align-items-center">
                    <h5 class="fw-bold" style="color: #4A3B3B;"><?php esc_html_e('Helpful Info', 'cozy-nest'); ?></h5>
                    <ul class="list-unstyled text-center">
                        <li class="nav-item" style="color: #4A3B3B;">
                            <a class="nav-link <?php echo esc_attr(is_page('account') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/account')); ?>">
                                <?php esc_html_e('Account', 'cozy-nest'); ?>
                            </a>
                        </li>
                        <li class="nav-item" style="color: #4A3B3B;">
                            <a class="nav-link <?php echo esc_attr(is_page('faq') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/faq')); ?>">
                                <?php esc_html_e('FAQ', 'cozy-nest'); ?>
                            </a>
                        </li>
                        <li class="nav-item" style="color: #4A3B3B;">
                            <a class="nav-link <?php echo esc_attr(is_page('privacy-policy') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/privacy-policy')); ?>">
                                <?php esc_html_e('Privacy Policy', 'cozy-nest'); ?>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="col-md-3 d-flex flex-column align-items-center socials">
                    <h5 class="fw-bold" style="color: #4A3B3B;"><?php esc_html_e('Follow Us', 'cozy-nest'); ?></h5>
                    <div>
                        <a href="#" class="me-3" style="color: #4A3B3B;">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/fblogo.png" alt="<?php esc_attr_e('Facebook Logo', 'cozy-nest'); ?>" style="max-width: 30px;">
                        </a>
                        <a href="#" class="me-3" style="color: #4A3B3B;">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/iglogo.jpg" alt="<?php esc_attr_e('Instagram Logo', 'cozy-nest'); ?>" style="max-width: 30px;">
                        </a>
                        <a href="#" class="me-3" style="color: #4A3B3B;">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/xlogo.png" alt="<?php esc_attr_e('X Logo', 'cozy-nest'); ?>" style="max-width: 30px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <style>
        .quicklinks{
            margin-bottom: -3%;
        }
        .quicklinks .nav-link{
            color: #4A3B3B;
        }
        
        .quicklinks .nav-link:hover{
            color: black;
            cursor: pointer;
            transition: 0.2s all ease;
        }

        .quicklinks .socials img{
            border-radius: 50%;
        }
    </style>

<?php get_footer(); ?>