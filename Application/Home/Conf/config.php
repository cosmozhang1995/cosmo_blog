<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON'		=>	true,
	'DEFAULT_THEME'		=>	getTheme(),
	'URL_ROUTE_RULES'	=>	array(
		'/^$/'								=>	'Index/index',
		'/^index_inframe$/'		=>	'Index/inframe',
		'/^articles$/'				=>	'Article/index',
		'/^articles\/p\/(\d+)$/'
													=>	'Article/index?page=:1',
		'/^articles\/p\/(\d+)\/(\d+)$/'
													=>	'Article/index?page=:1&pn=:2',
		'/^article\/(\d+)$/'	=>	'Article/view?id=:1',
		'/^galleries$/'				=>	'Gallary/index',
		'/^galleries\/p\/(\d+)$/'
													=>	'Gallary/index?page=:1',
		'/^galleries\/p\/(\d+)\/(\d+)$/'
													=>	'Gallary/index?page=:1&pn=:2',
		'/^gallery\/(\d+)$/'
													=>	'Gallary/view?id=:1',
		'/^resume$/'
													=>	'Resume/index',
		'/^login$/'						=>	'Authentication/index',
		'/^register$/'				=>	'Authentication/register',
		'/^settings$/'				=>	'Authentication/settings',
		'/^logout$/'					=>	'Authentication/logout',
		'/^newbies$/'					=>	'Newbies/index',


		'/^api\/gallery$/'
													=>	'Gallary/photosHandler?id=:1',
		'/^api\/gallery\/(\d+)$/'
													=>	'Gallary/photosHandler?id=:1',
		'/^api\/gallery\/(\d+)\/photos$/'
													=>	'Gallary/photosApi?id=:1',
	),
	'LAYOUT_ON'				=>	true,
	'LAYOUT_NAME'			=>	'Public/common_layout'
);