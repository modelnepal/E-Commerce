<footer class="footer">
  <style>
    /* footer section customs css  */
    /* General Styles */
    .footer {
      background-color: #f9f9f0;
      padding: 20px;
      font-family: \'Roboto\', sans-serif;
    }

    .footer-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .footer-section {
      flex: 1 1 calc(20% - 20px);
      margin: 10px;
      min-width: 150px;
      opacity: 0;
      animation: fadeIn 1s ease-in-out forwards;
    }

    .footer-section:nth-child(1) {
      animation-delay: 0.2s;
    }

    .footer-section:nth-child(2) {
      animation-delay: 0.4s;
    }

    .footer-section:nth-child(3) {
      animation-delay: 0.6s;
    }

    .footer-section:nth-child(4) {
      animation-delay: 0.8s;
    }

    .footer-section:nth-child(5) {
      animation-delay: 1s;
    }

    .footer-section h3 {
      font-size: 1.2rem;
      margin-bottom: 10px;
      font-weight: 700;
    }

    .footer-section ul {
      list-style: none;
      padding: 0;
    }

    .footer-section ul li {
      margin: 5px 0;
    }

    .footer-section ul li a {
      text-decoration: none;
      color: #333;
    }

    .footer-section ul li a:hover {
      text-decoration: underline;
    }

    .footer-bottom {
      text-align: center;
      margin-top: 20px;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      margin-bottom: 10px;
      opacity: 0;
      animation: fadeIn 1s ease-in-out forwards;
      animation-delay: 1.2s;
    }

    .social-icons a {
      margin: 0 10px;
      text-decoration: none;
      color: #333;
    }

    .footer-links {
      margin-bottom: 10px;
    }

    .footer-links a {
      margin: 0 5px;
      text-decoration: none;
      color: #333;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }

    .footer-bottom p {
      font-size: 0.9rem;
      color: #666;
    }

    hr {
      margin: 10px 0;
      border: 5px solid #333;
      border-top: 5px solid #ddd;
    }

    /* Animations */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
        align-items: center;
      }

      .footer-section {
        flex: 1 1 100%;
        text-align: center;
      }

      .social-icons {
        flex-wrap: wrap;
      }
    }
  </style>
  
  <div class="footer-container">
    <div class="footer-section wow fadeIn">
      <h3>PRODUCT</h3>
      <ul>
        <li><a href="#">Why Brevo?</a></li>
        <li><a href="#">Email marketing</a></li>
        <li><a href="#">Transactional email</a></li>
        <li><a href="#">Wallet</a></li>
        <li><a href="#">Enterprise solution</a></li>
        <li><a href="#">All features</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Integrations</a></li>
        <li><a href="#">GDPR</a></li>
        <li><a href="#">Security</a></li>
        <li><a href="#">Product updates</a></li>
      </ul>
    </div>
    <div class="footer-section wow fadeIn" data-wow-delay="0.2s">
      <h3>COMPARE</h3>
      <ul>
        <li><a href="#">Bulk email service</a></li>
        <li><a href="#">Email marketing platforms</a></li>
        <li><a href="#">Brevo vs Mailchimp</a></li>
        <li><a href="#">Brevo vs HubSpot</a></li>
        <li><a href="#">Brevo vs Constant Contact</a></li>
        <li><a href="#">Brevo vs Klaviyo</a></li>
        <li><a href="#">Mailchimp alternatives</a></li>
        <li><a href="#">HubSpot alternatives</a></li>
      </ul>
    </div>
    <div class="footer-section wow fadeIn" data-wow-delay="0.4s">
      <h3>RESOURCES</h3>
      <ul>
        <li><a href="#">Help center</a></li>
        <li><a href="#">Platform status</a></li>
        <li><a href="#">Community</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Glossary</a></li>
        <li><a href="#">Success</a></li>
        <li><a href="#">Academy</a></li>
        <li><a href="#">Ebooks & webinars</a></li>
        <li><a href="#">Developers</a></li>
        <li><a href="#">Migrate from Mailchimp</a></li>
      </ul>
    </div>
    <div class="footer-section wow fadeIn" data-wow-delay="0.6s">
      <h3>PARTNERS</h3>
      <ul>
        <li><a href="#">All partner programs</a></li>
        <li><a href="#">Affiliates</a></li>
        <li><a href="#">Experts</a></li>
        <li><a href="#">Startups & VCs</a></li>
        <li><a href="#">Integration partners</a></li>
        <li><a href="#">Find an expert</a></li>
      </ul>
    </div>
    <div class="footer-section wow fadeIn" data-wow-delay="0.8s">
      <h3>COMPANY</h3>

      <ul>
        <li><a href="#">About us</a></li>
        <li><a href="#">Leadership</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Press</a></li>
        <li><a href="#">Carbon footprint</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom wow fadeIn" data-wow-delay="1s">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <div class="social-icons">
      <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
      <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
      <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
      <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
      <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
    </div>
    <hr>
    <div class="footer-links">
      <a href="#">Cookie Settings</a>
      <a href="#">Anti-spam</a>
      <a href="#">Privacy</a>
      <a href="#">User Agreement</a>
      <a href="#">Legal Notice</a>
      <a href="#">Responsible Disclosure</a>
    </div>
  </div>

  <div id="footer">
    <p>&copy; Copyright <?php bloginfo('name'); ?> <?php echo date('Y'); ?>.
      Designed by <a href="<?php echo esc_url(home_url()); ?>"
        title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> | Developer <a
        href="<?php echo esc_url(home_url()); ?>"
        title="Shane Strong - Lansing Web Design"><?php bloginfo('name'); ?></a></p>
  </div>


</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>
