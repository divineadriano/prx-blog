<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/grav-admin/system/config/site.yaml',
    'modified' => 1551852374,
    'data' => [
        'title' => 'ProximaX',
        'default_lang' => 'en',
        'author' => [
            'name' => 'ProximaX',
            'email' => 'info@proximax.io'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'ProximaX Official Blog Site'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
