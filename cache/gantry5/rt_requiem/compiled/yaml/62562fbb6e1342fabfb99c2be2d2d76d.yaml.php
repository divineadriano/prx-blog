<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/themes/rt_requiem/blueprints/styles/accent.yaml',
    'modified' => 1553748659,
    'data' => [
        'name' => 'Accent Colors',
        'description' => 'Accent colors for the Requiem theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'color-1' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 1',
                    'default' => '#3a7ad9'
                ],
                'color-2' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 2',
                    'default' => '#ff6705'
                ],
                'color-3' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 3',
                    'default' => '#f7c500'
                ]
            ]
        ]
    ]
];
