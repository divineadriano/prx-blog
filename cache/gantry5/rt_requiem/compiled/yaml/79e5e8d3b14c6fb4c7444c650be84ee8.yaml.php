<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/themes/rt_requiem/blueprints/styles/above.yaml',
    'modified' => 1553748659,
    'data' => [
        'name' => 'Above Styles',
        'description' => 'Above styles for the Requiem theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#686868'
                ]
            ]
        ]
    ]
];
