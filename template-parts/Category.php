<section class="py-5 overflow-hidden">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header d-flex flex-wrap justify-content-between mb-5">
          <h2 class="section-title">Category</h2>
          <div class="d-flex align-items-center">
            <a href="#" class="btn btn-primary me-2">View All</a>
            <div class="swiper-buttons">
              <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
              <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="category-carousel swiper">
          <div class="swiper-wrapper">
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-2.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-3.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-4.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-5.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-6.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Breads</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-7.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-8.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Breads</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    // Initialize Swiper
    const swiper = new Swiper('.category-carousel', {
      slidesPerView: 15, // Number of visible slides
      spaceBetween: 10, // Space between slides
      navigation: {
        nextEl: '.category-carousel-next', // Next button
        prevEl: '.category-carousel-prev', // Previous button
      },
      autoplay: {
        delay: 2000, // Slide change every 3 seconds
        disableOnInteraction: false, // Autoplay won't stop after user interactions
      },
      loop: true, // Infinite loop for seamless sliding
      breakpoints: {
        768: {
          slidesPerView: 5, // Show 5 items on tablets
        },
        1024: {
          slidesPerView: 10, // Show 7 items on desktops
        },
      },
    });
  </script>
</section>