<?php 
Class CategoryAction extends Action{

	Public function addCate(){
		$this->display();
	}

	Public function runAddCate(){
		if (M('cate')->add($_POST)) {
			$this->success('添加成功',U(GROUP_NAME.'/Category/index'));
		}else{
			$this->error('添加失败');
		}
	}
} 
 ?>