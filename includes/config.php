<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{ // This is a key value pair rested in an array
    $config = [
        'name' => 'A1: Jenna&apos;s Ratchet Beauty Salon',
        'pretty_uri' => false,
        'site_url' => 'https://php-demo-csu.herokuapp.com',
        'nav_menu' => [
            'home' => 'This is home beech',
            'about-me' => 'A lil &apos;bout mee beeech',
            'jenna' => 'Book Jenna'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
