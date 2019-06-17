<?php

function registerRequiredPlugins()
{
    $plugins = [
        [
            'name' => 'Disable Comments',
            'slug' => 'disable-comments'
        ]
    ];

    $config = [
        'id' => 'tgmpa',
        'menu' => 'tgmpa-install-plugins',
        'parent_slug' => 'themes.php',
        'capability' => 'edit_theme_options',
        'has_notices' => true,
        'dismissable' => false,
        'dismiss_msg' => '',
        'is_automatic' => true
    ];

    tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'registerRequiredPlugins');
