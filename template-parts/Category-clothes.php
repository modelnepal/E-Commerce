<section class="py-5 overflow-hidden">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header d-flex flex-wrap justify-content-between mb-5">
          <h2 class="section-title">Shop by Category</h2>
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
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-women.jpg" class="rounded-circle" alt="Women's Fashion">
              <h4 class="fs-6 mt-3 fw-normal category-title">Women's Fashion</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-men.jpg" class="rounded-circle" alt="Men's Fashion">
              <h4 class="fs-6 mt-3 fw-normal category-title">Men's Fashion</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-kids.jpg" class="rounded-circle" alt="Kids' Wear">
              <h4 class="fs-6 mt-3 fw-normal category-title">Kids' Wear</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-accessories.jpg" class="rounded-circle" alt="Accessories">
              <h4 class="fs-6 mt-3 fw-normal category-title">Accessories</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-shoes.jpg" class="rounded-circle" alt="Footwear">
              <h4 class="fs-6 mt-3 fw-normal category-title">Footwear</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-winter.jpg" class="rounded-circle" alt="Winter Wear">
              <h4 class="fs-6 mt-3 fw-normal category-title">Winter Wear</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-sports.jpg" class="rounded-circle" alt="Sportswear">
              <h4 class="fs-6 mt-3 fw-normal category-title">Sportswear</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/category-ethnic.jpg" class="rounded-circle" alt="Ethnic Wear">
              <h4 class="fs-6 mt-3 fw-normal category-title">Ethnic Wear</h4>
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
      slidesPerView: 4,
      spaceBetween: 15,
      navigation: {
        nextEl: '.category-carousel-next',
        prevEl: '.category-carousel-prev',
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      loop: true,
      breakpoints: {
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 7,
        },
      },
    });
  </script>
</section>
