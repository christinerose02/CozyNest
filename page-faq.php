<?php
/* Template Name: FAQ */
get_header();
?>

<div class="faq-container z-index-2" 
     style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/aestheticStay.jpg') center/cover no-repeat; height: 100%; padding: 50px 20px; position: relative;">
    
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

    <div class="faq-content z-index-2">
        <h1><?php _e('Frequently Asked Questions', 'cozy-nest'); ?></h1>
            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question"><?php _e('What is cozy-nest?', 'cozy-nest'); ?></button>
                    <div class="faq-answer">
                        <p><?php _e('cozy-nest is your ultimate staycation destination, providing a serene and cozy experience for everyone.', 'cozy-nest'); ?></p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><?php _e('How do I make a reservation?', 'cozy-nest'); ?></button>
                    <div class="faq-answer">
                        <p><?php _e('You can make a reservation directly through our website by filling out the booking form or contacting us directly.', 'cozy-nest'); ?></p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><?php _e('What are the amenities offered?', 'cozy-nest'); ?></button>
                    <div class="faq-answer">
                        <p><?php _e('We offer a range of amenities including a spa, pool, free Wi-Fi, and comfortable rooms with scenic views.', 'cozy-nest'); ?></p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><?php _e('What is the check-in/check-out time?', 'cozy-nest'); ?></button>
                    <div class="faq-answer">
                        <p><?php _e('Check-in time is from 2:00 PM, and check-out is by 12:00 PM. Special arrangements can be made upon request.', 'cozy-nest'); ?></p>
                    </div>
                </div>
                <!-- Added FAQs -->
                <div class="faq-item">
                    <button class="faq-question"><?php _e('Do you provide transportation services?', 'cozy-nest'); ?></button>
                    <div class="faq-answer">
                        <p><?php _e('Yes, we provide transportation services to and from the nearest airport and bus terminals. Please contact us for more details.', 'cozy-nest'); ?></p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><?php _e('Is breakfast included in the package?', 'cozy-nest'); ?></button>
                    <div class="faq-answer">
                        <p><?php _e('Yes, breakfast is included in all staycation packages. Enjoy a variety of fresh, locally sourced breakfast options each morning.', 'cozy-nest'); ?></p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><?php _e('Can I bring pets to cozy-nest?', 'cozy-nest'); ?></button>
                    <div class="faq-answer">
                        <p><?php _e('We are a pet-friendly facility! You are welcome to bring your furry friends. Please inform us in advance for any special accommodations.', 'cozy-nest'); ?></p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><?php _e('What is your cancellation policy?', 'cozy-nest'); ?></button>
                    <div class="faq-answer">
                        <p><?php _e('Our cancellation policy allows free cancellation up to 48 hours before your check-in date. After that, a cancellation fee will apply.', 'cozy-nest'); ?></p>
                    </div>
                </div>
            </div>
    </div>
</div>




<script>
    // FAQ Toggle Script
document.addEventListener('DOMContentLoaded', function () {
    const faqButtons = document.querySelectorAll('.faq-question');

    faqButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const answer = this.nextElementSibling;
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        });
    });
});

</script>






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

<?php
get_footer();
?>

