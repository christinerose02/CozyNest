<?php 
/* Template Name: Single Staycation */
get_header();

$stay_slug = isset($_GET['stay_slug']) ? sanitize_title($_GET['stay_slug']) : '';

// Default options
$default_durations = array(
    __('Overnight', 'cozy-nest'), 
    __('Weekend Getaway', 'cozy-nest'), 
    __('Full Week', 'cozy-nest')
); 

$default_add_ons = array(
    __('Breakfast Included', 'cozy-nest'), 
    __('Late Checkout', 'cozy-nest'), 
    __('Spa Access', 'cozy-nest'), 
    __('Airport Pickup', 'cozy-nest')
);

// Staycation packages
$staycations = [
    [__("Cozy Cabin", "cozy-nest"), __("Nestled in the woods, enjoy fresh air and a peaceful retreat.", "cozy-nest"), "cabin.webp", "mountain", __("₱3,200/night", "cozy-nest"), 4.8, "Woodland Grove", 4],
    [__("Mountain Lodge", "cozy-nest"), __("Breathtaking views and fresh air await in the mountains.", "cozy-nest"), "lodge.jpg", "mountain", __("₱3,800/night", "cozy-nest"), 4.7, "Summit Peak", 6],
    [__("Lakeside Retreat", "cozy-nest"), __("Relax by water with stunning lakeside views that gentle ripples and create a calming rhythm.", "cozy-nest"), "lake.jpg", "mountain", __("₱3,500/night", "cozy-nest"), 4.6, "Lake Aurora", 3],
    [__("Forest Hideaway", "cozy-nest"), __("Escape into nature with a secluded forest retreat.", "cozy-nest"), "forest.jpg", "mountain", __("₱2,900/night", "cozy-nest"), 4.5, "Whispering Woods", 2],
    [__("Hillside Haven", "cozy-nest"), __("Wake up to misty mornings and panoramic hillside views.", "cozy-nest"), "hillside.jpg", "mountain", __("₱3,100/night", "cozy-nest"), 4.6, "Cloudtop Ridge", 5],
    [__("Pinecrest Chalet", "cozy-nest"), __("Cozy up in a charming chalet surrounded by pine trees.", "cozy-nest"), "chalet.jpg", "mountain", __("₱3,400/night", "cozy-nest"), 4.7, "Pinecrest Valley", 4],

    [__("Beach Villa", "cozy-nest"), __("Wake up to ocean waves in our luxurious beachside retreat.", "cozy-nest"), "villa.jpg", "beach", __("₱4,500/night", "cozy-nest"), 4.9, "Sandy Shores", 5],
    [__("Seaside Bungalow", "cozy-nest"), __("Experience the charm of coastal living to a serene haven where the waves meets", "cozy-nest"), "bungalow.jpg", "beach", __("₱3,800/night", "cozy-nest"), 4.7, "Coral Cove", 3],
    [__("Riverfront Haven", "cozy-nest"), __("Calm river views and quiet mornings await in the soothing sounds of gently flowing water.", "cozy-nest"), "riverfront.avif", "beach", __("₱4,000/night", "cozy-nest"), 4.6, "Riverbend", 4],
    [__("Tropical Paradise", "cozy-nest"), __("Sun, sand, and serenity in every stay beachside retreat where the sun kisses your skin,", "cozy-nest"), "tropical.jpg", "beach", __("₱4,700/night", "cozy-nest"), 4.8, "Palm Bay", 6],
    [__("Coastal Cottage", "cozy-nest"), __("Chill out with ocean breezes and coastal charm sweep over you as you unwind in a cozy retreat.", "cozy-nest"), "coastal.jpg", "beach", __("₱3,900/night", "cozy-nest"), 4.7, "Azure Coast", 4],
    [__("Coral Sands Retreat", "cozy-nest"), __("Soak in the sun with beachfront views and gentle waves.", "cozy-nest"), "coral-sands.jpg", "beach", __("₱4,400/night", "cozy-nest"), 4.7, "Coral Reef Point", 6],

    [__("Skyline Penthouse", "cozy-nest"), __("Luxury and city lights from your private penthouse.", "cozy-nest"), "penthouse.jpg", "city", __("₱5,200/night", "cozy-nest"), 4.9, "Metro Heights", 4],
    [__("Urban Loft", "cozy-nest"), __("Stylish and modern city experience where urban sophistication meets contemporary comfort.", "cozy-nest"), "urban.webp", "city", __("₱3,900/night", "cozy-nest"), 4.5, "Downtown Central", 2],
    [__("Garden Villa", "cozy-nest"), __("Greenery and elegance in the heart of city to urban oasis where greenery meets.", "cozy-nest"), "garden.jpg", "city", __("₱4,200/night", "cozy-nest"), 4.7, "Verdant Grove", 4],
    [__("Rustic Barnhouse", "cozy-nest"), __("Charming rustic vibes with comfort space that effortlessly combines warmth of rustic charm.", "cozy-nest"), "barnhouse.jpg", "city", __("₱3,300/night", "cozy-nest"), 4.4, "Old Town", 3],
    [__("The Olive House", "cozy-nest"), __("A peaceful modern home tucked in a quiet city neighborhood.", "cozy-nest"), "olive-house.webp", "city", __("₱4,100/night", "cozy-nest"), 4.7, "Greenfield Estates", 4],
    [__("Brickstone House", "cozy-nest"), __("Classic charm meets city convenience in this full private home.", "cozy-nest"), "brickstone-house.webp", "city", __("₱4,300/night", "cozy-nest"), 4.8, "Heritage Row", 5],
];


// Find the selected staycation
$selected_stay = null;
foreach ($staycations as $stay) {
    if (sanitize_title($stay[0]) === $stay_slug) {
        $selected_stay = $stay;
        break;
    }
}
?>

<main class="staycation-container my-5" id="main-content" role="main">
    <?php if (!empty($selected_stay)) : ?>
        <div class="container">
            <div class="row">
                <!-- Left Column: Image + Stay Details -->
                <div class="col-md-6 left">
                    <div class="stay-image mb-4 text-center">
                        <?php 
                            $image_url = esc_url(get_template_directory_uri() . '/img/' . sanitize_file_name($selected_stay[2]));
                        ?>
                        <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr($selected_stay[0]); ?>" class="img-fluid rounded shadow-sm">
                    </div>

                    <div class="stay-details text-start px-3">
                        <h1 class="mb-3 d-flex justify-content-between align-items-center">
                            <?php echo esc_html($selected_stay[0]); ?>
                            <span class="stay-price h4 text-success ms-3">
                                <?php echo esc_html($selected_stay[4]); ?>
                            </span>
                        </h1>
                        <p class="stay-description mb-4"><?php echo esc_html($selected_stay[1]); ?></p>

                        <!-- List Details -->
                        <ul class="list-unstyled small text-start mb-4 ps-1 custom-stay-details">
                            <li><i class="bi bi-person-fill me-2"></i><strong><?php _e('Sleeps:', 'cozy-nest'); ?></strong> <?php echo esc_html($selected_stay[7]); ?></li>
                            <li><i class="bi bi-star-fill text-warning me-2"></i><strong><?php _e('Rating:', 'cozy-nest'); ?></strong> <?php echo esc_html($selected_stay[5]); ?> / 5</li>
                            <li><i class="bi bi-clock-fill me-2"></i><strong><?php _e('Check-in:', 'cozy-nest'); ?></strong> 2:00 PM</li>
                        </ul>

                    </div>
                </div>

                <!-- Right Column: Booking Form + Options -->
                <div class="col-md-6 right">
                    <div class="booking-form text-start">
                        <h4><?php _e('Book Your Stay', 'cozy-nest'); ?></h4>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="adults" class="form-label"><?php _e('Number of Adults', 'cozy-nest'); ?></label>
                                <input type="number" id="adults" name="adults" class="form-control" min="1" value="1" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="kids" class="form-label"><?php _e('Number of Kids', 'cozy-nest'); ?></label>
                                <input type="number" id="kids" name="kids" class="form-control" min="0" value="0">
                            </div>

                            <div class="mb-3">
                                <label for="check-in" class="form-label"><?php _e('Check-In Date', 'cozy-nest'); ?></label>
                                <input type="date" id="check-in" name="check-in" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="check-out" class="form-label"><?php _e('Check-Out Date', 'cozy-nest'); ?></label>
                                <input type="date" id="check-out" name="check-out" class="form-control" required>
                            </div>
                            
                             <!-- Options: Duration + Extras -->
                            <div class="stay-options-container mt-4 p-4 rounded shadow-sm text-start">
                                <h5 class="mb-3"><?php _e('Choose Duration:', 'cozy-nest'); ?></h5>
                                <div class="stay-options mb-3">
                                    <?php foreach ($default_durations as $duration) : ?>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="duration" value="<?php echo esc_attr($duration); ?>" id="duration-<?php echo esc_attr($duration); ?>">
                                            <label class="form-check-label" for="duration-<?php echo esc_attr($duration); ?>">
                                                <?php echo esc_html($duration); ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <h5 class="mt-4 mb-3"><?php _e('Add Extras:', 'cozy-nest'); ?></h5>
                                <div class="stay-options">
                                    <?php foreach ($default_add_ons as $addon) : ?>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="add_on[]" value="<?php echo esc_attr($addon); ?>" id="addon-<?php echo esc_attr($addon); ?>">
                                            <label class="form-check-label" for="addon-<?php echo esc_attr($addon); ?>">
                                                <?php echo esc_html($addon); ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100"><?php _e('Book Now', 'cozy-nest'); ?></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    <?php else : ?>
        <p class="text-center"><?php _e('Staycation package not found.', 'cozy-nest'); ?></p>
    <?php endif; ?>
</main>





<style>

    .booking-form h4{
        font-size: 35px;
        font-weight: 600;
        margin-top: -10%;
    }

    .booking-form .list-unstyled li{
        font-size: 20px;
    }

    .staycation-container .left{
        padding: 40px;
    }

    .staycation-container .right{
        padding: 40px;
    }

    .booking-form .custom-stay-details {
        font-size: 1.25rem;  /* Increase font size */
        line-height: 1.5;   /* Increase line height for better spacing */
    }


    .custom-form-width {
        width: 100%; /* Adjust this value as needed */
        margin: 0 auto; /* Centers the form */
    }

    .staycation-container {
        background-color: #fff;
        padding: 5rem 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 70%;
        height: 100vh;
        margin: 0 auto; /* Centers the container horizontally */
        border-radius: 20px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .staycation-container .container {
        margin-left: 5%;
        margin-top: 5%;
    }

    .stay-image img {
        margin-top: -7%;
        width: 100%;
        max-width: 200%;
        border-radius: 20px;
    }

    .stay-info-booking {
        margin-top: 3rem;
        display: flex;
        justify-content: center;
        gap: 2rem;
    }

    .stay-details {
        max-width: 500px;
        width: 100%;
    }

    .stay-details h1{
        font-weight: 600;
    }

    .stay-description {
        font-size: 18px;
    }

    .stay-options-container{
        margin-left: -5%;
    }
    .stay-option {
        margin-right: 1rem;
    }

    .booking-form {
        max-width: 400px;
        width: 100%;
    }

    .popular-stays {
        background-color: #f8f9fa;
    }

    .popular-card {
        transition: transform 0.3s ease;
        border-radius: 10px;
        overflow: hidden; /* Ensures rounded corners for images */
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .popular-card:hover {
        transform: translateY(-5px);
    }

    .card-img-top {
        border-bottom: 2px solid #ddd;
        object-fit: cover;
        height: 200px;
    }

    .card-body {
        padding: 1.5rem;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .card-text {
        font-size: 0.95rem;
        color: #555;
        margin: 1rem 0;
    }

    .btn-outline-primary {
        font-size: 0.875rem;
        padding: 0.5rem 1rem;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-primary{
        border: none;
    }

    .btn-primary:hover{
        cursor: pointer;
    }
    
    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
    }

    .stay-item {
        display: flex;
        justify-content: center;
    }

    .stay-name {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
    }

    .text-muted {
        font-size: 0.9rem;
    }

    @media (max-width: 576px) {
        .stay-item {
            margin-bottom: 2rem;
        }
    }

</style>



<!-- List of Staycation Spots -->
<section class="top-stays py-5">
    <h1 class="text-center mb-4 text-centers"><?php _e('Popular Staycation Spots', 'cozy-nest'); ?></h1>
    <div class="container text-center stays-container">
        <div class="row row-cols-1 row-cols-md-3 g-4 rowStay" id="stay-items">
        <?php 
            $all_stays = [
                [__('Cozy Cabin', 'cozy-nest'), __('Nestled in the woods, enjoy fresh air and a peaceful retreat.', 'cozy-nest'), 'cabin.webp', 'mountain', '₱3,200/night', 4.8, __('Woodland Grove', 'cozy-nest'), 4],
                [__('Beach Villa', 'cozy-nest'), __('Wake up to ocean waves in our luxurious beachside retreat.', 'cozy-nest'), 'villa.jpg', 'beach', '₱4,500/night', 4.9, __('Sandy Shores', 'cozy-nest'), 5],
                [__('Skyline Penthouse', 'cozy-nest'), __('Luxury and city lights from your private penthouse.', 'cozy-nest'), 'penthouse.jpg', 'city', '₱5,200/night', 4.9, __('Metro Heights', 'cozy-nest'), 4],
            ];
            
            foreach ($all_stays as $stay) {
                $image_url = wp_get_attachment_url($stay[2]);
                if (!$image_url) {
                    $image_url = get_theme_file_uri("/img/" . esc_attr($stay[2]));
                }
        ?>
            <div class="col stay-item" data-category="<?php echo esc_attr($stay[3]); ?>">
                <div class="card shadow p-3 text-center h-100 stay-card">
                    <img src="<?php echo esc_url($image_url); ?>" class="stay-img card-img-top rounded" alt="<?php echo esc_attr($stay[0]); ?>">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h3 class="card-title d-flex justify-content-between align-items-center">
                                <span class="stay-name"><?php echo esc_html($stay[0]); ?></span>
                                <span class="text-muted fs-6"><?php echo esc_html($stay[4]); ?></span>
                            </h3>
                            <?php if (!empty($stay[6])): ?>
                                <p class="text-muted small mb-1"><i class="bi bi-geo-alt-fill me-1"></i><?php echo esc_html($stay[6]); ?></p>
                            <?php endif; ?>
                            <p class="card-text mb-3"><?php echo esc_html($stay[1]); ?></p>
                            <ul class="list-unstyled small text-start mb-3 ps-3">
                                <li><i class="bi bi-person-fill me-2"></i><strong><?php _e('Sleeps:', 'cozy-nest'); ?></strong> <?php echo esc_html($stay[7]); ?></li>
                                <li><i class="bi bi-star-fill text-warning me-2"></i><strong><?php _e('Rating:', 'cozy-nest'); ?></strong> <?php echo esc_html($stay[5]); ?> / 5</li>
                                <li><i class="bi bi-clock-fill me-2"></i><strong><?php _e('Check-in:', 'cozy-nest'); ?></strong> 2:00 PM</li>
                            </ul>
                        </div>
                        <a href="<?php echo esc_url(home_url('/single-staycation/?stay_slug=' . sanitize_title($stay[0]))); ?>" class="btn btn-primary custom-btn mt-auto w-100"><?php esc_html_e('View Details', 'cozy-nest'); ?></a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>


<style>
    .top-stays .row.g-4 {
        --bs-gutter-x: 1rem; /* Reduce horizontal gap */
        --bs-gutter-y: 2rem; /* Reduce vertical gap */
    }

  .stays-container {
    margin-top: -5%;
    padding: 60px 0;
}

.text-centers{
    font-size: 50px;
    font-weight: 600;
    padding: 40px;
}

.stay-card {
    background-color: #FAF9F6;
    border-radius: 20px;
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;
    font-size: 1rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    width: 100%;
    max-width: 150%;
    height: 100%;
}

/* .stay-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
} */

.stay-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-top-left-radius: 12px;
    margin-bottom: 15px;
}


.stay-card .card-title {
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 10px;
    color: #4A3B3B;
}

.stay-card .card-title  .stay-name{
    font-size: 1.6rem;
}
.stay-card .text-muted.fs-6 {
    font-size: 1rem;
}

.stay-card p.card-text {
    font-size: 0.95rem;
    margin-bottom: 10px;
    color: #4A3B3B;
}

.stay-card ul {
    padding-left: 0;
    list-style: none;
    text-align: left;
    font-size: 0.95rem;
}

.stay-card ul li {
    margin-bottom: 0.4rem;
    color: #333;
}

.stay-card h3 {
    color: #4A3B3B;
    font-size: 1.3rem;
    margin-top: 10px;
}

.stay-card p {
    color: #4A3B3B;
    font-size: 0.9rem;
    padding: 0 10px;
    flex-grow: 1;
}

.stay-card .btn {
    margin-top: auto;
    font-size: 0.95rem;
    padding: 10px 0;
    background-color: #A7C957;
    border: none;
}

.stay-card .btn:hover {
    background-color: #F5E1DA;
    color: #4A3B3B;
}

/* Ensures equal spacing between cards */
.row.g-4 {
    --bs-gutter-y: 1.5rem; /* Adjusts vertical spacing between rows */
}

/* Ensures equal spacing at the bottom of the section */
.stays-container .row {
    margin-bottom: 0;
    padding-bottom: 2rem; /* Adjust to match vertical spacing */
}

</style>














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
