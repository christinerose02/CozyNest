<?php
/* Template Name: Testimonials */
get_header(); 
?>

<section class="container py-5 testimonials-container">
    <h2 class="text-center mb-5" style="color: #4A3B3B; font-family: 'Arial', sans-serif; font-weight: bold;">What Our Guests Say</h2>
    <div class="row justify-content-center g-4">
        <?php
        // Testimonials data
        $testimonials = [
            ['name' => 'Alice Johnson', 'review' => 'The cabin stay was magical! Peaceful and cozy, I will definitely be back.', 'img' => 'villa.jpg', 'stay' => 'Cozy Cabin', 'date' => 'March 2025', 'rating' => 5],
            ['name' => 'Mark Rivera', 'review' => 'The beach villa exceeded our expectations and great service.', 'img' => 'villa.jpg', 'stay' => 'Beach Villa', 'date' => 'April 2025', 'rating' => 4],
            ['name' => 'Sophie Lee', 'review' => 'I had the most relaxing time at the lakeside retreat. Highly recommended!', 'img' => 'villa.jpg', 'stay' => 'Lakeside Retreat', 'date' => 'February 2025', 'rating' => 5],
            ['name' => 'James Smith', 'review' => 'A perfect getaway. The villa was beautiful, and the staff was amazing!', 'img' => 'villa.jpg', 'stay' => 'Mountain Villa', 'date' => 'January 2025', 'rating' => 5],
            ['name' => 'Olivia Brown', 'review' => 'The best experience of my life. I couldn’t have asked for a better vacation.', 'img' => 'villa.jpg', 'stay' => 'Luxury Suite', 'date' => 'December 2024', 'rating' => 5],
            ['name' => 'Emma Wilson', 'review' => 'Such a peaceful and relaxing stay! Can’t wait to come back next year.', 'img' => 'villa.jpg', 'stay' => 'Garden Cottage', 'date' => 'November 2024', 'rating' => 4],
        ];

        // Loop through testimonials
        foreach ($testimonials as $testimonial) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card shadow-lg p-4">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/' . $testimonial['img']); ?>" alt="Testimonial Image">
                    <h5 class="mb-1" style="color: #4A3B3B;"><?php echo $testimonial['stay']; ?></h5>
                    <small class="text-muted d-block mb-2"><?php echo $testimonial['date']; ?></small>
                    <p class="testimonial-review">"<?php echo $testimonial['review']; ?>"</p>
                    <div class="stars mb-2">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <span style="color: <?php echo $i < $testimonial['rating'] ? '#FFD700' : '#ccc'; ?>">★</span>
                        <?php endfor; ?>
                    </div>
                    <h5 class="testimonial-name mb-0">- <?php echo $testimonial['name']; ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<style>
    .testimonials-container {
        padding: 80px 0;
        margin-bottom: 5%;
    }

    .testimonials-container h2{
        font-size: 45px;
        font-weight: 600;
        padding: 20px;
    }

    .testimonial-card {
        background: #ffffff;
        border-radius: 16px;
        text-align: center;
        max-width: 100%;
        min-height: 380px;
        transition: transform 0.3s ease-in-out;
        border: 1px solid #eee;
    }

    .testimonial-card:hover {
        transform: translateY(-8px);
    }

    .testimonial-img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #4A3B3B;
    }

    .testimonial-review {
        font-size: 1.05rem;
        color: #4A3B3B;
        font-style: italic;
        margin: 15px 0;
        padding: 0 10px;
    }

    .testimonial-name {
        font-size: 1.1rem;
        font-weight: bold;
        color: #4A3B3B;
    }

    .stars span {
        font-size: 1.2rem;
    }

    @media (max-width: 768px) {
        .testimonial-card {
            min-height: auto;
        }
    }
</style>







<!---Quick Links Section -->
<section class="quicklinks py-5" style="background-color: #FFF8F0;">
    <div class="container">
        <div class="row text-center">
            <!-- Logo Column -->
            <div class="col-md-3 mb-4 mb-md-0 d-flex flex-column align-items-center">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cozy-nest.png" alt="Cozy Nest Logo" style="max-width: 150px;">
                <p class="mt-2" style="color: #4A3B3B;">Your cozy escape starts here.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3 mb-4 mb-md-0 d-flex flex-column align-items-center">
                <h5 class="fw-bold" style="color: #4A3B3B;">Quick Links</h5>
                <ul class="list-unstyled text-center">
                    <li class="nav-item " style="color: #4A3B3B;">
                        <a class="nav-link <?php echo esc_attr(is_page('stays') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/stays')); ?>">
                            <?php echo esc_html(__('Our Stays', 'cozy-nest')); ?>
                        </a>
                    </li>
                    <li class="nav-item" style="color: #4A3B3B;">
                        <a class="nav-link <?php echo esc_attr(is_page('about-us') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/about-us')); ?>">
                            <?php echo esc_html(__('About Us', 'cozy-nest')); ?>
                        </a>
                    </li>
                    <li class="nav-item" style="color: #4A3B3B;">
                        <a class="nav-link <?php echo esc_attr(is_page('contact') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/contact-us')); ?>">
                            <?php echo esc_html(__('Contact', 'cozy-nest')); ?>
                        </a>
                    </li>

                    <li class="nav-item" style="color: #4A3B3B;">
                        <a class="nav-link <?php echo esc_attr(is_page('testimonials') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/testimonials')); ?>">
                            <?php echo esc_html(__('Testimonials', 'cozy-nest')); ?>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Helpful Info -->
            <div class="col-md-3 mb-4 mb-md-0 d-flex flex-column align-items-center">
                <h5 class="fw-bold" style="color: #4A3B3B;">Helpful Info</h5>
                <ul class="list-unstyled text-center">
                    <li class="nav-item" style="color: #4A3B3B;">
                        <a class="nav-link <?php echo esc_attr(is_page('faq') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/faq')); ?>" >
                            <?php echo esc_html(__('FAQ', 'cozy-nest')); ?>
                        </a>
                    </li>

                    <li class="nav-item" style="color: #4A3B3B;">
                        <a class="nav-link <?php echo esc_attr(is_page('privacy-policy') ? 'active' : ''); ?>" href="<?php echo esc_url(home_url('/privacy-policy')); ?>">
                            <?php echo esc_html(__('Privacy Policy', 'cozy-nest')); ?>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="col-md-3 d-flex flex-column align-items-center socials">
                <h5 class="fw-bold" style="color: #4A3B3B;">Follow Us</h5>
                <div>
                    <a href="#" class="me-3" style="color: #4A3B3B;">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/fblogo.png" alt="Facebook Logo" style="max-width: 30px;">
                    </a>

                    <a href="#" class="me-3" style="color: #4A3B3B;">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/iglogo.webp" alt="Instagram Logo" style="max-width: 30px;">
                    </a>

                    <a href="#" class="me-3" style="color: #4A3B3B;">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/xlogo.png" alt="X Logo" style="max-width: 30px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
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
