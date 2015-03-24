<?php
class ModuleAction extends Action {
    public function index(){
	    $m=new Model("module");
		import('ORG.Util.Page');// 导入分页类
		$count=$m->count();
		$page=new Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
		 //分页跳转的时候保证查询条件
		$show=$page->show();
		$arr=$m->limit($page->firstRow.','.$page->listRows)->select();
	    $this->assign(data,$arr);
		$this->assign("show",$show);
	    $this->display();
    }
	//新增模块
    public function add()
    {
	    $m=M("module");
		$m->mname=$_POST['nickname'];
	    $m->mbuildby=$_POST['muser'];
	    $m->mtime=date('Y-m-d H:i:s');
		$n=$m->add(); // 写入用户数据到数据库
		if($n>0){
	    $this->success('模块添加成功！',"index");
		}
		else
		{
		$this->error('模块添加失败，请重新添加！',"index");
		}
	    //print_r($_POST);
        //$this->display();
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
}