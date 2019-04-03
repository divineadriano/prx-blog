<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/config/plugins/social-seo-metatags.yaml',
    'modified' => 1554266402,
    'data' => [
        'enabled' => true,
        'seo' => [
            'robots' => 'without',
            'length' => 20,
            'taxonomy' => [
                'enabled' => true
            ],
            'page_content' => [
                'enabled' => false
            ],
            'keywords' => [
                'taxonomy' => [
                    'enabled' => true
                ],
                'page_content' => [
                    'enabled' => true
                ],
                'length' => 20
            ]
        ],
        'social_pages' => [
            'pages' => [
                'twitter' => [
                    'enabled' => true,
                    'type' => 'summary',
                    'username' => '@ProximaXio'
                ],
                'facebook' => [
                    'enabled' => false,
                    'appid' => '1234567890'
                ]
            ]
        ]
    ]
];
