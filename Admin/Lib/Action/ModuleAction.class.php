<?php
class ModuleAction extends Action {
    public function index(){
	    $m=new Model("module");
		import('ORG.Util.Page');// 导入分页类
		$count=$m->count();
		$page=new Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
		 //分页跳转的时候保证查询条件
		$show=$page->show();
		$arr=$m->limit($page->firstRow.','.$page->listRows)->order('mid desc')->select();
	    $this->assign(data,$arr);
		$this->assign("show",$show);
	    $this->display();
    }
	//新增模块
    public function add()
    {
	    $m=M("module");
		//判断是编辑还是增加资讯
		
		if($_POST['edit'])//编辑资讯
		{
		   $data['mid']=$_GET['id'];
		   $data['mname']=$_POST['nickname'];
		   $data['mbuildby']=$_POST['muser'];
		   $data['mtime']=date('Y-m-d H:i:s');
		   //print_r($data);
		   $n=$m->save($data);
		}
		
		else//增加资讯
		{
		$m->mname=$_POST['nickname'];
	    $m->mbuildby=$_POST['muser'];
	    $m->mtime=date('Y-m-d H:i:s');
		//$n=$m->add(); // 写入用户数据到数据库
		}
		//返回执行结果
		if($n>0){
	    $this->success('操作成功！',"__APP__/Module/index");
		}
		else
		{
		$this->error('操作失败，请重新操作！',"__APP__/Module/index");
		}
	    // print_r($_POST);
        // $this->display();
    }
	//删除模块
	public function ndelete()
	{
	   $m=M("module");
	   $mm=M("news");
	   $id=$_GET['id'];
	   $n=$m->where("mid=$id")->delete();
	   $arr=$mm->where("mid=$id")->select();
	   $nn=$mm->where("mid=$id")->delete();
	   if(($n>0 && $arr==NULL) || ($n>0 && $arr!=NULL))
		 {
		  $this->success("模块删除成功!","__URL__/index");
		 }
	   else{
		  $this->error("模块删除失败!","__URL__/index");
	   }
	}
	//编辑模块
	public function edit()
	{
	  $m=M("module");
	  $id=$_GET['id'];
	  $action="edit";//用于与add页面公用，判断是编辑资讯
	  $arr=$m->where("mid=$id")->select();
	  $this->assign(datas,$arr);
	  $this->assign(action,$action);
	  //var_dump($arr);
	  $this->display("index");
	
	
	}
}