<?php
header("content=text/html; charset=utf-8");
	class UserModel extends RelationModel{
	//在提交前判断用户所填是否符合规则
		protected $_validate=array(			
			array('uname','require','用户名必须填写!'),
			//array('yname','','用户名必须填写!',0,'unique',1), //判断用户名是否存在
			array('upwd','/^\w{6,}$/','密码必须六个字母以上!',0,'regex',1),
			//array('uauth','require','权限必须填写!'),
			array('upwd','upwd2','确认密码不正确!',0,'confirm'),
			array('code','require','验证码必须填写!'),
			array('code','checkCode','验证码错误!',0,'callback',1),
			
		);
		protected $_link=array(
	       'module'=> array(  
				'mapping_type'=>BELONGS_TO,
				'foreign_key'=>'mid',
				'mapping_name'=>'mid',
				'mapping_fields'=>'mname',
				'as_fields'=>'mname',
            ),
	   );
		protected function checkCode(){
			if(md5($_POST['code'])==$_SESSION['verify']){return true;}else{return false;}
		}
		
	} 

	
			
?>