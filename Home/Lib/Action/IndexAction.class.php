<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){

        $m=M('Module');
       $news=D('News');
       $count=$news->where("nstate='1'")->count();
       $arr=$m->field('mid,mname')->select();
       import('ORG.Util.Page');// 导入分页类
	   $page=new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
		 //分页跳转的时候保证查询条件
		$show=$page->show();
		$result=$news->relation(true)->limit($page->firstRow.','.$page->listRows)->where("nstate='1'")->select();
        foreach($result as &$val){
            if('' == $val['nimage']){
                $val['nimage'] = "__PUBLIC__/images/static/logo4.png";
            }
        }

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
            $count=$News->where("mid=$mid and nstate='1'")->count();
            import('ORG.Util.Page');// 导入分页类
            $page=new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
            //分页跳转的时候保证查询条件
            $show=$page->show();
            $arr=$m->field('mid,mname')->select();
            $types=$News->where("mid=$mid and nstate='1'")->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
            foreach($types as &$val){
                if('' == $val['nimage']){
                    $val['nimage'] = "__PUBLIC__/images/static/logo4.png";
                }
            }
            
           // dump($types);

            $this->assign("show",$show);
            $this->assign("arr",$arr);
            $this->assign("list",$types);
           $this->display('index');
         }
    }
    
    
    public function search()
    {
        $key = $_GET['key'];
        $m = M('Module');
        $news = D('News');
       
        $condition['ntitle'] = array('like',"%$key%");
        $condition['ncontent'] = array('like',"%$key%");
        $condition['_logic'] = 'or';
		$map['_complex'] = $condition;
		$map['nstate']  = '1';
        $count=$news->where($map)->count();
        import('ORG.Util.Page');// 导入分页类
        $page=new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
        //分页跳转的时候保证查询条件
        $show=$page->show();
        $arr=$m->field('mid,mname')->select();
        $list=$news->where($map)->relation(true)->limit($page->firstRow.','.$page->listRows)->order('nid desc')->select();
        foreach($list as &$val){
            if('' == $val['nimage']){
                $val['nimage'] = "__PUBLIC__/images/static/logo4.png";
            }
        }
//         dump($list);
//         exit;
        $this->assign("show",$show);
        $this->assign('list',$list);
        $this->assign("arr",$arr);
        $this->display('index');
    }
}