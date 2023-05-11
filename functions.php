<?php
function theme_register_styles_and_scripts() { 
    // Enqueue styles
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('services', get_stylesheet_directory_uri() . '/services.css');
    wp_enqueue_style('service-directory', get_stylesheet_directory_uri() . '/service-directory.css');
    wp_enqueue_style('contact-us', get_stylesheet_directory_uri() . '/contact-us.css');
    wp_enqueue_style('about-us', get_stylesheet_directory_uri() . '/about-us.css');
    //enqueue index-test-style.css
    wp_enqueue_style('index-test-style', get_stylesheet_directory_uri() . '/index-test-style.css');

    //enqueue css/header.css
    wp_enqueue_style('header', get_stylesheet_directory_uri() . '/css/header.css');

    //enqueue css/footer.css
    wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/css/footer.css');

    // Enqueue scripts
    wp_register_script('index', get_stylesheet_directory_uri() . '/index.js', array(), '1.0.0', false, 'all');
    wp_enqueue_script('index');

    // Defer scripts
    wp_script_add_data('index', 'defer', true);
}
add_action('wp_enqueue_scripts', 'theme_register_styles_and_scripts');


add_theme_support('post-thumbnails');


// Add this code to your theme's functions.php or your plugin's main file

function display_email_list_admin()
{
    global $wpdb;

    // Assuming you have a table named 'email_subscriptions' with a column named 'email'
    $table_name = $wpdb->prefix . 'email_subscriptions';
    $results = $wpdb->get_results("SELECT email FROM $table_name", ARRAY_A);

    // Render the HTML table
    echo '<div class="wrap">';
    echo '<h1>Email List</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Email Address</th></tr></thead>';
    echo '<tbody>';
    foreach ($results as $row) {
        echo '<tr><td>' . esc_html($row['email']) . '</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}

function register_email_list_admin_page()
{
    add_submenu_page(
        'tools.php',
        // Parent slug
        'Email List',
        // Page title
        'Email List',
        // Menu title
        'manage_options',
        // Capability
        'email_list',
        // Menu slug
        'display_email_list_admin' // Callback function
    );
}

add_action('admin_menu', 'register_email_list_admin_page');

function save_email_subscription()
{
    global $wpdb;

    $email = sanitize_email($_POST['email']);

    if (is_email($email)) {
        $table_name = $wpdb->prefix . 'email_subscriptions';

        // Check if the email already exists in the database
        $email_exists = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE email = %s", $email));

        if (!$email_exists) {
            // Save the email to the database
            $result = $wpdb->insert($table_name, array('email' => $email));

            if ($result) {
                wp_send_json_success();
            } else {
                wp_send_json_error(array('error' => 'Failed to save the email address.'));
            }
        } else {
            wp_send_json_error(array('error' => 'That email has already been registered.'));
        }
    } else {
        wp_send_json_error(array('error' => 'Invalid email address.'));
    }
}

add_action('wp_ajax_save_email_subscription', 'save_email_subscription');
add_action('wp_ajax_nopriv_save_email_subscription', 'save_email_subscription');