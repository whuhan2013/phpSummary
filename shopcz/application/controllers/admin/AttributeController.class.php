<?php
class AttributeController extends BaseController{

	//构造方法
	public function __construct(){
		parent::__construct();
		$this->attrModel = new AttributeModel("attribute");
		$this->typeModel = new TypeModel("goods_type");
	}
	//展示商品属性
	public function indexAction(){	
		//获取每一页显示的记录数
		$pagesize = $GLOBALS['config']['pagesize'];
		//总的记录数
		$total = $this->attrModel->total();
		//当前页
		$current = isset($_GET['page']) ? $_GET['page'] : 1;
		//计算offset
        $offset = ( $current - 1 ) * $pagesize;
		$attrs = $this->attrModel->pageRows($offset,$pagesize);
		//载入分页类
		$this->loader->library("Page");
		$page = new Page($total,$pagesize,$current,"index.php",array("p"=>"admin","c"=>"attribute","a"=>"index"));
		$pageinfo = $page->showPage();	
		include  CURR_VIEW_PATH . "attribute_list.html";
	}

	public function addAction(){
		$types = $this->typeModel->getTypes();
		include CURR_VIEW_PATH . "attribute_add.html";
	}

	//属性入库
	public function insertAction(){
		//收集表单数据
		$data['attr_name'] = trim($_POST['attr_name']);
		$data['type_id'] = trim($_POST['type_id']);
		$data['attr_type'] = trim($_POST['attr_type']);
		$data['attr_input_type'] = trim($_POST['attr_input_type']);
		$data['attr_value'] = trim($_POST['attr_value']);
		//验证和过滤
		if ($this->attrModel->insert($data)){
			$this->redirect("index.php?p=admin&c=attribute&a=index&type_id=". $data['type_id'],"添加属性成功",2);
		} else {
			$this->redirect("index.php?p=admin&c=attribute&a=add","添加属性失败",2);
		}
	}

	//根据type_id来获取该类型下所有的属性
	public function getAttrsAction(){
		//获取type_id,此处需要做相应处理，暂略
		$type_id = $_GET["type_id"];
		$attrs = $this->attrModel->getAttrList($type_id);
		echo <<<RESUTL
<script type="text/javascript">
	window.parent.document.getElementById("tbody-goodsAttr").innerHTML = "$attrs";
</script>
RESUTL;
	}

}