<?php
//权限控制器
class PrivilegeController extends Controller{
	//展示登录界面
	public function loginAction(){
		include CURR_VIEW_PATH ."login.html";
	}

	//处理登录
	public function signinAction(){
		//先验证验证码，如果验证码错误，则提示出错，否则进行下面的用户验证
		//获取用户名和密码
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		//$username = mysql_real_escape_string($username);
		//$password = mysql_real_escape_string($password);
		//验证用户名和密码是否正确
		$admin = new AdminModel("admin");
		if ($admin->checkUser($username,$password)){
			//保存登录成功标志
			$_SESSION["admin"] = $username;
			$this->redirect("index.php?p=admin&c=index&a=index","",0);
		} else {
			$this->redirect("index.php?p=admin&c=privilege&a=login","用户名和密码错误",3);
		}
	}
	//处理登出
	public function logoutAction(){
		$_SESSION = array();
		session_destroy();
		$this->redirect("index.php?p=admin&c=privilege&a=login","",0);
	}
}