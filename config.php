<?php

return [
    'baseUrl' => '',
    'production' => false,


    'collections' => [
        // Posts collection sorted by date and in descending order (latest post at the top)
        'posts' => [
            'sort' => '-date'
        ]
    ],

    // Number of collection items to show per page
    'perPage' => 5,

    // The email address to send the https://formspree.io/ contact form submissions to
    'email' => '',

    // The name of the site. This is used in the nav and footer
    'siteName' => 'Jigsaw Clean Blog',

    // Social media links/icons that are used in the footer, add as many as you like!
    'socials' => [
        'twitter' => [
            'link' => '',
            'icon' => 'fab fa-twitter',
        ],
        'facebook' => [
            'link' => '',
            'icon' => 'fab fa-facebook',
        ],
        'medium' => [
            'link' => '',
            'icon' => 'fab fa-medium',
        ],
        'github' => [
            'link' => '',
            'icon' => 'fab fa-github',
        ],
//      'another social service' => [
//          'link' => 'link to your account',
//          'icon' => 'font awesome icon https://fontawesome.com/icons?d=gallery&m=free',
//      ]
    ],
];
