<?php

/**
 * Here you should place all your settings.
 * All settings should be placed in array variable with name `$config`.
 */

/**
 * Database settings.
 */
$config['settings']['database']['connections'] = [
	'default'	=>	[
		'driver'	=>	'pdo_mysql',
		'host'		=>	'localhost',
		'port'		=>	3306,
		'dbname'	=>	'justcore',
		'user'		=>	'justcore',
		'password'	=>	'justcore',
		'charset'	=>	'utf8',
	],

];

// You should uncomment this line and set own Application Key.
// Application key uses when Core builds some paths.
$config['settings']['app_key'] = md5('FrameworkApp');

// Uncomment this line if you have problems with running site.
$config['settings']['debug'] = true;
