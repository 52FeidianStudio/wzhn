<?php
class MangerAction extends PublicAction {
    public function index(){
		$this->check_limit(0);   
		$this->check_time();
		import('ORG.Util.Page');
		$m= M('User'); 
		$count=$m->count();
		$page=new Page($count,5);
		$show=$page->show();
		$arr=$m->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('arr',$arr);
		$this->assign('show',$show);
	    $this->display();
    }
    public function add()
    {
		$this->check_limit(1);
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
			$m->ubuildby=$_SESSION['uname'];
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
	public function delete(){
		$this->check_limit(0);   
		$this->check_time();
	    $m=M('User');
	    $where['uid']=$_GET['uid'];
	    $n=$m->where($where)->delete();
	    if($n>0)
		{
		   $this->success("管理员删除成功!","__URL__/index",0);
		}
	    else{
		   $this->error("管理员删除失败!","__URL__/index",0);
	    }
		
	}
	public function edit(){
		$this->check_limit(1);   
		$this->check_time();
		$this->display();
		if($_POST['submit']){
				if(md5($_POST['code'])==$_SESSION['verify']){
					$m=M('User');
					$where['uid']=$_SESSION['uid']; 
					$sql=$m->where($where)->find(); 
					if($sql['upwd']==md5($_POST['password'])){
						if($_POST['password1']==$_POST['password2']){
							$where['upwd']=md5($_POST['password1']);
							$m->save($where);
							$this->success('密码修改成功,请重新登录！',__APP__.'/Login',1);
						}else{
							$this->error('两次输入的密码不相同!',1);
						}
					}else{
						$this->error('您输入的密码不正确!',1);
					}
				}else{
					$this->error('验证码输入错误',1);
					}
			}	
	}	
	//修改密码
	public function change(){
		if(md5($_POST['code'])==$_SESSION['verify']){
				$m=D('User');
				$where['uid']=$_SESSION['uid']; 
				$sql=$m->where($where)->find(); 
				if($sql['upwd']==md5($_POST['password'])){
					if($_POST['password1']==$_POST['password2']){
						$where['upwd']=md5($_POST['password1']);
						$m->save($where);
						$this->success('密码修改成功,请重新登录！',__APP__.'/Login',1);
					}else{
						$this->error('两次输入的密码不相同!');
					}
				}else{
					$this->error('您输入的密码不正确!');
				}
		}else{
				$this->error('验证码输入错误');
		}
	}
}
	
