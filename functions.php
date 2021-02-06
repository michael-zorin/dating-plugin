<?php

/**
 * Activation plugin callback
 */
function dating_pl_activation_callback()
{
    echo '1';
}

/**
 * Dectivation plugin callback
 */
function dating_pl_deactivation_callback()
{
    echo '0';
}

/**
 * Register plugin admin page in menu
 */
function register_admin_menu_page()
{
    // 80
    $options = [
        'options-general.php',
        'Dating plugin settings',
        'Dating plugin',
        'manage_options',
        'dating-plugin-settings-page',
        'admin_menu_page_view',
    ];
    add_submenu_page(...$options);
}

/**
 * Function for view admin menu page content
 */
function admin_menu_page_view() {
    require_once __DIR__ . '/templates/admin-panel-page.php';
}