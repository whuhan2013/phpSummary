<?php
//首页控制器
class IndexController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->catModel = new CategoryModel("category");
		$this->goodsModel = new GoodsModel("goods");
	}
	public function indexAction(){
		$cats = $this->catModel->frontCats();
		$bestGoods = $this->goodsModel->getBestGoods();
		//echo "<pre>";
		//print_r($cats);
		//echo "</pre>";
		include CURR_VIEW_PATH. "index.html";
	}
}