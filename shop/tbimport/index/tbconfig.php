<?php
$tbconfig =array();
$tbconfig['web_root'] = '../../../data/upload/shop/store/goods/';//上传图片的存放位置。shopnc默认存放在/data/upload/shop/store/goods/ 目录下，如果你未更改，则此处无需修改。默认存放位置在 /global.php文件中定义，由define('DIR_UPLOAD','data/upload'); define('ATTACH_GOODS','shop/store/goods');共同决定。
	//如果你修改了shopnc的默认存放位置，此处需要相应作出修改。
$tbconfig['datahost']     = 'localhost:3306';//数据库服务器地址和端口
$tbconfig['datausername'] = 'v33hao';//数据库用户名
$tbconfig['datauserpass'] = 'W4k4g6B7@!';//数据库用户密码
$tbconfig['databasename'] = 'v33hao';//使用的数据库名
$tbconfig['datatablepre'] = '33hao_'; //数据表前缀