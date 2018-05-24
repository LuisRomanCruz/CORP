<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

	// Site name
	'site_name' => 'ELI ART',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => 'Macchu Art',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> 'Luis Roman',
		'description'	=> 'Página de arte Elizabeth',
		'keywords'		=> ''
	),

	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
		),
		'foot'	=> array(			
			'assets/dist/frontend/frontendEli/jquery-1.11.1.min.js',
			'assets/dist/frontend/frontendEli/menu_jquery.js',			
		)
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/frontend/frontendEli/bootstrap.css',
			'assets/dist/frontend/frontendEli/style.css',
		)
	),
	

	// Default CSS class for <body> tag
	'body_class' => '',
	
	// Multilingual settings
	'languages' => array(
		'default'		=> 'es',
		'autoload'		=> array('general'),
		'available'		=> array(
			'en' => array(
				'label'	=> 'English',
				'value'	=> 'english'
			),
			'zh' => array(
				'label'	=> '繁體中文',
				'value'	=> 'traditional-chinese'
			),
			'cn' => array(
				'label'	=> '简体中文',
				'value'	=> 'simplified-chinese'
			),
			'es' => array(
				'label'	=> 'Español',
				'value' => 'spanish'
			)
		)
	),

	// Google Analytics User ID
	'ga_id' => '',

	// Menu items
	'menu' => array(
		'home' => array(
			'name'  => 'Home',
			'url'		=> '',
		),
		'productos' => array(
			'name'  => 'Galeria de Productos',
			'url'		=> 'productos',
		),
		'quienes_somos' => array(
			'name'  => 'Quienes Somos',
			'url'		=> 'quienes_somos',
		),
		'marcas' => array(
			'name'  => 'Nuestras Marcas',
			'url'		=> 'marcas',
		),		
		'promociones' => array(
			'name'  => 'Promociones',
			'url'		=> 'promociones',
		),
		'contactanos' => array(
			'name'  => 'Contactanos',
			'url'		=> 'contactanos',
		),
	),

	// Login page
	'login_url' => '',

	// Restricted pages
	'page_auth' => array(
	),

	// Email config
	'email' => array(
		'from_email'		=> '',
		'from_name'			=> '',
		'subject_prefix'	=> '',
		
		// Mailgun HTTP API
		'mailgun_api'		=> array(
			'domain'			=> '',
			'private_api_key'	=> ''
		),
	),

	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_frontend';