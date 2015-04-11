<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends PublicAction {
 public function index(){
		//判断用户是否登陆过
		$this->check_limit(1);   
		$this->check_time();
		if(isset($_SESSION['uname']) && $_SESSION['uname']!=''){
			$this->display();
		}else{
			$this->redirect('Login/index');
		}   
		//$this->display();
	}
	public function logOut()
	{
	    session(null);
	    $this->redirect('Login/index');
	
	}
}