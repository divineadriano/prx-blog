<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/themes/rt_requiem/blueprints/styles/fixedside.yaml',
    'modified' => 1553748659,
    'data' => [
        'name' => 'FixedSide Styles',
        'description' => 'FixedSide styles for the Requiem theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => 'rgba(0, 0, 0, 0.75)'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'FixedSide Width',
                    'default' => '4rem'
                ],
                'position' => [
                    'type' => 'select.selectize',
                    'label' => 'Position',
                    'description' => 'Select the FixedSide position.',
                    'default' => 'left',
                    'options' => [
                        'left' => 'Left',
                        'right' => 'Right'
                    ]
                ]
            ]
        ]
    ]
];
