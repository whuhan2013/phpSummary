<?php
//后台总控制器
class BaseController extends Controller{
	//构造函数
	public function __construct(){
		parent::__construct();
		$this->checkLogin();
	}

	//验证用户是否登录
	public function checkLogin(){
		if (! isset($_SESSION['admin'])){
			header("Location:index.php?p=admin&c=privilege&a=login");
		}
	}
}