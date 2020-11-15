<?php 
function dz_setup_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support('starter-content',[
        'widgets'     =>[
            'dz_sidebar' =>[
                'text_business_info','search','text_about'
            ]
        ], 


        'attachments' =>[
            'image-about'   =>[
                'post_title'    => __('About','dazzlesoft'),
                'file'          =>'assets/images/about/1.jpg',
                
            ],

        ],


        'posts'       =>[
            'home'    =>[
                'thumbnail' =>'{{image-about}}'
            ],
            'about'    =>[
                'thumbnail' =>'{{image-about}}'
            ],
            'contact'    =>[
                'thumbnail' =>'{{image-about}}'
            ],
            'blog'    =>[
                'thumbnail' =>'{{image-about}}'
            ],
            'homepage-section'    =>[
                'thumbnail' =>'{{image-about}}'
            ],

        ],



        'options'     =>[
            'show_on_front'  =>'page',
            'page_on_front'  =>'{{home}}',
            'page_for_posts' =>'{{blog}}',
        ],

        
        'theme_mods'  =>[
            'dz_facebook_hendle' =>'dazzlesoft',
            'dz_twitter_handle' =>'dazzlesoft',
            'dz_instagram_handle' =>'dazzlesoft',
            'dz_email' =>'dazzlesoft',
            'dz_phone_number' =>'dazzlesoft',
            'dz_header_show_search' =>'yes',
            'dz_header_show_cart' =>'yse',
        ],



        'nav_menu'    =>[


            'nav_menu'   =>[


                'paimary'  =>[

                    'name' => __('Primary Menu','dazzlesoft'),
                    'items' =>[
                        'link_home',
                        'page_about',
                        'page_blog',
                        'page_contact',
                    ],

                ],

                'secondary'  =>[

                    'name' => __('Secondary Menu','dazzlesoft'),

                    'items' =>[
                        'link_home',
                        'page_about',
                        'page_blog',
                        'page_contact',
                    ]
                ,


                    ],


                    'topheader'  =>[

                        'name' => __('Topheader Menu','dazzlesoft'),

                        'items' =>[
                            'link_home',
                            'page_about',
                            'page_blog',
                            'page_contact',
                        ]
                    ,
    
    
                ]

            ],
        ]
    ]);

    register_nav_menu('primary',__('Primary Menu','dazzlesoft'));
    register_nav_menu('secondary',__('Secondary Menu','dazzlesoft'));
    register_nav_menu('topheader',__('Topheader Menu','dazzlesoft'));


    if (function_exists('quads_register_ad')){
        quads_register_ad( array('location' => 'dazzle_header',
                                 'description' => 'DazzleSoft Header position')
                                 );
        // quads_register_ad( array('location' => 'footer', 'description' => 'Footer position') );
        // quads_register_ad( array('location' => 'custom', 'description' => 'Custom position') );
        }
}

?>