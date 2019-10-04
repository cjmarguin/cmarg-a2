<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{ // This is a key value pair rested in an array
    $config = [
        'name' => 'A2: Yeet',
        'pretty_uri' => false,
        'site_url' => 'https://cmarg-a1.herokuapp.com',
        'nav_menu' => [
            'comic' => 'Home',
            'api' => 'Page 1'

        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
