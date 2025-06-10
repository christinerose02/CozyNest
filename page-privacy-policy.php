<?php
/*
Template Name: Privacy Policy
*/

get_header(); ?>

<section class="privacy-policy-section py-5">
    <div class="privacy-container-wrapper position-relative">
        <div class="privacy-container z-index-2" 
             style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/aestheticStay.jpg') center/cover no-repeat; height: 100%; padding: 50px 20px;">
            
            <!-- Overlay only affecting the background -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

            <div class="privacy-container-content position-relative z-index-2">
                <h1><?php _e('Privacy Policy', 'cozy-nest'); ?></h1>
                
                <p class="last-updated"><?php _e('Last updated:', 'cozy-nest'); ?> <?php echo date('F j, Y'); ?></p>

                <div class="policy-section">
                    <h2 data-section="section1"><?php _e('1. Information We Collect', 'cozy-nest'); ?> <span class="toggle-icon">+</span></h2>
                    <div class="section-content" id="section1">
                        <p><?php _e('At cozy-nest, we value your privacy. We only collect personal data when it’s necessary for a cozy and seamless booking experience. This may include:', 'cozy-nest'); ?></p>
                        <ul>
                            <li><?php _e('Name, email, and contact details (when making a reservation)', 'cozy-nest'); ?></li>
                            <li><?php _e('Preferences to personalize your stay', 'cozy-nest'); ?></li>
                            <li><?php _e('Cookies for website functionality and analytics', 'cozy-nest'); ?></li>
                        </ul>
                    </div>
                </div>

                <div class="policy-section">
                    <h2 data-section="section2"><?php _e('2. How We Use Your Information', 'cozy-nest'); ?> <span class="toggle-icon">+</span></h2>
                    <div class="section-content" id="section2">
                        <p><?php _e('Your data helps us provide personalized staycation experiences, enhance our services, and ensure smooth communication with you.', 'cozy-nest'); ?></p>
                    </div>
                </div>

                <div class="policy-section">
                    <h2 data-section="section3"><?php _e('3. Cookies', 'cozy-nest'); ?> <span class="toggle-icon">+</span></h2>
                    <div class="section-content" id="section3">
                        <p><?php _e('We use cookies to remember your preferences and improve our site performance. You can manage your cookie settings through your browser.', 'cozy-nest'); ?></p>
                    </div>
                </div>
                
                <div class="policy-section">
                    <h2 data-section="section4"><?php _e('4. Third-Party Services', 'cozy-nest'); ?> <span class="toggle-icon">+</span></h2>
                    <div class="section-content" id="section4">
                        <p><?php _e('We may use trusted third-party services (like payment gateways or analytics tools) that collect data as needed. Please review their policies for more information.', 'cozy-nest'); ?></p>
                    </div>
                </div>

                <div class="policy-section">
                    <h2 data-section="section5"><?php _e('5. Your Rights', 'cozy-nest'); ?> <span class="toggle-icon">+</span></h2>
                    <div class="section-content" id="section5">
                        <p><?php _e('You have the right to access, update, or delete your personal data. We’re here to help you with that anytime.', 'cozy-nest'); ?></p>
                    </div>
                </div>

                <div class="policy-section">
                    <h2 data-section="section6"><?php _e('6. Contact Us', 'cozy-nest'); ?> <span class="toggle-icon">+</span></h2>
                    <div class="section-content" id="section6">
                        <p><?php _e('Questions about our privacy policy? Let’s chat! Reach out to us at:', 'cozy-nest'); ?> <strong>hello@cozy-nest.com</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    /* cozy-nest Privacy Policy Section */
.privacy-policy-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
    min-height: 100vh; /* Make sure it takes full viewport height */
}

.privacy-container-wrapper {
    width: 100%; /* Full width for the wrapper */
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

.privacy-container {
    width: 70%; /* Keep the width at 70% as before */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
    position: relative;
    background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/aestheticStay.jpg') center/cover no-repeat;
    height: auto;
    padding: 50px 20px;
}

.privacy-container .position-absolute {
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 1;
}

.privacy-container-content {
    position: relative;
    z-index: 2;
    color: #5b4636;
    text-align: center;
}

.privacy-container-content h1 {
    font-size: 2.5rem;
    font-weight: 600;
    color: white;
    margin-bottom: 20px;
}

.last-updated {
    font-size: 0.95rem;
    color: white;
    margin-bottom: 40px;
}

.policy-section {
    width: 100%;
    margin-bottom: 30px;
}

.policy-section h2 {
    font-size: 1.3rem;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff1ea;
    padding: 15px 20px;
    border-radius: 8px;
    color: #744c35;
    transition: background 0.3s;
}

.policy-section h2:hover {
    background-color: #ffe8dc;
}

.toggle-icon {
    font-weight: bold;
    font-size: 1.5rem;
    transition: transform 0.2s;
}

.section-content {
    display: none;
    padding: 15px 25px;
    border-left: 4px solid #dfbfa7;
    background-color: #fffaf7;
    margin-top: 5px;
    border-radius: 0 0 8px 8px;
    animation: fadeIn 0.2s ease-in-out;
}

.section-content ul {
    padding-left: 20px;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-5px); }
    to { opacity: 1; transform: translateY(0); }
}

</style>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const headers = document.querySelectorAll(".policy-section h2");

    headers.forEach(header => {
        header.addEventListener("click", function () {
            const sectionId = this.getAttribute("data-section");
            const content = document.getElementById(sectionId);

            const isVisible = content.style.display === "block";

            // Close all sections
            document.querySelectorAll(".section-content").forEach(sec => sec.style.display = "none");
            document.querySelectorAll(".toggle-icon").forEach(icon => icon.textContent = "+");

            // Toggle current
            if (!isVisible) {
                content.style.display = "block";
                this.querySelector(".toggle-icon").textContent = "−";
            }
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






<?php get_footer(); ?>
