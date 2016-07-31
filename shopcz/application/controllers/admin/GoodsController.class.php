<?php
//商品控制器
class GoodsController extends BaseController{

	public function __construct(){
		parent::__construct();
		$this->catModel = new CategoryModel("category");
		$this->brandModel = new BrandModel("brand");
		$this->typeModel = new TypeModel("goods_type");
		$this->goodsModel = new GoodsModel("goods");
		$this->goodsAttrModel = new GoodsAttrModel("goods_attr");
	}
	//显示商品列表
	public function indexAction(){

	}
	//显示添加商品表单页面
	public function addAction(){
		$cats = $this->catModel->getCats();
		$brands = $this->brandModel->getBrands();
		$types = $this->typeModel->getTypes();
		include CURR_VIEW_PATH . 'goods_add.html';
	}
	
	//商品入库
	public function insertAction(){
		//收集表单数据
		$data["goods_name"] = trim($_POST['goods_name']);
		$data["goods_sn"] = trim($_POST['goods_sn']);
		$data["cat_id"] = trim($_POST['cat_id']);
		$data["brand_id"] = trim($_POST['brand_id']);
		$data["market_price"] = trim($_POST['market_price']);
		$data["shop_price"] = trim($_POST['shop_price']);
		$data["promote_price"] = trim($_POST['promote_price']);
		$data["promote_start_time"] = strtotime(trim($_POST['promote_start_time']));
		$data["promote_end_time"] = strtotime(trim($_POST['promote_end_time']));
		$data["goods_desc"] = trim($_POST['goods_desc']);
		$data["goods_number"] = trim($_POST['goods_number']);
		$data["goods_brief"] = trim($_POST['goods_brief']);
		$data["is_best"] = isset($_POST['is_best']) ? trim($_POST['is_best']) : 0;
		$data["is_new"] = isset($_POST['is_new']) ? trim($_POST['is_new']) : 0;
		$data["is_hot"] = isset($_POST['is_hot']) ? trim($_POST['is_hot']) : 0;
		
		//数据验证和过滤
		$this->loader->helper("input");
		$data = addslashes_deep($data);
		$data = specialchars_deep($data);
		//入库
		if ($goods_id = $this->goodsModel->insert($data)){
			//添加成功,获取插入记录的id，然后将属性值插入到goods_attr表中
			//注意下面这个三个获取的是数组
			$data1["attr_id_list"] = $_POST["attr_id_list"];
			$data1["attr_value_list"] = $_POST["attr_value_list"];
			$data1["attr_price_list"] = $_POST["attr_price_list"];
			//循环插入
			foreach ($data1['attr_value_list'] as $k => $v) {
				if ($v){
					$attr_data["goods_id"] = $goods_id;
					$attr_data["attr_id"] = $data1["attr_id_list"][$k];
					$attr_data["attr_value"] = $v;
					$attr_data["attr_price"] = $data1["attr_price_list"][$k];
					$this->goodsAttrModel->insert($attr_data);
				}
			}
			$this->redirect("index.php?p=admin&c=goods&a=index","添加商品成功",2);
		} else {
			//添加失败
			$this->redirect("index.php?p=admin&c=goods&a=add","添加商品失败",3);
		}
	}

	//显示商品编辑表单页面
	public function editAction(){

	}

	//商品更新操作
	public function updateActon(){

	}
}