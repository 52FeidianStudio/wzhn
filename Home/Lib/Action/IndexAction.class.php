<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){

        $m=M('Module');
       $news=D('News');
      $count=$news->count();
       import('ORG.Util.Page');// 导入分页类
       $arr=$m->field('mid,mname')->select();
	   $page=new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
		 //分页跳转的时候保证查询条件
		$show=$page->show();
		$result=$news->relation(true)->limit($page->firstRow.','.$page->listRows)->order('nid desc')->select();
      $this->assign("arr",$arr);
      $this->assign("list",$result);
      $this->assign("show",$show);
	  $this->display();
    }
    
    public function content()
    {
        if(isset($_GET['e']) && is_numeric($_GET['e']))
        {
            $nid=$_GET['e'];
            $News=D('News');
            $News->where("nid=$nid")->setInc('ntime');
            $one=$News->where("nid=$nid")->relation(true)->select();
            $this->assign("New",$one);
            $this->display('detail');
        }
    }
    
    public function getType()
    {
        if(isset($_GET['t']) && is_numeric($_GET['t']))
        {
            $m=M('Module');
            $mid=$_GET['t'];
            $News=D('News');
            $arr=$m->field('mid,mname')->select();
            $types=$News->where("mid=$mid")->select();
           // dump($types);
            
            $this->assign("arr",$arr);
            $this->assign("list",$types);
           $this->display('index');
         }
    }
    
    
    public function search()
    {
        $key = $_POST['key'];
        $m=M('Module');
        $news = D('News');
        $condition['ntitle'] = array('like',"%$key%");
        $condition['ncontent'] = array('like',"%$key%");
        $condition['_logic'] = 'or';
        $arr=$m->field('mid,mname')->select();
        $list=$news->where($condition)->relation(true)->select();
//         dump($list);
//         exit;
        $this->assign('list',$list);
        $this->assign("arr",$arr);
        $this->display('index');
    }
}