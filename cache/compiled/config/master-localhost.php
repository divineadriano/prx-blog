<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1554941597,
    'checksum' => '26168ac414c42da332a34203aacc754e',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1553751019
            ],
            'plugins/email' => [
                'file' => 'user/config/plugins/email.yaml',
                'modified' => 1553748712
            ],
            'plugins/gantry5' => [
                'file' => 'user/config/plugins/gantry5.yaml',
                'modified' => 1553844233
            ],
            'plugins/language-selector' => [
                'file' => 'user/config/plugins/language-selector.yaml',
                'modified' => 1554941597
            ],
            'plugins/readingtime' => [
                'file' => 'user/config/plugins/readingtime.yaml',
                'modified' => 1553830471
            ],
            'plugins/social-seo-metatags' => [
                'file' => 'user/config/plugins/social-seo-metatags.yaml',
                'modified' => 1554266402
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1553751017
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1554277946
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1553751019
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1554280323
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1553751208
            ],
            'security' => [
                'file' => 'system/config/security.yaml',
                'modified' => 1553751208
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1553751208
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1553751208
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1553751208
            ]
        ],
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1553754819
            ],
            'plugins/comments' => [
                'file' => 'user/plugins/comments/comments.yaml',
                'modified' => 1554264818
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1553754834
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1553748663
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1553748705
            ],
            'plugins/gantry5' => [
                'file' => 'user/plugins/gantry5/gantry5.yaml',
                'modified' => 1553844063
            ],
            'plugins/language-selector' => [
                'file' => 'user/plugins/language-selector/language-selector.yaml',
                'modified' => 1553837786
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1553754863
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1553748663
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1553748663
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1553754856
            ],
            'plugins/readingtime' => [
                'file' => 'user/plugins/readingtime/readingtime.yaml',
                'modified' => 1553830457
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1553748684
            ],
            'plugins/social-seo-metatags' => [
                'file' => 'user/plugins/social-seo-metatags/social-seo-metatags.yaml',
                'modified' => 1554266339
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => '',
                'body_classes' => '',
                'content_padding' => true,
                'twofa_enabled' => true,
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => true,
                    'dashboard-feed' => true,
                    'dashboard-pages' => true
                ],
                'pages' => [
                    'show_parents' => 'both',
                    'show_modular' => true
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'frontend_preview_target' => 'inline',
                'show_github_msg' => true,
                'pages_list_display_field' => 'title',
                'google_fonts' => false,
                'admin_icons' => 'line-awesome',
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'comments' => [
                'enabled' => true,
                'enable_on_routes' => [
                    0 => '/blog'
                ],
                'disable_on_routes' => [
                    0 => '/blog/blog-post-to-ignore',
                    1 => '/ignore-this-route'
                ],
                'form' => [
                    'name' => 'comments',
                    'fields' => [
                        0 => [
                            'name' => 'name',
                            'label' => 'PLUGIN_COMMENTS.NAME_LABEL',
                            'placeholder' => 'PLUGIN_COMMENTS.NAME_PLACEHOLDER',
                            'autocomplete' => 'on',
                            'type' => 'text',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        1 => [
                            'name' => 'email',
                            'label' => 'PLUGIN_COMMENTS.EMAIL_LABEL',
                            'placeholder' => 'PLUGIN_COMMENTS.EMAIL_PLACEHOLDER',
                            'type' => 'email',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        2 => [
                            'name' => 'text',
                            'label' => 'PLUGIN_COMMENTS.MESSAGE_LABEL',
                            'placeholder' => 'PLUGIN_COMMENTS.MESSAGE_PLACEHOLDER',
                            'type' => 'textarea',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        3 => [
                            'name' => 'date',
                            'type' => 'hidden',
                            'process' => [
                                'fillWithCurrentDateTime' => true
                            ]
                        ],
                        4 => [
                            'name' => 'title',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.page.header.title'
                        ],
                        5 => [
                            'name' => 'lang',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.language.getLanguage'
                        ],
                        6 => [
                            'name' => 'path',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.uri.path'
                        ]
                    ],
                    'buttons' => [
                        0 => [
                            'type' => 'submit',
                            'value' => 'PLUGIN_COMMENTS.SUBMIT_COMMENT_BUTTON_TEXT'
                        ]
                    ],
                    'process' => [
                        0 => [
                            'email' => [
                                'subject' => 'PLUGIN_COMMENTS.EMAIL_NEW_COMMENT_SUBJECT',
                                'body' => '{% include \'forms/data.html.twig\' %}'
                            ]
                        ],
                        1 => [
                            'addComment' => NULL
                        ],
                        2 => [
                            'message' => 'PLUGIN_COMMENTS.THANK_YOU_MESSAGE'
                        ],
                        3 => [
                            'reset' => true
                        ]
                    ]
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => 'mail@example.com',
                'from_name' => NULL,
                'to' => 'mail@example.com',
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'none',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'inline_css' => true,
                'refresh_prevention' => false,
                'client_side_validation' => true,
                'inline_errors' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'filesize' => 0,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'gantry5' => [
                'enabled' => true,
                'production' => true,
                'use_media_folder' => true,
                'offline' => false,
                'offline_message' => NULL,
                'asset_timestamps' => true,
                'asset_timestamps_period' => 7.0,
                'debug' => false,
                'compile_yaml' => true,
                'compile_twig' => true
            ],
            'language-selector' => [
                'enabled' => true,
                'built_in_css' => true,
                'untranslated_pages_behavior' => 'none',
                'button_display' => 'name',
                'select_display' => 'name'
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'redirect_to_login' => true,
                'redirect_after_login' => NULL,
                'redirect_after_logout' => '/',
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'route_unauthorized' => '/user_unauthorized',
                'dynamic_page_visibility' => false,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 2,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 5,
                'max_login_interval' => 10,
                'user_registration' => [
                    'enabled' => false,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'level'
                    ],
                    'default_values' => [
                        'level' => 'Newbie'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'redirect_after_registration' => '',
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => false,
                        'send_activation_email' => false,
                        'manually_enable' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ]
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'readingtime' => [
                'enabled' => true,
                'words_per_minute' => 100,
                'format' => '{minutes_short_count} {minutes_text}, {seconds_short_count} {seconds_text}',
                'round' => 'minutes'
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'built_in_js' => true,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'search_content' => 'rendered',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => NULL
                ],
                'filter_combinator' => 'and',
                'ignore_accented_characters' => false,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ],
            'social-seo-metatags' => [
                'enabled' => true,
                'seo' => [
                    'robots' => 'without',
                    'length' => 20,
                    'taxonomy' => [
                        'enabled' => true
                    ],
                    'page_content' => [
                        'enabled' => false
                    ],
                    'keywords' => [
                        'taxonomy' => [
                            'enabled' => true
                        ],
                        'page_content' => [
                            'enabled' => true
                        ],
                        'length' => 20
                    ]
                ],
                'social_pages' => [
                    'pages' => [
                        'twitter' => [
                            'enabled' => true,
                            'type' => 'summary',
                            'username' => '@ProximaXio'
                        ],
                        'facebook' => [
                            'enabled' => false,
                            'appid' => '1234567890'
                        ]
                    ]
                ]
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb-svg.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'security' => [
            'xss_whitelist' => [
                0 => 'admin.super'
            ],
            'xss_enabled' => [
                'on_events' => true,
                'invalid_protocols' => true,
                'moz_binding' => true,
                'html_inline_styles' => true,
                'dangerous_tags' => true
            ],
            'xss_dangerous_tags' => [
                0 => 'applet',
                1 => 'meta',
                2 => 'xml',
                3 => 'blink',
                4 => 'link',
                5 => 'style',
                6 => 'script',
                7 => 'embed',
                8 => 'object',
                9 => 'iframe',
                10 => 'frame',
                11 => 'frameset',
                12 => 'ilayer',
                13 => 'layer',
                14 => 'bgsound',
                15 => 'title',
                16 => 'base'
            ],
            'uploads_dangerous_extensions' => [
                0 => 'php',
                1 => 'html',
                2 => 'htm',
                3 => 'js',
                4 => 'exe'
            ],
            'salt' => '2cY8n4Lfyg6uEI'
        ],
        'site' => [
            'title' => 'ProximaX',
            'default_lang' => 'en',
            'author' => [
                'name' => 'ProximaXio',
                'email' => 'info@proximax.io'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'ProximaX Blockchain Reimagined and Evolved',
                'Keywords' => 'ProximaX, ProximaX Sirius, blockchain technology, Blockchain powered, Blockchain protocol, Distributed ledger technology, DLT, dlt, Distributed ledger, Decentralized database, Decentralized database technology, Decentralized storage, Decentralized storage technology, Decentralized supply chain, Decentralized streaming, Integrated and distributed ledger technology, IaDLt, Peer-to-peer technology, Peer to peer streaming, Peer to peer, Consensus mechanism, Consensus protocol, Asymmetric encryption, Data encryption, Off-chain storage, Off-chain streaming, Distributed File Management System, DFMS, Super Contract, Immutability, Data encryption, Encrypted by default, Permissioned, Permission based, Tokenomics, Token economics, Crypto trading, Cryptocurrency, Supply chain, CSD, Central Securities Depository, STO, Security Token Offering, Decentralized supply chain, STO, Private blockchain, DAapps, Decentralized applications, Blockchain apps, Streaming Layer, Streaming Node, Storage Layer, Storage Node, Sharded Information, Sharded Data, Use Case, Use Cases, Blockchain Consensus, Consensus Protocol, Enterprise Solution, Enterprise Solutions, System Integration, Transparency, Immutability, Irreversibility, Traceability, Proof of Bandwidth, Proof of Conflation Aggregate, Proof of Storage, Encryption, Data Security, Data Privacy, Cyber Security, Hackers, Hacking, Nodes, Public Chain, Private Chain, Hybrid Chain, Public & Private Chain, Catapult, SDK, SDKs, Software Development Kits, Super Contract, Super Contracts, Smart Contract, Smart Contracts, Peer-to-Peer , Peer-to-Peer Storage, Software-as-a-Service, SaaS, Lon Wong, PSP, PeerStream, PeerStream Protocol, Anonymous streaming, New Economic Model, New Economic Model Foundation, 482.solutions, Ministry of Community Development UAE, Dragonfly  Fintech, Xarcade, Testnet, Test network, Mainnet, Main network, Tokenomics, Token Economics, XPX, Crypto Currency, Crypto Currencies, Crypto Exchange, Crypto Exchanges, Bitcoin, Zero trust, Escrow, Onchain escrow, Trustless swaps, Trustless, Onion routing, SIM Identity attestation, ProximaX KYC, KYC, Know Your Customer, Know Your Counter Party, Onboarding Customer, Customer Onboarding, Identity Management, Identity Management System, Identity Verification, Identity Authentication, Anti-Money Laundering, AML, RegTech, Regulation Tech, Regulation Technology, GDPR, General Data Protection Regulation, EU GDPR, European Union GDPR, European Union General Data Protection Regulation, Knowyourcustomer, Compliance system, Compliance systems, , ProximaX Suite, Office Suite, Office Collaboration, Workforce Collaboration, Collaboration, Real Time Collaboration, Office suite, word processing, Office collaboration, File sharing, Decentralized file sharing, Real Time Editing, Office Productivity, Productivity, Office Applications, Microsoft Office, Word Processor, Word Processing, Microsoft Word Spreadsheet, Spreadsheets, Excel, Microsoft Excel, Presentation, Presentations, Microsoft Powerpoint, Powerpoint, Keynote, Collabora Office, LibreOffice, Collabora Productivity, Collabora Productivity Ltd'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 250,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'force_lowercase_urls' => true,
            'custom_base_url' => '',
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'intl_enabled' => true,
            'languages' => [
                'supported' => [
                    0 => 'en',
                    1 => 'zh',
                    2 => 'ja',
                    3 => 'ko',
                    4 => 'es'
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'rt_requiem',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '302',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => 0,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ]
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ],
                'auto_metadata_exif' => false,
                'upload_limit' => 134217728
            ],
            'session' => [
                'enabled' => true,
                'initialize' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ],
            'strict_mode' => [
                'yaml_compat' => true,
                'twig_compat' => true
            ]
        ]
    ]
];
