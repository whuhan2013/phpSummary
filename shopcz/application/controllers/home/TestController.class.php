<?php
class TestController extends Controller{
	public function indexAction(){
		//调用模型完成数据操作部分
		$test = new TestModel("user");
		$users = $test->getUsers();
		echo "<pre>";
		print_r($users);
		echo "</pre>";
		//需要使用分页类
		$this->loader->library("Page");
		//需要使用辅助函数
		$this->loader->helper("string");
	}
}