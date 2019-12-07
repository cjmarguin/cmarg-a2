<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = ''){
// This is a key value pair rested in an array
    $config = [
        'name' => 'A2: Comic API',
        'pretty_uri' => false,
        'site_url' => 'https://cmarg-a2.herokuapp.com',
        'nav_menu' => [
            'home' => 'Home',
            'api' => 'Random Comic'

        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v4.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
