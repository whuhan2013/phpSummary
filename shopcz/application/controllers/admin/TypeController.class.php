<?php
class TypeController extends BaseController{

	public  function __construct(){
		parent::__construct();
		$this->typeModel = new TypeModel("goods_type");
	}
	//展示商品类型列表
	public function indexAction(){
		//$types = $this->typeModel->getTypes();
		//获取每一页显示的记录数
		$pagesize = $GLOBALS['config']['pagesize'];
		//总的记录数
		$total = $this->typeModel->total();
		//当前页
		$current = isset($_GET['page']) ? $_GET['page'] : 1;
		//计算offset
        $offset = ( $current - 1 ) * $pagesize;
		$types = $this->typeModel->pageRows($offset,$pagesize);
		//载入分页类
		$this->loader->library("Page");
		$page = new Page($total,$pagesize,$current,"index.php",array("p"=>"admin","c"=>"type","a"=>"index"));
		$pageinfo = $page->showPage();
		include CURR_VIEW_PATH . "goods_type_list.html";
	}

	//展示商品类型添加界面
	public function addAction(){
		include CURR_VIEW_PATH . "goods_type_add.html";
	}

	//商品类型入库
	public function insertAction(){
		//收集数据
		$data['type_name'] = trim($_POST["type_name"]);
		//验证或过滤
		if ($data['type_name'] === ''){
			$this->redirect("index.php?p=admin&c=type&a=add","类型名不能为空",3);
		} else{
			//过滤
			if ($this->typeModel->insert($data)){
				$this->redirect("index.php?p=admin&c=type&a=index","添加成功",2);
			} else {
				$this->redirect("index.php?p=admin&c=type&a=add","添加失败",3);
			}
		}
	}

	//展示商品类型编辑界面
	public function editAction(){

		include CURR_VIEW_PATH . "goods_type_edit.html";
	}

	//商品类型更新操作
	public function updateAction(){
		
	}
}