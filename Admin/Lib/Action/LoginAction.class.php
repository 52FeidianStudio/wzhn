<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function index(){
     
	    $this->display();
    }
    
    Public function verify(){
        import("ORG.Util.Image");
        Image::buildImageVerify(5,5,png,80,35,'verify');
    }
}