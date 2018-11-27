<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * Настройки сайта (телефоны, соц-сети и пр.)
 * Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	'panel_contacts' => [
		'title'   => __( 'Контакты', '{domain}' ),
		'options' => [
			'phone' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '',
			],
			'email' => [
				'type'  => 'text',
				'label' => __( 'E-mail', '{domain}' ),
				'value' => '',
			],
			'menu_main' => [
				'type' => 'addable-popup',
				'label' => __('Редактировать меню', '{domain}'),
				'template' => '{{- m1 }}',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
					'm1' => [
						'type'  => 'text',
						'label' => __( 'Главная страница', '{domain}' ),
						'value' => 'Главная',
					],
					'm2' => [
						'type'  => 'text',
						'label' => __( 'О нас', '{domain}' ),
						'value' => 'О нас',
					],
					'm3' => [
						'type'  => 'text',
						'label' => __( 'Наши проекты', '{domain}' ),
						'value' => 'Наши проекты',
					],
					'm4' => [
						'type'  => 'text',
						'label' => __( 'Контакты', '{domain}' ),
						'value' => 'Контакты',
					],
				],
			],
			'vk' => [
				'type'  => 'text',
				'label' => __( 'VK', '{domain}' ),
				'value' => '',
			],
			'facebook' => [
				'type'  => 'text',
				'label' => __( 'Facebook', '{domain}' ),
				'value' => '',
			],
			'telegram' => [
			'type'  => 'text',
				'label' => __( 'Telegram', '{domain}' ),
				'value' => '',
			],
		],
	],
	'footer' => [
		'title'   => __( 'Футер', '{domain}' ),
		'options' => [
			'f_h4' => [
				'type'  => 'text',
				'label' => __( 'Заголовок', '{domain}' ),
				'value' => 'About Us',
			],
			'f_desc' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => 'We specialize in small and mid-sized business management and planning, understanding the difficulties that can occur when operating your own company. We combine many years of experience and down-to-earth personal service.',
			],
			'f_h4_2' => [
				'type'  => 'text',
				'label' => __( 'Заголовок2', '{domain}' ),
				'value' => 'Contact Information',
			],
			'f_address' => [
				'type'  => 'text',
				'label' => __( 'Адрес', '{domain}' ),
				'value' => '2130 Fulton Street <br> San Diego, CA 94117-1080 USA',
			],
			'f_phone' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '1-800-1234-678',
			],
			'f_mail' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => 'info@demolink.org',
			],
			'f_h4_3' => [
				'type'  => 'text',
				'label' => __( 'Заголовок3', '{domain}' ),
				'value' => 'Newsletter',
			],
			'f_desc_2' => [
				'type'  => 'textarea',
				'label' => __( 'Текст2', '{domain}' ),
				'value' => 'Sign up to our newsletter and be the first to know about latest news, special offers, events, and discounts.',
			],
			'f_all_rights' => [
				'type'  => 'text',
				'label' => __( 'Права', '{domain}' ),
				'value' => 'All Rights Reserved.',
			],
			'f_terms' => [
				'type'  => 'text',
				'label' => __( 'Terms', '{domain}' ),
				'value' => 'Terms of Use',
			],
			'f_privacy' => [
				'type'  => 'text',
				'label' => __( 'Privacy', '{domain}' ),
				'value' => 'Privacy Policy',
			],
			'new_build' => [
				'type' => 'addable-popup',
				'label' => __('Добавить информацию', '{domain}'),
				'template' => '{{- text }}',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
					'text' => [
						'type'  => 'text',
						'label' => __( 'Заголовок блока', '{domain}' ),
						'value' => '',
					],
					'new_build' => [
						'type' => 'addable-popup',
						'label' => __('Добавить информацию блока', '{domain}'),
						'template' => '{{- text }}',
						'size' => 'large', // small, medium, large
						'limit' => 0, // limit the number of popup`s that can be added
						'add-button-text' => __('добавить', '{domain}'),
						'sortable' => true,
						'popup-options' => [
							'text' => [
								'type'  => 'text',
								'label' => __( 'Текст', '{domain}' ),
								'value' => '',
							],
							'href' => [
									'type'  => 'text',
									'label' => __( 'Ссылка', '{domain}' ),
									'value' => '#',
							],
						],
					],
				],
			],
		],
	],
];


