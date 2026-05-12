<?php

$plugins = [
    'optimize_performance' => [
		'title'   => 'Optimize Performance',
		'plugins' => [
			'wp-rocket/wp-rocket'    => [
				'logo'  => [
					'file'  => 'logo-wp-rocket.svg',
					'width' => '50%',
				],
				'title' => 'Speed Up Your Website, Instantly',
				'desc'  => 'WP Rocket is the easiest way to make your WordPress website faster and boost your Google PageSpeed score. Get more traffic, better engagement, and higher conversions effortlessly.',
				'link'  => 'https://wp-rocket.me/?utm_source=imagify-coupon&utm_medium=plugin&utm_campaign=imagify',
			],
			'imagify/imagify' => [
				'logo'  => [
					'file'  => 'logo-imagify.svg',
					'width' => '50%',
				],
				'title' => 'Speed Up Your Website With Lighter Images',
				'desc'  => 'Imagify is the easiest WordPress image optimizer. It automatically compresses images, converts them to WebP and AVIF formats, and lets you resize and optimize with just one click!',
				'link'  => 'https://imagify.io/',
			],
		],
	],
	'boost_traffic'        => [
		'title'   => 'Boost Traffic',
		'plugins' => [
			'seo-by-rank-math/rank-math' => [
				'logo'  => [
					'file'  => 'logo-rank-math.svg',
					'width' => '60%',
				],
				'title' => 'The Swiss Army Knife of SEO Tools',
				'desc'  => 'Rank Math SEO is the Best WordPress SEO plugin with the features of many SEO and AI SEO tools in a single package to help multiply your SEO traffic.',
				'link'  => 'https://rankmath.com/wordpress/plugin/seo-suite/',
			],
		],
	],
	'protect_secure'       => [
		'title'   => 'Protect & Secure',
		'plugins' => [
			'backwpup/backwpup'                   => [
				'logo'  => [
					'file'  => 'logo-backwpup.svg',
					'width' => '60%',
				],
				'title' => 'The Easiest Way to Protect Your Website',
				'desc'  => 'BackWPup is the most comprehensive and user-friendly backup & restore plugin for WordPress. Easily schedule automatic backups, securely store and restore with just a few clicks!',
				'link'  => 'https://backwpup.com/',
			],
			'uk-cookie-consent/uk-cookie-consent' => [
				'logo'  => [
					'file'  => 'logo-termly.svg',
					'width' => '50%',
				],
				'title' => 'GDPR/CCPA Cookie Consent Banner',
				'desc'  => 'One of the easiest, most comprehensive, and popular cookie consent plugins available. Google Gold Certified Partner to quickly comply with data privacy laws from around the world.',
				'link'  => 'https://termly.io/resources/articles/wordpress-cookies-guide/',
			],
		],
	],
];

$expectedActivePluginAsTheLastElement = [
    'boost_traffic'        => [
		'title'   => 'Boost Traffic',
		'plugins' => [
			'seo-by-rank-math/rank-math' => [
				'logo'  => [
					'file'  => 'logo-rank-math.svg',
					'width' => '60%',
				],
				'title' => 'The Swiss Army Knife of SEO Tools',
				'desc'  => 'Rank Math SEO is the Best WordPress SEO plugin with the features of many SEO and AI SEO tools in a single package to help multiply your SEO traffic.',
				'link'  => 'https://rankmath.com/wordpress/plugin/seo-suite/',
                'cta'   => [
                    'text' => 'Install',
                    'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_seo-by-rank-math&_wpnonce=9a68f00b8d&plugin_to_install=seo-by-rank-math%2Frank-math'
                ], 
			],
		],
	],
	'protect_secure'       => [
		'title'   => 'Protect & Secure',
		'plugins' => [
			'backwpup/backwpup'                   => [
				'logo'  => [
					'file'  => 'logo-backwpup.svg',
					'width' => '60%',
				],
				'title' => 'The Easiest Way to Protect Your Website',
				'desc'  => 'BackWPup is the most comprehensive and user-friendly backup & restore plugin for WordPress. Easily schedule automatic backups, securely store and restore with just a few clicks!',
				'link'  => 'https://backwpup.com/',
                'cta'   => [
                    'text' => 'Install',
                    'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_backwpup&_wpnonce=9a68f00b8d&plugin_to_install=backwpup%2Fbackwpup'
                ],
			],
			'uk-cookie-consent/uk-cookie-consent' => [
				'logo'  => [
					'file'  => 'logo-termly.svg',
					'width' => '50%',
				],
				'title' => 'GDPR/CCPA Cookie Consent Banner',
				'desc'  => 'One of the easiest, most comprehensive, and popular cookie consent plugins available. Google Gold Certified Partner to quickly comply with data privacy laws from around the world.',
				'link'  => 'https://termly.io/resources/articles/wordpress-cookies-guide/',
                'cta'   => [
                    'text' => 'Install',
                    'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_uk-cookie-consent&_wpnonce=9a68f00b8d&plugin_to_install=uk-cookie-consent%2Fuk-cookie-consent'
                ],
			],
		],
	],
    'optimize_performance' => [
		'title'   => 'Optimize Performance',
		'plugins' => [
			'imagify/imagify' => [
				'logo'  => [
					'file'  => 'logo-imagify.svg',
					'width' => '50%',
				],
				'title' => 'Speed Up Your Website With Lighter Images',
				'desc'  => 'Imagify is the easiest WordPress image optimizer. It automatically compresses images, converts them to WebP and AVIF formats, and lets you resize and optimize with just one click!',
				'link'  => 'https://imagify.io/',
                'cta'   => [
                    'text' => 'Activated',
                    'url'  => '#'
                ],
			],
		],
	],
];

$expectedCategoryWithActivePluginAsTheLastElement = [
    'wp-rocket/wp-rocket'    => [
        'logo'  => [
            'file'  => 'logo-wp-rocket.svg',
            'width' => '50%',
        ],
        'title' => 'Speed Up Your Website, Instantly',
        'desc'  => 'WP Rocket is the easiest way to make your WordPress website faster and boost your Google PageSpeed score. Get more traffic, better engagement, and higher conversions effortlessly.',
        'link'  => 'https://wp-rocket.me/wp-rocket-for-imagify-users/?utm_source=imagify&utm_medium=partners&utm_campaign=imagify-benefits',
        'cta'   => [
            'text' => 'Get it Now',
            'url'  => 'https://wp-rocket.me/wp-rocket-for-imagify-users/?utm_source=imagify&utm_medium=partners&utm_campaign=imagify-benefits'
        ],
    ],
    'backwpup/backwpup'                   => [
        'logo'  => [
            'file'  => 'logo-backwpup.svg',
            'width' => '60%',
        ],
        'title' => 'The Easiest Way to Protect Your Website',
        'desc'  => 'BackWPup is the most comprehensive and user-friendly backup & restore plugin for WordPress. Easily schedule automatic backups, securely store and restore with just a few clicks!',
        'link'  => 'https://backwpup.com/',
        'cta'   => [
            'text' => 'Install',
            'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_backwpup&_wpnonce=9a68f00b8d&plugin_to_install=backwpup%2Fbackwpup'
        ],
    ],
    'uk-cookie-consent/uk-cookie-consent' => [
        'logo'  => [
            'file'  => 'logo-termly.svg',
            'width' => '50%',
        ],
        'title' => 'GDPR/CCPA Cookie Consent Banner',
        'desc'  => 'One of the easiest, most comprehensive, and popular cookie consent plugins available. Google Gold Certified Partner to quickly comply with data privacy laws from around the world.',
        'link'  => 'https://termly.io/resources/articles/wordpress-cookies-guide/',
        'cta'   => [
            'text' => 'Install',
            'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_uk-cookie-consent&_wpnonce=9a68f00b8d&plugin_to_install=uk-cookie-consent%2Fuk-cookie-consent'
        ],
    ],
    'seo-by-rank-math/rank-math' => [
        'logo'  => [
            'file'  => 'logo-rank-math.svg',
            'width' => '60%',
        ],
        'title' => 'The Swiss Army Knife of SEO Tools',
        'desc'  => 'Rank Math SEO is the Best WordPress SEO plugin with the features of many SEO and AI SEO tools in a single package to help multiply your SEO traffic.',
        'link'  => 'https://rankmath.com/wordpress/plugin/seo-suite/',
        'cta'   => [
            'text' => 'Activated',
            'url'  => '#'
        ],
    ],
];

$expectedActivateTextIfPluginIsAlreadyInstalled = [
    'wp-rocket/wp-rocket'    => [
        'logo'  => [
            'file'  => 'logo-wp-rocket.svg',
            'width' => '50%',
        ],
        'title' => 'Speed Up Your Website, Instantly',
        'desc'  => 'WP Rocket is the easiest way to make your WordPress website faster and boost your Google PageSpeed score. Get more traffic, better engagement, and higher conversions effortlessly.',
        'link'  => 'https://wp-rocket.me/?utm_source=-coupon&utm_medium=plugin&utm_campaign=',
        'cta'   => [
            'text' => 'Activate',
            'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_wp-rocket&_wpnonce=9a68f00b8d&plugin_to_install=wp-rocket%2Fwp-rocket'
        ],
    ],
    'imagify/imagify' => [
        'logo'  => [
            'file'  => 'logo-imagify.svg',
            'width' => '50%',
        ],
        'title' => 'Speed Up Your Website With Lighter Images',
        'desc'  => 'Imagify is the easiest WordPress image optimizer. It automatically compresses images, converts them to WebP and AVIF formats, and lets you resize and optimize with just one click!',
        'link'  => 'https://imagify.io/',
        'cta'   => [
            'text' => 'Activate',
            'url'  => 'http://example.org/wp-admin/admin-post.php?action=install_imagify_from_partner_backwpup&_wpnonce=9a68f00b8d&_wp_http_referer=https%3A%2F%2Fexample.org%2Fwp-admin'
        ],
    ],
    'seo-by-rank-math/rank-math' => [
        'logo'  => [
            'file'  => 'logo-rank-math.svg',
            'width' => '60%',
        ],
        'title' => 'The Swiss Army Knife of SEO Tools',
        'desc'  => 'Rank Math SEO is the Best WordPress SEO plugin with the features of many SEO and AI SEO tools in a single package to help multiply your SEO traffic.',
        'link'  => 'https://rankmath.com/wordpress/plugin/seo-suite/',
        'cta'   => [
            'text' => 'Activate',
            'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_seo-by-rank-math&_wpnonce=9a68f00b8d&plugin_to_install=seo-by-rank-math%2Frank-math'
        ],
    ],
    'uk-cookie-consent/uk-cookie-consent' => [
        'logo'  => [
            'file'  => 'logo-termly.svg',
            'width' => '50%',
        ],
        'title' => 'GDPR/CCPA Cookie Consent Banner',
        'desc'  => 'One of the easiest, most comprehensive, and popular cookie consent plugins available. Google Gold Certified Partner to quickly comply with data privacy laws from around the world.',
        'link'  => 'https://termly.io/resources/articles/wordpress-cookies-guide/',
        'cta'   => [
            'text' => 'Activate',
            'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_uk-cookie-consent&_wpnonce=9a68f00b8d&plugin_to_install=uk-cookie-consent%2Fuk-cookie-consent'
        ],
    ],
];

$expectedUniqueInstallLinkForImagify = [
    'wp-rocket/wp-rocket'    => [
        'logo'  => [
            'file'  => 'logo-wp-rocket.svg',
            'width' => '50%',
        ],
        'title' => 'Speed Up Your Website, Instantly',
        'desc'  => 'WP Rocket is the easiest way to make your WordPress website faster and boost your Google PageSpeed score. Get more traffic, better engagement, and higher conversions effortlessly.',
        'link'  => 'https://wp-rocket.me/?utm_source=-coupon&utm_medium=plugin&utm_campaign=',
        'cta'   => [
            'text' => 'Get it Now',
            'url'  => 'https://wp-rocket.me/?utm_source=-coupon&utm_medium=plugin&utm_campaign='
        ],
    ],
    'imagify/imagify' => [
        'logo'  => [
            'file'  => 'logo-imagify.svg',
            'width' => '50%',
        ],
        'title' => 'Speed Up Your Website With Lighter Images',
        'desc'  => 'Imagify is the easiest WordPress image optimizer. It automatically compresses images, converts them to WebP and AVIF formats, and lets you resize and optimize with just one click!',
        'link'  => 'https://imagify.io/',
        'cta'   => [
            'text' => 'Install',
            'url'  => 'http://example.org/wp-admin/admin-post.php?action=install_imagify_from_partner_uk-cookie-consent&_wpnonce=9a68f00b8d&_wp_http_referer=https%3A%2F%2Fexample.org%2Fwp-admin'
        ],
    ],
    'seo-by-rank-math/rank-math' => [
        'logo'  => [
            'file'  => 'logo-rank-math.svg',
            'width' => '60%',
        ],
        'title' => 'The Swiss Army Knife of SEO Tools',
        'desc'  => 'Rank Math SEO is the Best WordPress SEO plugin with the features of many SEO and AI SEO tools in a single package to help multiply your SEO traffic.',
        'link'  => 'https://rankmath.com/wordpress/plugin/seo-suite/',
        'cta'   => [
            'text' => 'Install',
            'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_seo-by-rank-math&_wpnonce=9a68f00b8d&plugin_to_install=seo-by-rank-math%2Frank-math'
        ],
    ],
    'backwpup/backwpup'                   => [
        'logo'  => [
            'file'  => 'logo-backwpup.svg',
            'width' => '60%',
        ],
        'title' => 'The Easiest Way to Protect Your Website',
        'desc'  => 'BackWPup is the most comprehensive and user-friendly backup & restore plugin for WordPress. Easily schedule automatic backups, securely store and restore with just a few clicks!',
        'link'  => 'https://backwpup.com/',
        'cta'   => [
            'text' => 'Install',
            'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_backwpup&_wpnonce=9a68f00b8d&plugin_to_install=backwpup%2Fbackwpup'
        ],
    ],
];

$expectedWithSecondOrLastPluginActiveInCategory = [
    'optimize_performance' => [
		'title'   => 'Optimize Performance',
		'plugins' => [
			'imagify/imagify' => [
				'logo'  => [
					'file'  => 'logo-imagify.svg',
					'width' => '50%',
				],
				'title' => 'Speed Up Your Website With Lighter Images',
				'desc'  => 'Imagify is the easiest WordPress image optimizer. It automatically compresses images, converts them to WebP and AVIF formats, and lets you resize and optimize with just one click!',
				'link'  => 'https://imagify.io/',
                'cta'   => [
                    'text' => 'Install',
                    'url'  => 'http://example.org/wp-admin/admin-post.php?action=install_imagify_from_partner_wp-rocket&_wpnonce=9a68f00b8d&_wp_http_referer=https%3A%2F%2Fexample.org%2Fwp-admin'
                ],
			],
		],
	],
    'boost_traffic'        => [
		'title'   => 'Boost Traffic',
		'plugins' => [
			'seo-by-rank-math/rank-math' => [
				'logo'  => [
					'file'  => 'logo-rank-math.svg',
					'width' => '60%',
				],
				'title' => 'The Swiss Army Knife of SEO Tools',
				'desc'  => 'Rank Math SEO is the Best WordPress SEO plugin with the features of many SEO and AI SEO tools in a single package to help multiply your SEO traffic.',
				'link'  => 'https://rankmath.com/wordpress/plugin/seo-suite/',
                'cta'   => [
                    'text' => 'Install',
                    'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_seo-by-rank-math&_wpnonce=9a68f00b8d&plugin_to_install=seo-by-rank-math%2Frank-math'
                ], 
			],
		],
	],
	'protect_secure'       => [
		'title'   => 'Protect & Secure',
		'plugins' => [
			'backwpup/backwpup'                   => [
				'logo'  => [
					'file'  => 'logo-backwpup.svg',
					'width' => '60%',
				],
				'title' => 'The Easiest Way to Protect Your Website',
				'desc'  => 'BackWPup is the most comprehensive and user-friendly backup & restore plugin for WordPress. Easily schedule automatic backups, securely store and restore with just a few clicks!',
				'link'  => 'https://backwpup.com/',
                'cta'   => [
                    'text' => 'Install',
                    'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_backwpup&_wpnonce=9a68f00b8d&plugin_to_install=backwpup%2Fbackwpup'
                ],
			],
			'uk-cookie-consent/uk-cookie-consent' => [
				'logo'  => [
					'file'  => 'logo-termly.svg',
					'width' => '50%',
				],
				'title' => 'GDPR/CCPA Cookie Consent Banner',
				'desc'  => 'One of the easiest, most comprehensive, and popular cookie consent plugins available. Google Gold Certified Partner to quickly comply with data privacy laws from around the world.',
				'link'  => 'https://termly.io/resources/articles/wordpress-cookies-guide/',
                'cta'   => [
                    'text' => 'Activated',
                    'url'  => '#'
                ],
			],
		],
	],
];

$expectedOptimizeCategoryAsFirstWhenContainingMainPlugin = [
    'optimize_performance' => [
		'title'   => 'Optimize Performance',
		'plugins' => [
			'imagify/imagify' => [
				'logo'  => [
					'file'  => 'logo-imagify.svg',
					'width' => '50%',
				],
				'title' => 'Speed Up Your Website With Lighter Images',
				'desc'  => 'Imagify is the easiest WordPress image optimizer. It automatically compresses images, converts them to WebP and AVIF formats, and lets you resize and optimize with just one click!',
				'link'  => 'https://imagify.io/',
                'cta'   => [
                    'text' => 'Install',
                    'url'  => 'http://example.org/wp-admin/admin-post.php?action=install_imagify_from_partner_wp-rocket&_wpnonce=9a68f00b8d&_wp_http_referer=https%3A%2F%2Fexample.org%2Fwp-admin'
                ],
			],
		],
	],
    'boost_traffic'        => [
		'title'   => 'Boost Traffic',
		'plugins' => [
			'seo-by-rank-math/rank-math' => [
				'logo'  => [
					'file'  => 'logo-rank-math.svg',
					'width' => '60%',
				],
				'title' => 'The Swiss Army Knife of SEO Tools',
				'desc'  => 'Rank Math SEO is the Best WordPress SEO plugin with the features of many SEO and AI SEO tools in a single package to help multiply your SEO traffic.',
				'link'  => 'https://rankmath.com/wordpress/plugin/seo-suite/',
                'cta'   => [
                    'text' => 'Install',
                    'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_seo-by-rank-math&_wpnonce=9a68f00b8d&plugin_to_install=seo-by-rank-math%2Frank-math'
                ], 
			],
		],
	],
	'protect_secure'       => [
		'title'   => 'Protect & Secure',
		'plugins' => [
			'backwpup/backwpup'                   => [
				'logo'  => [
					'file'  => 'logo-backwpup.svg',
					'width' => '60%',
				],
				'title' => 'The Easiest Way to Protect Your Website',
				'desc'  => 'BackWPup is the most comprehensive and user-friendly backup & restore plugin for WordPress. Easily schedule automatic backups, securely store and restore with just a few clicks!',
				'link'  => 'https://backwpup.com/',
                'cta'   => [
                    'text' => 'Install',
                    'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_backwpup&_wpnonce=9a68f00b8d&plugin_to_install=backwpup%2Fbackwpup'
                ],
			],
			'uk-cookie-consent/uk-cookie-consent' => [
				'logo'  => [
					'file'  => 'logo-termly.svg',
					'width' => '50%',
				],
				'title' => 'GDPR/CCPA Cookie Consent Banner',
				'desc'  => 'One of the easiest, most comprehensive, and popular cookie consent plugins available. Google Gold Certified Partner to quickly comply with data privacy laws from around the world.',
				'link'  => 'https://termly.io/resources/articles/wordpress-cookies-guide/',
                'cta'   => [
                    'text' => 'Install',
                    'url'  => 'http://example.org/wp-admin/admin-post.php?action=plugin_family_install_uk-cookie-consent&_wpnonce=9a68f00b8d&plugin_to_install=uk-cookie-consent%2Fuk-cookie-consent'
                ],
			],
		],
	],
];

return [
    'testShouldReturnEmptyArrayIfEmptyArrayParsed' => [
        'config' => [
            'plugins' => [],
            'main_plugin' => 'wp-rocket/wp-rocket',
            'order' => 'both',
        ],
        'expected' => [],
    ],
    'testShouldReturnActivePluginAsTheLastElement' => [
        'config' => [
            'plugins' => $plugins,
            'main_plugin' => 'wp-rocket/wp-rocket',
            'order' => 'categorized',
            'active_plugin' => 'imagify/imagify.php',
        ],
        'expected' => $expectedActivePluginAsTheLastElement,
    ],
    'testShouldReturnCategoryWithActivePluginAsTheLastElement' => [
        'config' => [
            'plugins' => $plugins,
            'main_plugin' => 'imagify/imagify',
            'order' => 'uncategorized',
            'active_plugin' => 'seo-by-rank-math/rank-math.php',
        ],
        'expected' => $expectedCategoryWithActivePluginAsTheLastElement,
    ],
    'testShouldReturnActivateTextIfPluginIsAlreadyInstalled' => [
        'config' => [
            'plugins' => $plugins,
            'main_plugin' => 'backwpup/backwpup',
            'order' => 'uncategorized',
            'active_plugin' => '',
            'is_installed' => true,
        ],
        'expected' => $expectedActivateTextIfPluginIsAlreadyInstalled,
    ],
    'testShouldReturnUniqueInstallLinkForImagify' => [
        'config' => [
            'plugins' => $plugins,
            'main_plugin' => 'uk-cookie-consent/uk-cookie-consent',
            'order' => 'uncategorized',
            'active_plugin' => '',
        ],
        'expected' => $expectedUniqueInstallLinkForImagify,
    ],
    'testShouldReturnAsExpectedWithSecondOrLastPluginActiveInCategory' => [
        'config' => [
            'plugins' => $plugins,
            'main_plugin' => 'wp-rocket/wp-rocket',
            'order' => 'categorized',
            'active_plugin' => 'uk-cookie-consent/uk-cookie-consent.php',
        ],
        'expected' => $expectedWithSecondOrLastPluginActiveInCategory,
    ],
    'testShouldStillReturnOptimizeCategoryAsFirstWhenContainingMainPlugin' => [
        'config' => [
            'plugins' => $plugins,
            'main_plugin' => 'wp-rocket/wp-rocket',
            'order' => 'categorized',
            'active_plugin' => 'wp-rocket/wp-rocket.php',
        ],
        'expected' => $expectedOptimizeCategoryAsFirstWhenContainingMainPlugin,
    ]
];