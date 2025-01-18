<footer>
    <!-- footer page nav  -->
<?php get_template_part('template-parts/footer-nav'); ?>

    <!-- Footer Navigation Menu -->
    <nav id="footer-nav">

        <?php
        // wp_nav_menu(array(
        //     'theme_location' => 'footer_menu', // The location where the menu will be displayed
        //     'container' => false, // Remove the <div> wrapper
        //     'menu_class' => 'footer-menu', // Add class to the <ul> for styling
        //     'depth' => 1 // Display only top-level menu items
        // ));
        ?>
    </nav>

    <!-- Footer credit Menu -->

    <div id="footer">

        <p>&copy; Copyright <?php bloginfo('name'); ?> <?php echo date('Y'); ?>.
            Designed by <a href="<?php echo esc_url(home_url()); ?>"
                title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> | Developer <a
                href="<?php echo esc_url(home_url()); ?>"
                title="Shane Strong - Lansing Web Design"><?php bloginfo('name'); ?></a></p>

    </div>
</footer>
<?php wp_footer(); ?>

<style>
    #footer {
        padding: 20px;
        text-align: center;
        font-family: Arial, sans-serif;
        color: #333;
    }

    #footer p {
        margin: 10px 0;
    }

    #footer a {
        color: #0073e6;
        text-decoration: none;
    }

    #footer a:hover {
        text-decoration: underline;
    }

    /* Footer navigation styling */
    #footer-nav {
        margin-top: 15px;
    }

    .footer-menu {
        list-style: none;
        padding: 0;
    }

    .footer-menu li {
        display: inline-block;
        margin-right: 20px;
    }

    .footer-menu li a {
        color: #0073e6;
        text-decoration: none;
    }

    .footer-menu li a:hover {
        text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        #footer {
            padding: 15px;
        }

        #footer p {
            font-size: 14px;
        }

        #footer a {
            font-size: 14px;
        }

        .footer-menu li {
            display: block;
            margin-bottom: 10px;
        }
    }

    @media (max-width: 480px) {
        #footer {
            padding: 10px;
        }

        #footer p {
            font-size: 12px;
        }

        #footer a {
            font-size: 12px;
        }
    }
</style>