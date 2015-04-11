<?php
header("Content-Type:text/html; charset=utf-8");
class PublicAction extends Action{
	public function code(){
	//生成验证码
		import('ORG.Util.Image');
		Image::buildImageVerify(4,1,'png',40,30,'verify');       //长度，类型 ，图片类型，宽度，高度，记录名称
    }
    public function check_limit($limit){
    //检查用户权限,$limit表示用户权限为多少是可以访问该页  
		if($_SESSION['uid']==null){
			$this->error('请先登录!!!!',__APP__.'/Login/index');
		}else{
			$m=M('user');
			$where['uid']=$_SESSION['uid'];
			$sql=$m->where($where)->find();
			if($_SESSION['upwd']==$sql['upwd']){
				if($sql['uauth']==0||$limit==1){
				}else{
					$this->error('权限不足',__APP__.'/Index/index',1);//要更改跳转页*********
				}
			}else{
					$this->error('密码不正确',__APP__.'/Login/index',1);;
			}	   
	    }
    }
	public function check_time(){
		//当用户登录半小时没操作页面时，自动退出。登录超时
		$newtime=mktime();
		if($newtime-$_SESSION['time']>1000000000000){
			session_destroy();
		}else{
			$_SESSION['time']=mktime();
		}
	}
	public function _empty(){
	//当用户输入无用网址时，提示错误并返回首页
		$this->error('你访问的网址不存在!',__APP__.'/Index');
	}
}
?>