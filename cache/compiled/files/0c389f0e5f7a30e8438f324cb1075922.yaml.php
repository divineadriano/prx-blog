<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/grav-admin/user/config/plugins/relatedpages.yaml',
    'modified' => 1551826941,
    'data' => [
        'enabled' => false,
        'limit' => 3,
        'show_score' => true,
        'score_threshold' => 20,
        'filter' => [
            'items' => [
                '@page' => '/blog'
            ],
            'order' => [
                'by' => 'date',
                'dir' => 'asc'
            ]
        ],
        'page_in_filter' => false,
        'explicit_pages' => [
            'process' => false,
            'score' => 100
        ],
        'taxonomy_match' => [
            'taxonomy' => [
                0 => [
                    'tags' => [
                        0 => 'tech talks'
                    ]
                ]
            ],
            'taxonomy_taxonomy' => [
                'process' => true,
                'score_scale' => [
                    1 => '50',
                    2 => '75',
                    3 => '100'
                ]
            ],
            'taxonomy_content' => [
                'process' => true,
                'score_scale' => [
                    1 => '20',
                    2 => '30',
                    3 => '45',
                    4 => '60',
                    5 => '70',
                    6 => '80',
                    7 => '90',
                    8 => '100'
                ]
            ]
        ],
        'content_match' => [
            'process' => false
        ]
    ]
];
