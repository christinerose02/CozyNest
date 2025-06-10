<?php
/* Template Name: Contact Us Page */
get_header(); ?>

<section class="contact-header text-center py-5 position-relative"
    style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/swim.jpg') center/cover no-repeat; height: 30vh;">
    
    <!-- Overlay -->
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
    
    <!-- Content -->
    <div class="container position-relative" style="z-index: 2;">
        <h1 class="display-5 fw-bold" style="color: #fff;"><?php _e("Let’s Make Your Stay Memorable 💌", "cozy-nest"); ?></h1>
        <p class="lead" style="color: #e0dcdc;"><?php _e("Have questions or special requests? We’re just a message away!", "cozy-nest"); ?></p>
    </div>
</section>










<section id="contact-us" class="contact-us">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info-left">
                <h2><?php _e('Contact Us', 'cozy-nest'); ?></h2>
                <p><?php _e("We'd love to hear from you! Reach out for any inquiries, feedback, or just to say hello.", 'cozy-nest'); ?></p>
            </div>
            <div class="contact-content-right">
                <div class="contact-form">
                    <form action="submit_form.php" method="POST">
                        <label for="name"><?php _e('Full Name', 'cozy-nest'); ?></label>
                        <input type="text" id="name" name="name" required>

                        <label for="email"><?php _e('Email', 'cozy-nest'); ?></label>
                        <input type="email" id="email" name="email" required>

                        <label for="message"><?php _e('Message', 'cozy-nest'); ?></label>
                        <textarea id="message" name="message" required></textarea>

                        <button type="submit"><?php _e('Send Message', 'cozy-nest'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

















<section class="contact-infos-section py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Left: Map -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="map-container ratio ratio-16x9">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.9364208378554!2d120.9433!3d14.1234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0000000000000000!2sPeaceful+Pines%2C+Tagaytay!5e0!3m2!1sen!2sph!4v0000000000000"
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Right: Contact Details -->
      <div class="col-md-6 text-start contact-detail">
        <h2 class="fw-bold mb-4" style="color: #4A3B3B;"><?php _e('Get in Touch 🌿', 'cozy-nest'); ?></h2>
        <div class="more-info">
          <p><strong>📍 <?php _e('Address:', 'cozy-nest'); ?></strong> <?php _e('Brgy. Peaceful Pines, Tagaytay', 'cozy-nest'); ?></p>
          <p><strong>📞 <?php _e('Phone:', 'cozy-nest'); ?></strong> 0912 345 6789</p>
          <p><strong>📧 <?php _e('Email:', 'cozy-nest'); ?></strong> hello@coazynest.ph</p>
          <p><strong>🕰️ <?php _e('Hours:', 'cozy-nest'); ?></strong> <?php _e('Open Daily: 9:00 AM – 6:00 PM', 'cozy-nest'); ?></p>
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



<?php get_footer(); ?>