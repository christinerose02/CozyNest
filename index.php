<?php get_header(); ?>
<main>
    <!-- HERO SECTION -->
    <section class="hero text-center d-flex align-items-center justify-content-center py-5 bg-dark text-white" 
        style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/abbys.jpg') center/cover no-repeat; height: 65vh;">

        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(74, 59, 59, 0.5);"></div>
        
        <div class="container position-relative" style="z-index: 1;">
            <h1 class="display-4" style="color: #FAF9F6;"><?php esc_html_e('Escape to Serenity', 'cozy-nest'); ?></h1>
            <p class="lead" style="color: #FAF9F6;"><?php esc_html_e('Discover cozy and relaxing staycations nestled in nature.', 'cozy-nest'); ?></p>
            <a href="stays.php" class="btn btn-lg" style="background-color: #A7C957; color: white;"><?php esc_html_e('Explore Stays', 'cozy-nest'); ?></a>
        </div>
    </section>

    <!-- TOP STAYCATION SECTION -->
    <section class="container py-5 top-section">
    <h2 class="text-center" style="color: #4A3B3B;">
        <?php esc_html_e('Our Top Staycations', 'cozy-nest'); ?>
    </h2>
    <div class="row justify-content-center">
        <?php
        $staycations = [
            [
                'name' => __('Cozy Cabin', 'cozy-nest'),
                'description' => __('Nestled in the woods, fresh air and experience a peaceful retreat.', 'cozy-nest'),
                'img' => 'cabin.webp'
            ],
            [
                'name' => __('Beach Villa', 'cozy-nest'),
                'description' => __('Wake up to ocean waves in our luxurious beachside retreat.', 'cozy-nest'),
                'img' => 'villa.jpg'
            ],
            [
                'name' => __('Mountain Lodge', 'cozy-nest'),
                'description' => __('Breathtaking views and fresh air await in the mountains.', 'cozy-nest'),
                'img' => 'lodge.jpg'
            ],
        ];

        foreach ($staycations as $stay) : ?>
            <div class="col-md-4">
                <div class="card shadow p-3" style="background-color: #FAF9F6;">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/' . $stay['img']); ?>" 
                        class="card-img-top" 
                        alt="<?php echo esc_attr($stay['name']); ?>" 
                        style="height: 250px; object-fit: cover;">
                    <h3 class="mt-3 text-center" style="color: #4A3B3B;"><?php echo esc_html($stay['name']); ?></h3>
                    <p class="text-center" style="color: #4A3B3B;"><?php echo esc_html($stay['description']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </section>


    <!-- ABOUT US SECTION -->
    <section class="about py-5 d-flex align-items-center" style="background-color: #A7C957; height: 300px;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <h2 style="color: #FAF9F6;">
                        <?php esc_html_e('Why Choose Cozy Nest?', 'cozy-nest'); ?>
                    </h2>
                    <p>
                        <?php esc_html_e('Our handpicked locations provide the perfect escape from everyday life. Whether you seek adventure, relaxation, or a mix of both, our stays are designed for comfort and tranquility.', 'cozy-nest'); ?>
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/cozy-nest.png'); ?>" alt="<?php esc_attr_e('Cozy Nest Logo', 'cozy-nest'); ?>">
                </div>
            </div>
        </div>
    </section>


    <!-- TESTIMONIALS SECTION -->
    <section class="container py-5 testimonials-container">
        <h2 class="text-center" style="color: #4A3B3B;">
            <?php esc_html_e('What Our Guests Say', 'cozy-nest'); ?>
        </h2>
        <div class="row justify-content-center">
            <?php
            $testimonials = [
                ['name' => 'Alice Johnson', 'review' => 'The cabin stay was magical! Peaceful and cozy, I will definitely be back.', 'img' => 'user.png'],
                ['name' => 'Mark Rivera', 'review' => 'The beach villa exceeded our expectations and great service.', 'img' => 'user.png'],
                ['name' => 'Sophie Lee', 'review' => 'I had the most relaxing time at the lakeside retreat. Highly recommended!', 'img' => 'user.png'],
            ];

            foreach ($testimonials as $testimonial) : ?>
                <div class="col-md-4">
                    <div class="testimonial-card shadow p-3 text-center">
                        <img 
                            src="<?php echo esc_url(get_template_directory_uri() . '/img/' . $testimonial['img']); ?>" 
                            alt="<?php esc_attr_e('Testimonial Image', 'cozy-nest'); ?>"
                            style="height: 100px; width: 30%; border-radius: 100%;" 
                            class="mb-3"
                        >
                        <p class="testimonial-review">
                            "<?php echo esc_html__($testimonial['review'], 'cozy-nest'); ?>"
                        </p>
                        <h4 class="testimonial-name">
                            - <?php echo esc_html($testimonial['name']); ?>
                        </h4>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- Newsletter Section -->
    <section class="signup position-relative d-flex flex-wrap align-items-center justify-content-center py-5" 
        style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/aestheticStay.jpg') center/cover no-repeat; height: 30vh;">
        
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255, 255, 255, 0.6); z-index: 1;"></div>

        <div class="container text-center position-relative" style="z-index: 2;">
            <h2 style="color: #4A3B3B;"><?php esc_html_e('Sign Up for Exclusive Offers', 'cozy-nest'); ?></h2>
            <p style="color: #4A3B3B;"><?php esc_html_e('Subscribe to get the latest staycation deals and updates.', 'cozy-nest'); ?></p>
            <form action="" method="post" class="d-flex flex-wrap justify-content-center">
                <input type="email" name="email" class="form-control w-50 me-2" 
                    placeholder="<?php echo esc_attr__('Enter your email', 'cozy-nest'); ?>" required>
                <button type="submit" class="btn" style="background-color: #A7C957; color: #4A3B3B;">
                    <?php esc_html_e('Sign Up', 'cozy-nest'); ?>
                </button>
            </form>
        </div>
    </section>


    <!-- CONTACT US SECTION -->
    <section id="contact-us" class="contact-us">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info-left">
                <h2><?php esc_html_e('Contact Us', 'cozy-nest'); ?></h2>
                <p><?php esc_html_e("We'd love to hear from you! Reach out for any inquiries, feedback, or just to say hello.", 'cozy-nest'); ?></p>
            </div>
            <div class="contact-content-right">
                <div class="contact-form">
                    <form action="submit_form.php" method="POST">
                        <label for="name"><?php esc_html_e('Full Name', 'cozy-nest'); ?></label>
                        <input type="text" id="name" name="name" required 
                            placeholder="<?php echo esc_attr__('Enter your full name', 'cozy-nest'); ?>">

                        <label for="email"><?php esc_html_e('Email', 'cozy-nest'); ?></label>
                        <input type="email" id="email" name="email" required 
                            placeholder="<?php echo esc_attr__('Enter your email', 'cozy-nest'); ?>">

                        <label for="message"><?php esc_html_e('Message', 'cozy-nest'); ?></label>
                        <textarea id="message" name="message" required 
                            placeholder="<?php echo esc_attr__('Write your message here...', 'cozy-nest'); ?>"></textarea>

                        <button type="submit"><?php esc_html_e('Send Message', 'cozy-nest'); ?></button>
                    </form>
                </div>
            </div>
        </div>
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

</main>
<?php get_footer(); ?>
