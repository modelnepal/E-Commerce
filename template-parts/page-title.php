<!-- Page Title -->
<div class="page-title">




<?php
// Example dynamic ads array (replace with database or CMS logic as needed)
$ads = [
    [
        'type' => 'google',
        'content' => '<img src="/path-to-google-ad.jpg" alt="Google Ad">',
    ],
    [
        'type' => 'sponsor',
        'content' => '<a href="https://example-sponsor.com" target="_blank">
                        <img src="/path-to-sponsor-banner.jpg" alt="Sponsor Ad">
                      </a>',
    ],
    [
        'type' => 'native',
        'content' => '<a href="https://example-native-ad.com" target="_blank">
                        <img src="/path-to-native-ad-image.jpg" alt="Native Ad">
                      </a>',
    ],
];
?>

<div class="heading">
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
                <h1><?php the_title(); ?></h1>
                <p class="mb-0">
                    <!-- Responsive Ad Carousel -->
                    <div class="ad-carousel-wrapper">
                        <div class="ad-carousel">
                            <?php foreach ($ads as $ad): ?>
                                <div class="ad-item">
                                    <?php echo $ad['content']; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Auto-Scroll -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".ad-carousel");
    const ads = document.querySelectorAll(".ad-item");
    const totalAds = ads.length;
    let currentIndex = 0;

    function showNextAd() {
        currentIndex = (currentIndex + 1) % totalAds; // Loop through ads
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Auto-scroll every 3 seconds
    setInterval(showNextAd, 3000);
});
</script>

<!-- CSS for Responsive Ad Space -->
<style>
/* Carousel Wrapper */
.ad-carousel-wrapper {
    overflow: hidden;
    width: 100%;
    height: auto; /* Automatically adjust height based on content */
    position: relative;
    margin-top: 20px;
}

/* Carousel Container */
.ad-carousel {
    display: flex;
    transition: transform 0.5s ease-in-out; /* Smooth sliding effect */
    width: calc(100% * <?php echo count($ads); ?>); /* Adjust width dynamically based on the number of ads */
}

/* Individual Ad Item */
.ad-item {
    flex: 0 0 100%; /* Each item takes full width */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

/* Images in Ad */
.ad-item img {
    max-width: 100%;
    height: auto;
    margin: 0 auto;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

/* Responsive Design */
@media (max-width: 768px) {
    .ad-carousel-wrapper {
        height: 150px; /* Adjust height for smaller screens */
    }

    .ad-item img {
        max-height: 120px; /* Limit image height for smaller screens */
    }
}

@media (max-width: 480px) {
    .ad-carousel-wrapper {
        height: 120px; /* Adjust height for very small screens */
    }

    .ad-item img {
        max-height: 100px; /* Limit image height further */
    }
}
</style>

















<!-- 
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1><?php the_title();?></h1>
              <p class="mb-0">
                
              

              
              .</p>
            </div>
          </div>
        </div>
      </div> -->



<!-- ===========================================Breadcrumb starting Tags=============================================== -->

      <?php
// Function to Generate Breadcrumb
function generate_breadcrumbs() {
    // Home link
    $breadcrumbs = '<nav class="breadcrumbs"><div class="container"><ol>';
    $breadcrumbs .= '<li><a href="/">Home</a></li>';

    // Check if it's a blog archive or single blog post
    if (is_category() || is_single()) {
        $breadcrumbs .= '<li><a href="/blog">Blog</a></li>'; // Blog Archive Link

        if (is_single()) {
            $breadcrumbs .= '<li class="current">' . get_the_title() . '</li>'; // Specific Blog Title
        }
    } elseif (is_page()) {
        $breadcrumbs .= '<li class="current">' . get_the_title() . '</li>'; // Page Title
    }

    $breadcrumbs .= '</ol></div></nav>';
    return $breadcrumbs;
}
?>

<!-- Call the Breadcrumb Function -->
<?php echo generate_breadcrumbs(); ?>
<!-- ===========================================Breadcrumb Ending Tags=============================================== -->


    </div><!-- End Page Title -->