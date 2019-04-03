<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/themes/rt_requiem/blueprints/styles/footer.yaml',
    'modified' => 1553748659,
    'data' => [
        'name' => 'Footer Styles',
        'description' => 'Footer styles for the Requiem theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f5f5f5'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#888888'
                ]
            ]
        ]
    ]
];
