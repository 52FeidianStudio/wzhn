<?php
class MangerAction extends PublicAction {
    public function index(){
		//$this->check_limit(0);   
		$this->check_time();
	    $this->display();
    }
    public function add()
    {
		//$this->check_limit(0);
		$this->check_time();
        $this->display();
    }
	public function add2(){
		$m=D('User');
		if(!$m->create()){
			$this->error($m->getError());
		}else{
			$m->uname=$_POST['uname']; 
			$m->upwd=md5($_POST['upwd']);
			$m->uauth=$_POST['uauth'];
			$m->umsg= $_POST['smg'];
			$m->ubuild=date('Y-m-d H:i:s');
			$n=$m->add(); // 添加新用户
			if($n)
			{
			    $this->success("添加管理员成功!","index");
			}else{
			    $this->error("添加管理员失败!");
			}
		}
		
	}
	public function check_name(){
	//检测用户是否存在
		$name=$_GET['name'];
		$m=M('user');
		$where['uname']=$name;
		$sql=$m->where($where)->count();
		if($sql){echo 0;}else{echo 1;}
	}
}