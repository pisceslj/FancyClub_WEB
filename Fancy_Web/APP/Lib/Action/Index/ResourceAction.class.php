<?php 

Class ResourceAction extends Action{

	Public function index(){
		$this->display();
	}

    Public function returnIndex(){
    	$this->redirect(GROUP_NAME.'/Index/index');
    }
   
}
?>