<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/themes/rt_requiem/blueprints/styles/main.yaml',
    'modified' => 1553748659,
    'data' => [
        'name' => 'Main Styles',
        'description' => 'Main content styles for the Requiem theme',
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
                    'default' => '#5c5c5c'
                ]
            ]
        ]
    ]
];
