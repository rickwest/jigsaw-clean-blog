<?php

return [
    // Replace with the baseUrl of your site. For example, https://jigsaw-clean-blog.netlify.com
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

    // The description of the site. This is used in for the site's default metadata
    'siteDescription' => 'Starter template for a blog, using Jigsaw by Tighten, based on the Start Bootstrap Clean Blog theme',

    // The name of the site Author. Your name! This is used when building the rss feed
    'siteAuthor' => '',

    // Social media links/icons that are used in the footer, add as many as you like!
    'socials' => [
        'twitter' => [
            'link' => '#',
            'icon' => 'fab fa-twitter',
        ],
        'facebook' => [
            'link' => '#',
            'icon' => 'fab fa-facebook-f',
        ],
        'github' => [
            'link' => '#',
            'icon' => 'fab fa-github',
        ],
        'rss' => [
            'link' => '/feed.xml',
            'icon' => 'fas fa-rss',
        ]
//      'another social service' => [
//          'link' => 'link to your account',
//          'icon' => 'font awesome icon https://fontawesome.com/icons?d=gallery&m=free',
//      ]
    ],

    // Google Analytics Tracking Id. For example, UA-123456789-1
    'gaTrackingId' => '',

    // True if you want to show a reading time (e.g 2 min read) or false to hide
    'showReadingTime' => true,

    'readingTime' => function($post) {
        $mins = round(str_word_count(strip_tags($post)) / 200);
        return implode('', array_fill(0, round($mins / 5),'☕')) . ' ' . $mins . ' min read';
    },

    'getExcerpt' => function ($page, $length = 225) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content), '<code>'
        );
        $truncated = substr($cleaned, 0, $length);
        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }
        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
];
