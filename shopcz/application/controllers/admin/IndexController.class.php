<?php
//后台首页控制器
class IndexController extends BaseController{
	public function indexAction(){
		//载入视图文件
		include CURR_VIEW_PATH . "index.html";
	}
	public function topAction(){
		include CURR_VIEW_PATH . "top.html";
	}
	public function menuAction(){
		include CURR_VIEW_PATH . "menu.html";
	}
	public function dragAction(){
		include CURR_VIEW_PATH . "drag.html";
	}
	public function mainAction(){
		include CURR_VIEW_PATH . "main.html";
	}
}