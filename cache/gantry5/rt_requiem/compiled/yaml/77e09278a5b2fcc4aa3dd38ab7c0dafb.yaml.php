<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/themes/rt_requiem/particles/animatedblock.yaml',
    'modified' => 1553748662,
    'data' => [
        'name' => 'Animated Block',
        'description' => 'Display animated block content.',
        'type' => 'particle',
        'icon' => 'fa-spinner',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particles.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'cols' => [
                    'type' => 'select.select',
                    'label' => 'Grid Column',
                    'description' => 'Select the grid column amount for the list items',
                    'placeholder' => 'Select...',
                    'default' => 'g-1cols',
                    'options' => [
                        'g-1cols' => '1 Column',
                        'g-2cols' => '2 Columns',
                        'g-3cols' => '3 Columns',
                        'g-4cols' => '4 Columns',
                        'g-5cols' => '5 Columns'
                    ]
                ],
                'button' => [
                    'type' => 'input.text',
                    'label' => 'Button',
                    'description' => 'Specify the button text.'
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Link',
                    'description' => 'Customize the button link.',
                    'placeholder' => 'Enter URL'
                ],
                'blocks' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Blocks',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.headline' => [
                            'type' => 'input.text',
                            'label' => 'Headline',
                            'description' => 'Customize the headline.',
                            'placeholder' => 'Enter headline'
                        ],
                        '.tag' => [
                            'type' => 'input.text',
                            'label' => 'Tag',
                            'description' => 'Customize the tag.',
                            'placeholder' => 'Enter tag'
                        ],
                        '.desc' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.',
                            'placeholder' => 'Enter short description'
                        ],
                        '.readmore' => [
                            'type' => 'input.text',
                            'label' => 'Read More',
                            'description' => 'Specify the readmore text.'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Specify the readmore link address.'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
