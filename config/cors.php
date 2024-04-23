<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['GET','POST','PUT'],

    'allowed_origins' => ['https://ff38ff51-10d1-4397-801a-ce53bd0c1e6b-00-13gls7ei7dqee.sisko.replit.dev'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['ff38ff51-10d1-4397-801a-ce53bd0c1e6b-00-13gls7ei7dqee.sisko.replit.dev'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

    // 'access_control_allow_origin'=> ['https://ff38ff51-10d1-4397-801a-ce53bd0c1e6b-00-13gls7ei7dqee.sisko.replit.dev'],

];
