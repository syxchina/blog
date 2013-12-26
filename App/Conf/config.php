<?php
return array(
	//'配置项'=>'配置值'
	
	'DB_HOST' => 'localhost',
	'DB_USER' => 'root',
	'DB_PWD' => 'root',
	'DB_NAME' => 'blog',
	'DB_PREFIX' => 'bl_', 

	'APP_GROUP_LIST'    =>      'Index,Admin',
	'DEFAULT_GROUP'     =>      'Index',
	'APP_GROUP_MODE'   =>       1,
	'APP_GROPU_PATH'    =>       'Modules',

	// 装在验证码配置
	'LOAD_EXT_CONFIG'   =>  'verify,water',
	//'SHOW_PAGE_TRACE' => true,
);

?>