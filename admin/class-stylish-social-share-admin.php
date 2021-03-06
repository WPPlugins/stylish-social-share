<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.wpmaniax.com
 * @since      1.0.0
 *
 * @package    Stylish_Social_Share
 * @subpackage Stylish_Social_Share/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Stylish_Social_Share
 * @subpackage Stylish_Social_Share/admin
 * @author     WP Maniax <plugins@wpmaniax.com>
 */
class Stylish_Social_Share_Admin
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $plugin_name The name of this plugin.
     * @param      string $version The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Stylish_Social_Share_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Stylish_Social_Share_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/stylish-social-share-admin.css', array(), $this->version, 'all');
        wp_enqueue_style($this->plugin_name.'-public', plugin_dir_url(__FILE__) . 'css/stylish-social-share-public.css', array(), $this->version, 'all');
        wp_enqueue_style('sss-font-awesome', plugin_dir_url(__FILE__) . 'css/font-awesome.min.css' );
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Stylish_Social_Share_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Stylish_Social_Share_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/stylish-social-share-admin.js', array('jquery'), $this->version, false);

    }

    public function init_settings()
    {

        $this->wpsf->add_settings_page(array(
            'parent_slug' => 'options-general.php',
            'page_title' => __('Stylish Social Share Settings'),
            'menu_title' => __('Stylish Social Share')
        ));

    }


}
