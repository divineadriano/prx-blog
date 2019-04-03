<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/grav/grav-admin/user/plugins/social-seo-metatags/blueprints.yaml',
    'modified' => 1554266339,
    'data' => [
        'name' => 'Social & SEO Meta Tags',
        'version' => '1.2.0',
        'description' => 'Meta-tags for SEO and Social integration (Facebook Open Graph and Twitter Cards)',
        'icon' => 'code',
        'author' => [
            'name' => 'Clément G.',
            'email' => 'contact@clemdesign.fr',
            'url' => 'http://www.clemdesign.fr'
        ],
        'homepage' => 'https://github.com/clemdesign/grav-plugin-social-seo-metatags',
        'demo' => NULL,
        'keywords' => 'grav, plugin, facebook, open graph, twitter cards, google, seo, description, metatags, tags',
        'bugs' => 'https://github.com/clemdesign/grav-plugin-social-seo-metatags/issues',
        'docs' => 'https://github.com/clemdesign/grav-plugin-social-seo-metatags/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'social_pages_types' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'title' => 'Pages',
                    'fields' => [
                        'plugin' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.SOCIAL_SEO_METATAGS.GENERAL.NAME',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.SOCIAL_SEO_METATAGS.PLUGIN_STATUS',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'seo.robots' => [
                                    'type' => 'select',
                                    'label' => 'PLUGINS.SOCIAL_SEO_METATAGS.GENERAL.ROBOTS.NAME',
                                    'help' => 'PLUGINS.SOCIAL_SEO_METATAGS.GENERAL.ROBOTS.HELP',
                                    'default' => 'without',
                                    'size' => 'medium',
                                    'options' => [
                                        'index_follow' => 'Index, Follow',
                                        'noindex_follow' => 'NoIndex, Follow',
                                        'index_nofollow' => 'Index, NoFollow',
                                        'noindex_nofollow' => 'NoIndex, NoFollow',
                                        'nosnippet' => 'NoSnippet',
                                        'noarchive' => 'NoArchive',
                                        'noodp' => 'NoODP',
                                        'noarchive_noodp' => 'NoArchive, NoODP',
                                        'without' => 'PLUGINS.SOCIAL_SEO_METATAGS.GENERAL.ROBOTS.WITHOUT'
                                    ]
                                ],
                                'seo.keywords.taxonomy.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.SOCIAL_SEO_METATAGS.GENERAL.KEYWORDS.TAXONOMY.NAME',
                                    'help' => 'PLUGINS.SOCIAL_SEO_METATAGS.GENERAL.KEYWORDS.TAXONOMY.HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGINS.SOCIAL_SEO_METATAGS.YES',
                                        0 => 'PLUGINS.SOCIAL_SEO_METATAGS.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'seo.keywords.page_content.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.SOCIAL_SEO_METATAGS.GENERAL.KEYWORDS.PAGE_CONTENT.NAME',
                                    'help' => 'PLUGINS.SOCIAL_SEO_METATAGS.GENERAL.KEYWORDS.PAGE_CONTENT.HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGINS.SOCIAL_SEO_METATAGS.YES',
                                        0 => 'PLUGINS.SOCIAL_SEO_METATAGS.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'seo.keywords.length' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGINS.SOCIAL_SEO_METATAGS.GENERAL.KEYWORDS.LENGTH.NAME',
                                    'help' => 'PLUGINS.SOCIAL_SEO_METATAGS.GENERAL.KEYWORDS.LENGTH.HELP',
                                    'default' => 20,
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 2,
                                        'max' => 30
                                    ]
                                ]
                            ]
                        ],
                        'twitter' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.SOCIAL_SEO_METATAGS.TWITTER.NAME',
                            'fields' => [
                                'social_pages.pages.twitter.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.SOCIAL_SEO_METATAGS.TWITTER.ENABLED',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGINS.SOCIAL_SEO_METATAGS.YES',
                                        0 => 'PLUGINS.SOCIAL_SEO_METATAGS.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'social_pages.pages.twitter.type' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'PLUGINS.SOCIAL_SEO_METATAGS.TWITTER.TYPE',
                                    'help' => 'PLUGINS.SOCIAL_SEO_METATAGS.TWITTER.TYPE_HELP',
                                    'default' => 'summary_large_image',
                                    'options' => [
                                        'summary_large_image' => 'PLUGINS.SOCIAL_SEO_METATAGS.TWITTER.TYPE_CARDS.LARGE',
                                        'summary' => 'PLUGINS.SOCIAL_SEO_METATAGS.TWITTER.TYPE_CARDS.SUMMARY'
                                    ]
                                ],
                                'social_pages.pages.twitter.username' => [
                                    'type' => 'text',
                                    'label' => 'PLUGINS.SOCIAL_SEO_METATAGS.TWITTER.USERNAME',
                                    'help' => 'PLUGINS.SOCIAL_SEO_METATAGS.TWITTER.USERNAME_HELP',
                                    'size' => 'small',
                                    'placeholder' => '@'
                                ]
                            ]
                        ],
                        'facebook' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.SOCIAL_SEO_METATAGS.FACEBOOK.NAME',
                            'fields' => [
                                'social_pages.pages.facebook.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.SOCIAL_SEO_METATAGS.FACEBOOK.ENABLED',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGINS.SOCIAL_SEO_METATAGS.YES',
                                        0 => 'PLUGINS.SOCIAL_SEO_METATAGS.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'social_pages.pages.facebook.appid' => [
                                    'type' => 'text',
                                    'label' => 'PLUGINS.SOCIAL_SEO_METATAGS.FACEBOOK.APPID',
                                    'help' => 'PLUGINS.SOCIAL_SEO_METATAGS.FACEBOOK.APPID_HELP',
                                    'size' => 'medium'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
