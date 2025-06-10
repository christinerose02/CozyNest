<?php
/* Template Name: Account Page */
get_header(); ?>

<div class="container-fluid" style="width: 70%; height: 150vh;">
    <div class="row g-0" style="height: 60%;">
        <!-- Left Side: Background Image with Branding -->
        <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center position-relative" 
            style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/tropicals.jpg') center/cover no-repeat;">

            <!-- Semi-transparent overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100" 
                 style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

            <!-- Content (branding) -->
            <div class="text-center text-white" style="padding: 40px; border-radius: 20px; z-index: 2;">
                <h1 class="display-4 fw-bold" style="font-family: 'Georgia', serif;"><?php _e( 'Cozy Nest', 'cozy-nest' ); ?></h1>
                <p class="lead mb-0" style="font-family: 'Georgia', serif;"><?php _e( 'Your cozy escape starts here.', 'cozy-nest' ); ?></p>
            </div>
        </div>

        <!-- Right Side: Forms -->
        <div class="col-md-6 d-flex align-items-center justify-content-center bg-white forms">
            <div class="w-75">
                <!-- Sign In Form -->
                <div id="signInForm">
                    <h3 class="text-center mb-4" style="color: #4A3B3B;"><?php _e( 'Log in with your account', 'cozy-nest' ); ?></h3>
                    <form action="process_login.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" style="color: #4A3B3B;"><?php _e( 'Email', 'cozy-nest' ); ?></label>
                            <input type="email" class="form-control" name="signin_email" placeholder="<?php _e( 'Enter Email Address', 'cozy-nest' ); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="color: #4A3B3B;"><?php _e( 'Password', 'cozy-nest' ); ?></label>
                            <input type="password" class="form-control" name="signin_password" placeholder="<?php _e( 'Enter Password', 'cozy-nest' ); ?>" required>
                        </div>
                        <div class="d-grid mb-2">
                            <button type="submit" class="btn" style="background-color: #A7C957; color: #4A3B3B;"><?php _e( 'Login', 'cozy-nest' ); ?></button>
                        </div>
                        <div class="text-center">
                            <small style="color: #4A3B3B;"><?php _e( "Don't have an account?", 'cozy-nest' ); ?> <a href="#" onclick="toggleForms()" style="color: #A7C957;"><?php _e( 'Sign Up', 'cozy-nest' ); ?></a></small>
                        </div>
                    </form>
                </div>

                <!-- Sign Up Form -->
                <div id="signUpForm" style="display: none;">
                    <h3 class="text-center mb-4" style="color: #4A3B3B;"><?php _e( 'Create an Account', 'cozy-nest' ); ?></h3>
                    <form action="process_register.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" style="color: #4A3B3B;"><?php _e( 'Full Name', 'cozy-nest' ); ?></label>
                            <input type="text" class="form-control" name="fullname" placeholder="<?php _e( 'Enter Full Name', 'cozy-nest' ); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="color: #4A3B3B;"><?php _e( 'Email', 'cozy-nest' ); ?></label>
                            <input type="email" class="form-control" name="email" placeholder="<?php _e( 'Enter Email Address', 'cozy-nest' ); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="color: #4A3B3B;"><?php _e( 'Password', 'cozy-nest' ); ?></label>
                            <input type="password" class="form-control" name="password" placeholder="<?php _e( 'Enter Password', 'cozy-nest' ); ?>" required>
                        </div>
                        <div class="d-grid mb-2">
                            <button type="submit" class="btn" style="background-color: #A7C957; color: #4A3B3B;"><?php _e( 'Sign Up', 'cozy-nest' ); ?></button>
                        </div>
                        <div class="text-center">
                            <small style="color: #4A3B3B;"><?php _e( 'Already have an account?', 'cozy-nest' ); ?> <a href="#" onclick="toggleForms()" style="color: #A7C957;"><?php _e( 'Login', 'cozy-nest' ); ?></a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<script>
    const signInForm = document.getElementById("signInForm");
    const signUpForm = document.getElementById("signUpForm");
    const showSignInBtn = document.getElementById("showSignIn");
    const showSignUpBtn = document.getElementById("showSignUp");

    function toggleForms() {
        signInForm.style.display = signInForm.style.display === "none" ? "block" : "none";
        signUpForm.style.display = signUpForm.style.display === "none" ? "block" : "none";
    }

    showSignInBtn.addEventListener("click", () => {
        signInForm.style.display = "block";
        signUpForm.style.display = "none";
    });

    showSignUpBtn.addEventListener("click", () => {
        signInForm.style.display = "none";
        signUpForm.style.display = "block";
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