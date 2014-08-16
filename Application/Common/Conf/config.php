<?php

$allowModules = array('Home');
if (I('cookie.auth') == 'loveyan' || APP_DEBUG)
	array_push($allowModules, 'Admin');

return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST'		=>	$allowModules,
	'DEFAULT_MODULE'			=>	'Home',
	'URL_MODEL'						=>	2,
	'ACTION_SUFFIX'				=>	'Action',
	'TMPL_TEMPLATE_SUFFIX'=>'.php',
	'TMPL_PARSE_STRING'		=>	array(
		'__JS__'				=>	'/Public/js',
		'__CSS__'				=>	'/Public/css',
		'__DIST__'			=>	'/Public/dist',
		'__LIB_REQ__'		=>	'/Public/lib_req',
		'__IMG_RES__'		=>	__ROOT__.'/Public/img',
	),
	'URL_HTML_SUFFIX'=>'',

	//数据库配置信息
	'DB_TYPE'		=> 'mysql',				// 数据库类型
	'DB_HOST'		=> 'localhost',		// 服务器地址
	'DB_NAME'		=> 'cosmozhang',	// 数据库名
	'DB_USER'		=> 'root',				// 用户名
	'DB_PWD'		=> 'root',				// 密码
	'DB_PORT'		=> 3306,					// 端口
	'DB_PREFIX'	=> 'think_',			// 数据库表前缀 
	'DB_CHARSET'=> 'utf8',				// 字符集

	// //数据库配置信息
	// 'DB_TYPE'		=> 'mysql',						// 数据库类型
	// 'DB_HOST'		=> SAE_MYSQL_HOST_M,	// 服务器地址
	// 'DB_NAME'		=> SAE_MYSQL_DB,			// 数据库名
	// 'DB_USER'		=> SAE_MYSQL_USER,		// 用户名
	// 'DB_PWD'		=> SAE_MYSQL_PASS,		// 密码
	// 'DB_PORT'		=> SAE_MYSQL_PORT,		// 端口
	// 'DB_PREFIX'	=> 'think_',					// 数据库表前缀 
	// 'DB_CHARSET'=> 'utf8',						// 字符集

	'DEFAULT_STORAGE_ROOT'	=>	__ROOT__,
	'DEFAULT_UPLOADS_ROOT'	=>	'./Uploads/',
	'DEFAULT_UPLOADS_URL'		=>	'./Uploads/',

);