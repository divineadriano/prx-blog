<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/themes/rt_requiem/particles/gridcontent.yaml',
    'modified' => 1553748662,
    'data' => [
        'name' => 'Grid Content',
        'description' => 'Display Grid Content.',
        'type' => 'particle',
        'icon' => 'fa-table',
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
                    'description' => 'Globally enable Grid Content particles.',
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
                    'default' => 'g-gridcontent-2cols',
                    'options' => [
                        'g-gridcontent-1cols' => '1 Column',
                        'g-gridcontent-2cols' => '2 Columns',
                        'g-gridcontent-3cols' => '3 Columns',
                        'g-gridcontent-4cols' => '4 Columns',
                        'g-gridcontent-5cols' => '5 Columns',
                        'g-gridcontent-6cols' => '6 Columns'
                    ]
                ],
                'gridcontentitems' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.textstyle' => [
                            'type' => 'select.select',
                            'label' => 'Title Class',
                            'description' => 'Choose the Title Style.',
                            'default' => 'g-gridcontent-title-style-1',
                            'options' => [
                                'g-gridcontent-title-style-1' => 'Style 1',
                                'g-gridcontent-title-style-2' => 'Style 2'
                            ]
                        ],
                        '.text1' => [
                            'type' => 'input.text',
                            'label' => 'Title 1'
                        ],
                        '.text2' => [
                            'type' => 'input.text',
                            'label' => 'Title 2'
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
