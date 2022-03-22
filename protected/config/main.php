<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
date_default_timezone_set( 'Asia/Singapore' );
define( "URL_HOME", "/site/index" );
define( "URL_LOGIN", "/site/login" );
define( "URL_LOGOUT", "/site/logout" );
define( "URL_SIGNUP", "/user/signup" );

define( "LOGIN", "c74e2d40-ce69-11e9-b9df-1831bfb33ab0" );
define( "LOGOUT", "8167785f-ce59-11e9-b9df-1831bfb33ab0" );

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'CCAA',

	// preloading 'log' component
	'preload'=>array(
		'log',
		'booster'
	),

    // path aliases
	'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/booster'), // change this if necessary
        'booster' => realpath(__DIR__ . '/../extensions/booster'), // change this if necessary
        'yiiwheels' => realpath(__DIR__ . '/../extensions/yiiwheels'),
    ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'bootstrap.helpers.TbHtml',
    'bootstrap.helpers.TbArray',
    'bootstrap.behaviors.TbWidget',
		'bootstrap.widgets.*',
		'ext.YiiMailer.YiiMailer',
		'ext.vendor.autoload',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'abc',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),


		'rbam'=>array(
            'applicationLayout'=>'application.views.layouts.main',
            'authAssignmentsManagerRole'=>' Auth Assignments Manager',
            'authenticatedRole'=>'Authenticated',
            'authItemsManagerRole'=>'Auth Items Manager',
            'baseScriptUrl'=>null,
            'baseUrl'=>null,
            'cssFile'=>null,
            'development'=>false,
            'exclude'=>'rbam',
            'guestRole'=>'Guest',
            'initialise'=>false,
            'layout'=>'rbam.views.layouts.main',
            'juiCssFile'=>'jquery-ui.css',
            'juiHide'=>'puff',
            'juiScriptFile'=>'jquery-ui.min.js',
            'juiScriptUrl'=>null,
            'juiShow'=>'fade',
            'juiTheme'=>'base',
            'juiThemeUrl'=>null,
            'pageSize'=>5,
            'rbacManagerRole'=>'RBAC Manager',
            'relationshipsPageSize'=>5,
            'showConfirmation'=>3000,
            'showMenu'=>true,
            'userClass'=>'User',
            'userCriteria'=>array(),
            'userIdAttribute'=>'id',
            'userNameAttribute'=>'username',
        ),
	),

	// application components
		'components'=>array(
		'booster' => array(
    	'class' => 'ext.booster.components.Booster',
		),
		'mailer' => array(
	        'class' => 'application.extensions.mailer.EMailer',
	        'pathViews' => 'application.views.email',
	        'pathLayouts' => 'application.views.email.layouts'
	    ),
		'request' => array(
            // 'class' => 'CustomHttpRequest',
            'class' => 'application.components.CustomHttpRequest',
            'enableCsrfValidation' => true,
			 'enableCookieValidation'=>true,
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'autoRenewCookie' => true,
            'authTimeout' =>1600000 ,
            'class' => 'WebUser',
		),
		'securityManager'=>array(
			'cryptAlgorithm' => 'rijndael-256',
			'encryptionKey' => 'Amiel23Daniel123',
        ),
        'authManager'=>array(
                'class'=>'CDbAuthManager',
                'connectionID'=>'db',
        ),

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ccaa',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				// array(
				// 	'class'=>'CWebLogRoute',
				// ),
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'info@yggdrasillsolution.com',
	),

);
