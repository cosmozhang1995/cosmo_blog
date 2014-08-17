<?php
return array(
	'TMPL_PARSE_STRING'		=>	array(
		'__JS__'				=>	'/Public/js',
		'__CSS__'				=>	'/Public/css',
		'__DIST__'			=>	'/Public/dist',
		'__LIB_REQ__'		=>	'/Public/lib_req',
		'__IMG_RES__'		=>	__ROOT__.'/Public/img'
	),

	//数据库配置信息
	'DB_TYPE'		=> 'mysql',				// 数据库类型
	'DB_HOST'		=> 'localhost',		// 服务器地址
	'DB_NAME'		=> 'cosmozhang',	// 数据库名
	'DB_USER'		=> 'root',				// 用户名
	'DB_PWD'		=> 'root',		// 密码
	'DB_PORT'		=> 3306,					// 端口
	'DB_PREFIX'	=> 'think_',			// 数据库表前缀 
	'DB_CHARSET'=> 'utf8',				// 字符集
);