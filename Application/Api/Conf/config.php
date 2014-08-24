<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON'		=>	true,
	'URL_ROUTE_RULES'	=>	array(
		'/^gellery$/'												=>	'Gallary/photosHandler?id=:1',
		'/^gellery\/(\d+)$/'								=>	'Gallary/photosHandler?id=:1',
		'/^photo$/'													=>	'Photo/index',
		'/^photo\/(\d+)$/'									=>	'Photo/index?id=:1',
		'/^photo\/gallery\/(\d+)$/'					=>	'Photo/getByGallery?gallary_id=:1',
		'/^photo\/upload\/gallery\/(\d+)$/'	=>	'Photo/uploadPhotos?gallary_id=:1'
	)
);