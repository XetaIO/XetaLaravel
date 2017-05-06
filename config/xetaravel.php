<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Xetaravel Site
    |--------------------------------------------------------------------------
    |
    | Here are each configuration related to Xetaravel itself. Those value are
    | used everywhere around the application.
    */
    'site' => [
        'description' => 'You will find content related to web development like tutorials, my personal tests on new technologies etc',
        'github_url' => 'https://github.com/XetaIO/Xetaravel',
        'contact_email' => 'contact@xeta.io',
        'analytics_tracker_code' => 'UA-40328289-2',
        'full_url' => 'https://xetaravel.xeta.io',
    ],

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    | All pagination settings used to pagination the queries.
    */
    'pagination' => [
        'blog' => [
            'article_per_page' => 10,
            'comment_per_page' => 10
        ],
        'notification' => [
            'notification_per_page' => 10
        ]
    ]
];
