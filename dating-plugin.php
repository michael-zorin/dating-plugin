<?php
/**
 * Plugin Name: Dating plugin
 * Description: "Dating plugin" is simple plugin for manage profiles of user in dating sites
 * Version: 1.0.0
 * Author: Michael Zorin
 * Author URI: https://github.com/michael-zorin
 * Requires PHP: 7.4
 * License: GPL 2.0
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html#SEC1
 */

require __DIR__ . '/bootstrap.php';

/**
 * Plugin activation hook
 */
register_activation_hook(__FILE__, 'dating_pl_activation_callback');

/**
 * Plugin deactivation hook
 */
register_deactivation_hook(__FILE__, 'dating_pl_deactivation_callback');

/**
 * Register admin menu subpage
 */
add_action('admin_menu', 'register_admin_menu_page');