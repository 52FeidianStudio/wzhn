<?php
$project_config=require('./config.inc.php');
$app_config = array(
    //'配置项'=>'配置值'
    'TMPL_PARSE_STRING' => array(
		'__UPLOADS__' => '/Uploads',
        '__PUBLIC__' => '/Public'
    )
);
return array_merge($project_config, $app_config);
?>