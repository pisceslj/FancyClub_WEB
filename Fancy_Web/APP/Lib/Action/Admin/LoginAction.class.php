<?php 
/**
 * 后台登陆控制器
 */
Class LoginAction extends Action{
    //登陆页面视图
	Public function index(){
		$name = $_SESSION['username'];
		$this->assign('name',$name);
		$this->display();
	}

	Public function verify(){
        import('ORG.Util.Image');//引入验证码类
        Image::buildImageVerify();
	}

	public function join(){
		$this->display();
	}
}

?>