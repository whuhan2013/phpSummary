<?php
//基础控制器
class Controller{
	//有一个Loader对象，专用于加载类库和辅助函数
	protected $loader;
	public function __construct(){
		$this->loader = new Loader();
	}
	//实现提示信息并跳转
	public function redirect($url,$message,$wait = 3){
		if ($wait == 0){
			header("Location:$url");
		} else{
			require CURR_VIEW_PATH . "message.html";
		}
		exit;
	}
}