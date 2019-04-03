<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/themes/rt_requiem/particles/promocontent.yaml',
    'modified' => 1553748662,
    'data' => [
        'name' => 'Promo Content',
        'description' => 'Display promo content items.',
        'type' => 'particle',
        'icon' => 'fa-television',
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
                'promostyle' => [
                    'type' => 'select.select',
                    'label' => 'Promo Style',
                    'description' => 'Select the promo title style.',
                    'placeholder' => 'Select...',
                    'default' => 'standard',
                    'options' => [
                        'standard' => 'Standard',
                        'promo' => 'Promo',
                        'superpromo' => 'Super Promo',
                        'subpromo' => 'Sub Promo'
                    ]
                ],
                'promo' => [
                    'type' => 'input.text',
                    'label' => 'Promo Text',
                    'description' => 'Customize the promo text.',
                    'placeholder' => 'Enter promo text'
                ],
                'desc' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description 1',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ],
                'desc2' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description 2',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ],
                'descanimation' => [
                    'type' => 'select.select',
                    'label' => 'Description Animation',
                    'description' => 'Select the Description Animation Type.',
                    'placeholder' => 'Select...',
                    'default' => 'noanimation',
                    'options' => [
                        'noanimation' => 'No Animation',
                        'typewriter' => 'Type Writer'
                    ]
                ],
                'animationElementID' => [
                    'type' => 'input.text',
                    'label' => 'Animation Element ID',
                    'description' => 'If you choose Type Writer animation, please put unique Element ID to differ it with another same particle, for example: typewriter-1, typewriter-2, etc.',
                    'placeholder' => 'typewriter-1'
                ],
                'regularlinktext' => [
                    'type' => 'input.text',
                    'label' => 'Readmore Text',
                    'description' => 'Specify the textlink text.',
                    'placeholder' => 'Enter textlink text'
                ],
                'regularlinkurl' => [
                    'type' => 'input.text',
                    'label' => 'Readmore Link',
                    'description' => 'Specify the Regular Link address.'
                ],
                'readmore' => [
                    'type' => 'input.text',
                    'label' => 'Button Text',
                    'description' => 'Specify the readmore text.',
                    'placeholder' => 'Enter readmore text'
                ],
                'readmoreclass' => [
                    'type' => 'input.selectize',
                    'label' => 'Button Classes',
                    'description' => 'CSS class name for the button.'
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Button Link',
                    'description' => 'Specify the button link address.'
                ],
                'linkstyle' => [
                    'type' => 'select.select',
                    'label' => 'Button Style',
                    'description' => 'Select the readmore style.',
                    'placeholder' => 'Select...',
                    'default' => 'block',
                    'options' => [
                        'block' => 'Block',
                        'inline' => 'Inline',
                        'aside' => 'Aside'
                    ]
                ],
                'tags' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Tags',
                    'description' => 'Create tags for your content.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Text'
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
