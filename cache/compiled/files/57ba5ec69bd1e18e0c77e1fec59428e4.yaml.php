<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/grav-admin/user/config/site.yaml',
    'modified' => 1551852465,
    'data' => [
        'title' => 'ProximaX',
        'default_lang' => 'en',
        'languages' => [
            'home_redirect' => [
                'include_lang' => true,
                'include_route' => false
            ]
        ],
        'author' => [
            'name' => 'ProximaX',
            'email' => 'info@proximax.io'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Official ProximaX Blog'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 100,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'slider' => [
            0 => [
                'image' => 'slider3.jpg',
                'url' => '#'
            ],
            1 => [
                'image' => 'slider1.jpg',
                'url' => '#'
            ],
            2 => [
                'image' => 'slider2.jpg',
                'url' => '#'
            ]
        ]
    ]
];
