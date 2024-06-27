<?php
/*
Plugin Name: My Admin
Plugin URI: http://www.itsoulinfotech.com
Description: WordPress admin changes - WordPress Customized Admin Panel
Author: Sandip Mistry
Version: 1.0.1
Author URI: http://www.itsoulinfotech.com
*/

//echo $site_url = network_site_url( '/' );

function my_admin_theme_style() {
    wp_enqueue_style('my-admin-css', plugins_url('my-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

add_filter( 'widget_text', 'do_shortcode' );

/** changing default wordpres email settings */
 
add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');
 
function new_mail_from($old) {
    $site_url = network_site_url( '/' );
    return 'do-not-reply@'.$site_url;
}
function new_mail_from_name($old) {
    $site_title = get_bloginfo( 'name' );   
    return $site_title;
}

add_filter('show_admin_bar', '__return_false');

// Disable Edit last and Edit Lock

function my_remove_post_locked() {
    $current_post_type = get_current_screen()->post_type;   

    // Disable locking for page, post and some custom post type
    $post_types_arr = array(
        'page',
        'post',
        'custom_post_type'
    );

    if(in_array($current_post_type, $post_types_arr)) {
        add_filter( 'show_post_locked_dialog', '__return_false' );
        add_filter( 'wp_check_post_lock_window', '__return_false' );
        wp_deregister_script('heartbeat');
    }
}

add_action('load-edit.php', 'my_remove_post_locked');
add_action('load-post.php', 'my_remove_post_locked');


// hide admin notices
function hide_update_noticee_to_all_but_admin_users()
{
    if (is_super_admin()) {
        remove_all_actions( 'admin_notices' );
    }
}
add_action( 'admin_head', 'hide_update_noticee_to_all_but_admin_users', 1 );


// WP Settings Page - Fields 

// Adding options to registered field
//add_action( 'admin_menu', 'my_admin_add_option_field_to_general_admin_page' ); // CallBack Function

// Registering the field
function my_admin_add_option_field_to_general_admin_page() {

    register_setting( 'general', 'wp_mail_from' );

    add_settings_field( 
        'field_id-to-add', 
        'From Email', 
        'mail_from_setting_callback_function', //Function to Call
        'general', 
        'default', 
        array( 
            'id' => 'wp_mail_from', 
            'option_name' => 'wp_mail_from' 
        )
    );
}

function mail_from_setting_callback_function( $val ) {
    $id = $val['id'];
    $option_name = $val['option_name'];
    ?>
    <input 
        type="email" //this can be any HTML input type: date, number, text etc.
        name="<?php echo esc_attr( $option_name ) ?>"
        id="<?php echo esc_attr( $id ) ?>" 
        value="<?php echo esc_attr( get_option( $option_name ) ) ?>" // Displays the value stored in DB
    /> 
    <?php
}