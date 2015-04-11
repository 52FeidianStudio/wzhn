<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function index(){
     
	    $this->display();
    }
    
  public function code(){
	//生成验证码
		import('ORG.Util.Image');
		Image::buildImageVerify(4,1,'png',40,30,'verify');       //长度，类型 ，图片类型，宽度，高度，记录名称
    }
public function doLogin(){
		//接受值，判断用户在数据库中是否存在
		//存在-允许登陆，不存在-显示错误信息
		/* dump($_POST);
		exit; */
		$uname=$_POST['uname'];
		$upwd=$_POST['upwd'];
		$verify=$_POST['verify'];
		if(md5($verify)!=$_SESSION['verify']){
			$this->error('验证码不正确!');
		}
		$user=M('User');
		$where['uname']=$uname;
		$where['upwd']=md5($upwd);//md5加密
		/* dump($where);
		exit; */
		$arr=$user->field('uid')->where($where)->find();
		/* dump($arr);
		exit; */
		if($arr){
			$_SESSION['uname']=$uname;//向session写入uname
			$_SESSION['uid']=$arr['uid'];
			$_SESSION['upwd']=md5($upwd);
			$this->success('用户登录成功',U('Index/index'));
		}else{
			$this->error('用户名或密码不正确!');
		} 
	}
}