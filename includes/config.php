<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{ // This is a key value pair rested in an array
    $config = [
        'name' => 'Simple PHP Website',
        'pretty_uri' => false,
        'site_url' => 'https://php-demo-csu.herokuapp.com',
        'nav_menu' => [
            'home' => 'Home',
            'about-me' => 'About Me',
            'contact' => 'Contact Me'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
