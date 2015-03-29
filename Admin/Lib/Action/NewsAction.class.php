<?php
class NewsAction extends Action {
    public function index(){
	    // $m=M("news");//测试数据库数据
		// $arr=$m->select();
		// print_r($arr);
		
		$m=new Model("news");
		
        $module=new Model("module");
        $result=$module->field('mid,mname')->select();
		import("ORG.Util.String");
		import('ORG.Util.Page');// 导入分页类
		if(!$_GET['submit'])
		{
		$count=$m->where($data)->count();
		$page=new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
		 //分页跳转的时候保证查询条件
		$show=$page->show();
		$arr=$m->limit($page->firstRow.','.$page->listRows)->order('nid desc')->select();
		}
		else
		{
					 if(isset($_GET['key']) and $_GET['key']!=null)
				{
						switch($_GET['option-key'])
						 {
						   case '0':
							 $data['ntitle']=array("like","%{$_GET['key']}%");
							  break;
						   case '1':
							  $data['nfrom']=array("like","%{$_GET['key']}%");
							  break;
						   case '2':
							 $data['ntime']=array("like","%{$_GET['key']}%");
							  break;
						  }
				}
		        $data['mid']=array("like","%{$_GET['module']}%");
				$count=$m->where($data)->count();
				$page=new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
				 //分页跳转的时候保证查询条件
				$show=$page->show();
				$arr=$m->where($data)->limit($page->firstRow.','.$page->listRows)->order('nid desc')->select();
				if($arr==null)
				{
				  echo"<script>";
				  echo" alert('sorry，找不到相关信息，可能你输入的关键字中带有'+'空格或关键字太长，你可以尝试将关键字个数变得更少!');";
				  echo" window.location='index';";
				  echo"</script>";
				}
		
		}
		$n=M('user');                 //易--添加
		$where['uid']=$_SESSION['id'];    //易--添加
		$sql=$n->where($where)->find();     //易--添加
		$this->assign(abc,$sql['uauth']);     //易--添加
		$this->assign(data,$arr);
		$this->assign("show",$show);
		 $this->assign("result",$result);
	    $this->display();
    }
    public function add()
    {
        $module=new Model("module");
        $result=$module->field('mid,mname')->select();
//         dump($result);
//         exit;
        $this->assign("result",$result);
        $this->display();
    }
	//资料上传到数据库
	 public function upload()
    {
	    $m=M("news");
	    if($_POST['edit'])//编辑资讯
		{
		   $data['nid']=$_GET['id'];
		   $data['ntitle']=$_POST['title'];
		   $data['ncontent']=$_POST['content'];
		   $data['nfrom']=$_POST['author'];
		   $data['nupdate']=date('Y-m-d H:i:s');
		   $data['mid']=$_POST['module'];

		   $pattern = "/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/"; 
           preg_match($pattern,$_POST['content'],$matches);
		   $data['nimage']=$matches[1];
		   //var_dump($matches);
		   //print_r($data);
		   $n=$m->save($data);
		}
	    else{
		$m->ntitle=$_POST['title'];
	    $m->ncontent=$_POST['content'];
	    $m->nfrom=$_POST['author'];
	    $m->nupdate=date('Y-m-d H:i:s');
		$m->ntime='0';
		$m->mid=$_POST['module'];
		$pattern = "/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/";
        preg_match($pattern,$_POST['content'],$matches);
		$m->nimage=$matches[1];
		//var_dump($matches[1]);
		//var_dump($_POST['content']);
		$n=$m->add(); // 写入用户数据到数据库
		//print_r($n);
		}
		if($n>0){
	    $this->success('操作成功！',"__APP__/News/index");
		}
		else
		{
		$this->error('操作失败，请重新操作！',"__APP__/News/index");
		}
	    //print_r($_POST);
        //$this->display();
    }
	//删除消息
	public function ndelete()
	{
	   $m=M("news");
	   $id=$_GET['id'];
	   $n=$m->where("nid=$id")->delete();
	   if($n>0)
		 {
		  $this->success("新闻删除成功!","__URL__/index");
		 }
	   else{
		  $this->error("新闻删除失败!","__URL__/index");
	   }
	}
	//编辑消息
	public function edit()
	{
	  $m=M("news");
	  $module=new Model("module");
	  $action="edit";
	  $id=$_GET['id'];
	  $arr=$m->where("nid=$id")->select();
	  $result=$module->field('mid,mname')->select();
//         dump($result);
//         exit;
      $this->assign("result",$result);
	  $this->assign(datas,$arr);
	  $this->assign(action,$action);
	  //var_dump($arr);
	  $this->display("add");
	
	
	}
}