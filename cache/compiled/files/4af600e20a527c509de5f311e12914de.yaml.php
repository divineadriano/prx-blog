<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/grav-admin/user/config/themes/bootstrap-blog.yaml',
    'modified' => 1551340006,
    'data' => [
        'enabled' => true,
        'cdn_enabled' => false,
        'back_to_top_button' => true,
        'favicon' => [
            'user/themes/bootstrap-blog/images/ProximaX Emblem Embossed_Ghost.png' => [
                'name' => 'ProximaX Emblem Embossed_Ghost.png',
                'type' => 'image/png',
                'size' => 1585087,
                'path' => 'user/themes/bootstrap-blog/images/ProximaX Emblem Embossed_Ghost.png'
            ]
        ],
        'navbar' => [
            'image' => [
                'user/themes/bootstrap-blog/images/181102_ProximaX Logo Colour.png' => [
                    'name' => '181102_ProximaX Logo Colour.png',
                    'type' => 'image/png',
                    'size' => 5135,
                    'path' => 'user/themes/bootstrap-blog/images/181102_ProximaX Logo Colour.png'
                ]
            ],
            'style' => 'cyan',
            'override_page_style' => true,
            'dropdown' => true,
            'sticky' => false,
            'display_site_name' => false
        ],
        'sidebar' => [
            'enabled' => false,
            'align' => 'left',
            'twitter' => [
                'enabled' => true,
                'user' => '@ProximaXio',
                'height' => 600,
                'theme' => 'light'
            ],
            'about' => [
                'enabled' => true,
                'title' => 'ProximaX',
                'content' => 'ProximaX is a next generation platform solution with an Integrated and Distributed Ledger Technology (IaDLT). The ProximaX Sirius platform is an integrated assembly of proven technologies for enterprises to develop applications with superior design while substantially reducing the total cost of ownership and time to market.',
                'page' => '/home'
            ]
        ],
        'item' => [
            'show_prev_next' => true,
            'related_pages' => true,
            'category' => 'category',
            'tag' => 'tag'
        ],
        'comments' => [
            'enabled' => true,
            'disqus_shortname' => 'proximaxio'
        ],
        'footer' => [
            'style' => 'dark',
            'text' => '2019 © <a href="https://proximax.io" target="_blank">ProximaX</a>'
        ],
        'simplesearch' => [
            'layout' => 'cards'
        ]
    ]
];
