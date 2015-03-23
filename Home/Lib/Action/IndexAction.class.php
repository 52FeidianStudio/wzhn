<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
       $m=M('Module');
       $arr=$m->field('mname')->select();
//        dump($arr);
//        exit;
      $this->assign("arr",$arr);
       
	  $this->display();
    }
}