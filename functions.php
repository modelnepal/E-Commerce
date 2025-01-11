<?php

// <!-- Setup theme basic functionalities -->

// Enqueue styles and scripts for the WordPress theme
function organic_enqueue_assets() {
    // Vendor CSS
   // wp_enqueue_style('vendor-css', get_template_directory_uri() . 'css/vendor.css');

    // Normalize CSS
   // wp_enqueue_style('normalize-css', get_template_directory_uri() . 'css/normalize.css');

    // Main style.css
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), null);

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), null);

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', array(), null);

    // Custom Script
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'organic_enqueue_assets');

// Setup theme features and register menus
function theme_setup() {
    // Add support for various theme features
    add_theme_support('title-tag'); // Enables dynamic <title> tag
    add_theme_support('post-thumbnails'); // Enables featured images
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
    add_theme_support('automatic-feed-links'); // RSS feed links
    add_theme_support('customize-selective-refresh-widgets');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'theme-textdomain'),
        'footer' => __('Footer Menu', 'theme-textdomain'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

// Register widget areas
function register_widget_areas() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'theme-textdomain'),
        'id' => 'sidebar-1',
        'description' => __('Widgets added here will appear in the sidebar.', 'theme-textdomain'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area', 'theme-textdomain'),
        'id' => 'footer-1',
        'description' => __('Widgets added here will appear in the footer.', 'theme-textdomain'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-widget-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'register_widget_areas');

// Custom post type: Portfolio
function create_custom_post_type_portfolio() {
    $labels = array(
        'name' => __('Portfolios', 'theme-textdomain'),
        'singular_name' => __('Portfolio', 'theme-textdomain'),
        'add_new' => __('Add New Portfolio', 'theme-textdomain'),
        'edit_item' => __('Edit Portfolio', 'theme-textdomain'),
        'view_item' => __('View Portfolio', 'theme-textdomain'),
        'all_items' => __('All Portfolios', 'theme-textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'rewrite' => array('slug' => 'portfolio'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'create_custom_post_type_portfolio');

// Custom excerpt length
function set_custom_excerpt_length($length) {
    return 30; // Limit excerpt to 30 words
}
add_filter('excerpt_length', 'set_custom_excerpt_length', 999);

// Custom widget example
class Custom_Text_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'custom_text_widget',
            __('Custom Text Widget', 'theme-textdomain'),
            array('description' => __('A widget that displays custom text.', 'theme-textdomain'))
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        echo '<p>' . esc_html($instance['text']) . '</p>';
        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Title', 'theme-textdomain');
        $text = !empty($instance['text']) ? $instance['text'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'theme-textdomain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text:', 'theme-textdomain'); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo esc_attr($text); ?></textarea>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['text'] = (!empty($new_instance['text'])) ? strip_tags($new_instance['text']) : '';
        return $instance;
    }
}
function register_custom_text_widget() {
    register_widget('Custom_Text_Widget');
}
add_action('widgets_init', 'register_custom_text_widget');

// Disable admin bar for non-admins
if (!current_user_can('administrator') && !is_admin()) {
    add_filter('show_admin_bar', '__return_false');
};

?>;