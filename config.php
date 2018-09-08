<?php

return [
    'baseUrl' => '',
    'production' => false,

    'collections' => ['posts'],

    // Number of collection items to show per page
    'perPage' => 5,

    // The email address to send the https://formspree.io/ contact form submissions to
    'email' => 'rickwestdev@gmail.com',

    // The name of the site. This is used in the nav and footer
    'siteName' => 'Jigsaw Clean Blog',

    // Social media links/icons that are used in the footer, add as many as you like!
    'socials' => [
        'twitter' => [
            'link' => 'https://twitter.com/rick_west8',
            'icon' => 'fab fa-twitter',
        ],
        'medium' => [
            'link' => 'https://medium.com/@rickwest8 ',
            'icon' => 'fab fa-medium',
        ],
        'github' => [
            'link' => 'https://github.com/rickwest',
            'icon' => 'fab fa-github',
        ],
//      'another social service' => [
//          'link' => 'link to your account',
//          'icon' => 'font awesome icon https://fontawesome.com/icons?d=gallery&m=free',
//      ]
    ],
];
