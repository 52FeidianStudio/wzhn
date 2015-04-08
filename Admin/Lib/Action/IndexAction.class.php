<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
 public function index(){
		//判断用户是否登陆过
		if(isset($_SESSION['uname']) && $_SESSION['uname']!=''){
			$this->display();
		}else{
			$this->redirect('Login/index');
		}   
		//$this->display();
	}
}