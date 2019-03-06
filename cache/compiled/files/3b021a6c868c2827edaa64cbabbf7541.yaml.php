<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/grav-admin/user/plugins/header-by-taxonomy/header-by-taxonomy.yaml',
    'modified' => 1551316450,
    'data' => [
        'enabled' => true,
        'overwrite' => false,
        'sets' => [
            0 => [
                'criteria' => [
                    0 => [
                        'taxonomy' => 'category',
                        'values' => [
                            0 => 'Food'
                        ],
                        'combinator' => 'or'
                    ],
                    1 => [
                        'taxonomy' => 'tag',
                        'values' => [
                            0 => 'Indian'
                        ],
                        'combinator' => 'or'
                    ]
                ],
                'combinator' => 'and',
                'overwrite' => true,
                'header' => [
                    'metadata.refresh' => 300,
                    'metadata.key2' => 'value2',
                    'pubmed.active' => true,
                    'test.var' => 'Hi!'
                ]
            ]
        ]
    ]
];
