<?php /* Template Name: Stays Page */ ?>
<?php get_header(); ?>

<main class="container my-5" id="main-content" role="main">
<h1 class="text-center mb-4 text-centers"><?php echo __('Our Staycation Spots', 'cozy-nest'); ?></h1>

<!-- Categories Navigation -->
<ul class="nav nav-pills justify-content-center mb-4" id="stay-categories">
    <li class="nav-item"><a class="nav-link active" href="#all" data-category="all"><?php esc_html_e('All', 'cozy-nest'); ?></a></li>
    <li class="nav-item"><a class="nav-link" href="#beach" data-category="beach"><?php esc_html_e('Beach & Waterfront', 'cozy-nest'); ?></a></li>
    <li class="nav-item"><a class="nav-link" href="#mountain" data-category="mountain"><?php esc_html_e('Nature Retreats', 'cozy-nest'); ?></a></li>
    <li class="nav-item"><a class="nav-link" href="#city" data-category="city"><?php esc_html_e('Rustic & Cozy', 'cozy-nest'); ?></a></li>
</ul>




<!-- List of Staycation Spots -->
<section class="top-stays py-5">
    <div class="container text-center stays-container">
        <div class="row row-cols-1 row-cols-md-3 g-4 rowStay" id="stay-items">
        <?php 
            $all_stays = [
                [__("Cozy Cabin", "cozy-nest"), __("Nestled in the woods, enjoy fresh air and a peaceful retreat.", "cozy-nest"), "cabin.webp", "mountain", "₱3,200/night", 4.8, __("Woodland Grove", "cozy-nest"), 4],
                [__("Mountain Lodge", "cozy-nest"), __("Breathtaking views and fresh air await in the mountains.", "cozy-nest"), "lodge.jpg", "mountain", "₱3,800/night", 4.7, __("Summit Peak", "cozy-nest"), 6],
                [__("Lakeside Retreat", "cozy-nest"), __("Relax by water with stunning lakeside views that gentle ripples and create a calming rhythm.", "cozy-nest"), "lake.jpg", "mountain", "₱3,500/night", 4.6, __("Lake Aurora", "cozy-nest"), 3],
                [__("Forest Hideaway", "cozy-nest"), __("Escape into nature with a secluded forest retreat.", "cozy-nest"), "forest.jpg", "mountain", "₱2,900/night", 4.5, __("Whispering Woods", "cozy-nest"), 2],
                [__("Hillside Haven", "cozy-nest"), __("Wake up to misty mornings and panoramic hillside views.", "cozy-nest"), "hillside.jpg", "mountain", "₱3,100/night", 4.6, __("Cloudtop Ridge", "cozy-nest"), 5],
                [__("Pinecrest Chalet", "cozy-nest"), __("Cozy up in a charming chalet surrounded by pine trees.", "cozy-nest"), "chalet.jpg", "mountain", "₱3,400/night", 4.7, __("Pinecrest Valley", "cozy-nest"), 4],


                [__("Beach Villa", "cozy-nest"), __("Wake up to ocean waves in our luxurious beachside retreat.", "cozy-nest"), "villa.jpg", "beach", "₱4,500/night", 4.9, __("Sandy Shores", "cozy-nest"), 5],
                [__("Seaside Bungalow", "cozy-nest"), __("Experience the charm of coastal living to a serene haven where the waves meets", "cozy-nest"), "bungalow.jpg", "beach", "₱3,800/night", 4.7, __("Coral Cove", "cozy-nest"), 3],
                [__("Riverfront Haven", "cozy-nest"), __("Calm river views and quiet mornings await in the soothing sounds of gently flowing water.", "cozy-nest"), "riverfront.avif", "beach", "₱4,000/night", 4.6, __("Riverbend", "cozy-nest"), 4],
                [__("Tropical Paradise", "cozy-nest"), __("Sun, sand, and serenity in every stay beachside retreat where the sun kisses your skin,", "cozy-nest"), "tropical.jpg", "beach", "₱4,700/night", 4.8, __("Palm Bay", "cozy-nest"), 6],
                [__("Coastal Cottage", "cozy-nest"), __("Chill out with ocean breezes and coastal charm sweep over you as you unwind in a cozy retreat.", "cozy-nest"), "coastal.jpg", "beach", "₱3,900/night", 4.7, __("Azure Coast", "cozy-nest"), 4],
                [__("Coral Sands Retreat", "cozy-nest"), __("Soak in the sun with beachfront views and gentle waves.", "cozy-nest"), "coral-sands.jpg", "beach", "₱4,400/night", 4.7, __("Coral Reef Point", "cozy-nest"), 6],


                [__("Skyline Penthouse", "cozy-nest"), __("Luxury and city lights from your private penthouse.", "cozy-nest"), "penthouse.jpg", "city", "₱5,200/night", 4.9, __("Metro Heights", "cozy-nest"), 4],
                [__("Urban Loft", "cozy-nest"), __("Stylish and modern city experience where urban sophistication meets contemporary comfort.", "cozy-nest"), "urban.webp", "city", "₱3,900/night", 4.5, __("Downtown Central", "cozy-nest"), 2],
                [__("Garden Villa", "cozy-nest"), __("Greenery and elegance in the heart of city to urban oasis where greenery meets.", "cozy-nest"), "garden.jpg", "city", "₱4,200/night", 4.7, __("Verdant Grove", "cozy-nest"), 4],
                [__("Rustic Barnhouse", "cozy-nest"), __("Charming rustic vibes with comfort space that effortlessly combines warmth of rustic charm.", "cozy-nest"), "barnhouse.jpg", "city", "₱3,300/night", 4.4, __("Old Town", "cozy-nest"), 3],
                [__("The Olive House", "cozy-nest"), __("A peaceful modern home tucked in a quiet city neighborhood.", "cozy-nest"), "olive-house.webp", "city", "₱4,100/night", 4.7, __("Greenfield Estates", "cozy-nest"), 4],
                [__("Brickstone House", "cozy-nest"), __("Classic charm meets city convenience in this full private home.", "cozy-nest"), "brickstone-house.webp", "city", "₱4,300/night", 4.8, __("Heritage Row", "cozy-nest"), 5],
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
    margin-top: -10%;
    padding: 60px 0;
}

.text-centers{
    font-size: 50px;
    font-weight: 600;
    padding: 20px;
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




@media (max-width: 768px) {
    .stays-container {
        padding: 40px 0;
    }

    .stay-card img {
        height: 180px; /* Make images smaller on small screens */
    }

    .stay-card .card-title {
        font-size: 1.2rem; /* Smaller title for mobile */
    }

    .stay-card p.card-text {
        font-size: 0.85rem; /* Smaller text on mobile */
    }

    .stay-card ul li {
        font-size: 0.85rem; /* Smaller list items */
    }

    .stay-card .btn {
        font-size: 0.85rem; /* Adjust button size */
    }

    /* Stacking the cards in one column */
    .rowStay {
        display: block;
    }

    .stay-item {
        margin-bottom: 2rem; /* Space between items on mobile */
    }
}

/* For screens between 767px and 1024px */
@media (min-width: 767px) and (max-width: 1024px) {
    .stays-container {
        padding: 50px 0;
    }

    .stay-card img {
        height: 200px; /* Slightly smaller images for medium screens */
    }

    .stay-card .card-title {
        font-size: 1.3rem; /* Adjust title size */
    }

    .stay-card p.card-text {
        font-size: 0.9rem; /* Adjust text size */
    }

    .stay-card ul li {
        font-size: 0.9rem; /* Adjust list items */
    }

    .stay-card .btn {
        font-size: 0.9rem; /* Adjust button size */
    }

    /* Adjust columns for medium screens */
    .row-cols-md-3 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .stay-item {
        width: 48%; /* Two items per row for medium screens */
    }
}



</style>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        const categoryLinks = document.querySelectorAll("#stay-categories .nav-link");
        const stayItems = document.querySelectorAll(".stay-item");

        const filterStays = (category) => {
            stayItems.forEach(item => {
                const itemCategory = item.getAttribute("data-category").trim();
                if (category === "all" || itemCategory === category) {
                    item.classList.remove("d-none");
                } else {
                    item.classList.add("d-none");
                }
            });
        };

        filterStays("all");

        categoryLinks.forEach(link => {
            link.addEventListener("click", function (event) {
                event.preventDefault();
                const selectedCategory = this.getAttribute("data-category").trim();

                document.querySelector("#stay-categories .active")?.classList.remove("active");
                this.classList.add("active");

                filterStays(selectedCategory);
            });
        });
    });
</script>





   

</main>


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





