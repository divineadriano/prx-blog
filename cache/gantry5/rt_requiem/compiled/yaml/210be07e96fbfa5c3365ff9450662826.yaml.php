<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/themes/rt_requiem/particles/gridpromogallery.yaml',
    'modified' => 1553748662,
    'data' => [
        'name' => 'Grid Promo Gallery',
        'description' => 'Display Grid Promo Gallery.',
        'type' => 'particle',
        'icon' => 'fa-camera-retro',
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
                    'description' => 'Globally enable Grid Promo Gallery particles.',
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
                'desc' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ],
                'readmore' => [
                    'type' => 'input.text',
                    'label' => 'Readmore Text',
                    'description' => 'Specify the readmore text.',
                    'placeholder' => 'Enter readmore text'
                ],
                'readmorelink' => [
                    'type' => 'input.text',
                    'label' => 'Readmore Link',
                    'description' => 'Specify the readmore link address.'
                ],
                'readmoreclass' => [
                    'type' => 'select.select',
                    'label' => 'Readmore Style',
                    'description' => 'Style for the readmore button.',
                    'default' => 'button-3',
                    'options' => [
                        'button-2' => 'Button 2',
                        'button-3' => 'Button 3',
                        'button-4' => 'Button 4'
                    ]
                ],
                'cols' => [
                    'type' => 'select.select',
                    'label' => 'Grid Column',
                    'description' => 'Select the grid column amount',
                    'placeholder' => 'Select...',
                    'default' => 'g-gridpromogallery-2cols',
                    'options' => [
                        'g-gridpromogallery-1cols' => '1 Column',
                        'g-gridpromogallery-2cols' => '2 Columns',
                        'g-gridpromogallery-3cols' => '3 Columns',
                        'g-gridpromogallery-4cols' => '4 Columns',
                        'g-gridpromogallery-5cols' => '5 Columns',
                        'g-gridpromogallery-6cols' => '6 Columns'
                    ]
                ],
                'gridpromogalleryitems' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.img' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select the desired image.'
                        ],
                        '.tag' => [
                            'type' => 'input.text',
                            'label' => 'Tag'
                        ],
                        '.headtext' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.desc' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.',
                            'placeholder' => 'Enter short description'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
