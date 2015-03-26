<?php
$program_config = require('./config.inc.php');
$configinc = array(
		// '配置项'=>'配置值'
		'TMPL_PARSE_STRING' => array(
			'__PUBLIC__'=>'/Public',
			'__APP__'=>'/admin.php',
			'__UPLOADS__'=>'/Uploads',
	    // 'SHOW_PAGE_TRACE'=>'ture',	            //显示载入项
		// 'DB_TYPE'=>'mysql',            	// 数据库类型
		// 'DB_HOST'=>'localhost', 		// 服务器地址
		// 'DB_NAME'=>'wzhn',         // 数据库名
		// 'DB_USER'=>'root',      		// 用户名
		// 'DB_PWD'=>'',          		// 密码
		// 'DB_PORT'=>'3306',        		// 端口
		// 'DB_PREFIX'=>'tp_',				// 前缀
		)
	);
return array_merge( $program_config,$configinc);
// return array(
	// '配置项'=>'配置值'
	 // "URL_PATHINFO_DEPR"=>"/",//修改URL的分隔符
	 // "TMPL_L_DELIM"=>"<{",//修改左定界符
	 // "TMPL_R_DELIM"=>"}>",//修改右定界符
	 // "DB_TYPE"=>"mysql",//数据库类型
	 // "DB_HOST"=>"localhost",//主机名称
	 // "DB_NAME"=>"wzhn",//数据库名称
	 // "DB_USER"=>"root",//数据库用户名称
	 // "DB_PWD"=>"",//数据库密码
	 // "DB_PORT"=>"3306",//设置端口
	 // "DB_PREFIX"=>"tp_",//表前缀
	 // "DB_DSN"=>"mysql://root:@localhost:3306:/wzhn",//使用DSN模式配置数据库信息，当两种方式同时存在时，以DSN方式优先
	 // "SHOW_PAGE_TRACE"=>"true",//开启页面trace功能
	 // '__PUBLIC__' =>'/wzhn/Public',
	// '__APP__'=>'/wzhn/admin.php',
	// '__UPLOADS__'=>'/wzhn/Uploads',
// );
?>