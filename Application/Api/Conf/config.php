<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON'		=>	true,
	'URL_ROUTE_RULES'	=>	array(
		'/^article$/'												=>	'Article/index',
		'/^article\/(\d+)$/'								=>	'Article/index?id=:1',
		'/^gallery$/'												=>	'Gallery/index',
		'/^gallery\/(\d+)$/'								=>	'Gallery/index?id=:1',
		'/^gallery\/(\d+)\/photos$/'				=>	'Photo/getByGallery?gallary_id=:1',
		'/^photo$/'													=>	'Photo/index',
		'/^photo\/(\d+)$/'									=>	'Photo/index?id=:1',
		'/^photo\/gallery\/(\d+)$/'					=>	'Photo/getByGallery?gallary_id=:1',
		'/^photo\/upload\/gallery\/(\d+)$/'	=>	'Photo/uploadPhotos?gallary_id=:1'
	)
);