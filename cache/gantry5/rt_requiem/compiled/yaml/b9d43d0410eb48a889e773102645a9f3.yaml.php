<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/data/gantry5/themes/rt_requiem/blueprints/styles/extension.yaml',
    'modified' => 1553748708,
    'data' => [
        'name' => 'Extension Styles',
        'description' => 'Extension styles for the Requiem theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#3a7ad9'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#efefef'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => 'gantry-media://rocketlauncher/backgrounds/extension/preset-02.jpg'
                ]
            ]
        ]
    ]
];
