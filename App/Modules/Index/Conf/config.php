<?php
	return array(
		//自动装载文件目录
		'APP_AUTOLOAD_PATH' => '@.TagLib',
		//加载标签库
		'TAGLIB_BUILD_IN' => 'Cx,Mytag',
		// 开启静态缓存
		//'HTML_CACHE_ON' => true,
		'HTML_CACHE_RULES' => array(
			'Show:index' => array('{:Module}_{:Action}_{id}', 10),
			)

		);