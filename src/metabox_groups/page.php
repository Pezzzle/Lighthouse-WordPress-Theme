<?php

function registerPageMetaboxes()
{

    $groupInfo = [
        'object_types' => ['page']
    ];

    $groupID = basename(__FILE__, '.php');

    addMetaboxes($groupInfo, [
        'test'
    ], $groupID);

}

add_action('cmb2_admin_init', 'registerPageMetaboxes');
