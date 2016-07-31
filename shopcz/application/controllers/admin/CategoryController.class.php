<?php
//商品类别控制器
class CategoryController extends BaseController{
	
	public function __construct(){
		parent::__construct();
		$this->cat = new CategoryModel('category');
	}

	//用于显示商品分类列表
	public function indexAction(){

		$cats = $this->cat->getCats();
		include CURR_VIEW_PATH . 'cat_list.html';
	}

	//用于展示商品分类添加页面
	public function addAction(){
		$cats = $this->cat->getCats();
		include CURR_VIEW_PATH . 'cat_add.html';
	}

	//添加商品分类信息
	public function insertAction(){
		// 收集数据，然后插入数据库, 
		// 注意，此处还需要对数据进行相应的处理，暂略

		$data['cat_name'] = $_POST['cat_name'];
		$data['parent_id'] = $_POST['parent_id'];
		$data['sort_order'] = $_POST['sort_order'];
		$data['cat_desc'] = $_POST['cat_desc'];
		$data['is_show'] = $_POST['is_show'];
		$data['unit'] = $_POST['unit'];
		
		if ($this->cat->insert($data)){
			//成功
			$this->redirect('index.php?p=admin&c=Category&a=index','添加商品分类信息成功',3);
		} else {
			//失败
			$this->redirect('index.php?p=admin&c=Category&a=add','添加商品分类信息失败',3);
		}

	}

	//显示编辑商品类别页面
	public function editAction(){
		$cat_id = $_GET['cat_id'] + 0;
		$cat = $this->cat->selectByPk($cat_id);
		$cats = $this->cat->getCats();
		include CURR_VIEW_PATH . 'cat_edit.html';
	}

	//更新操作
	public function updateAction(){
		$data['cat_name'] = $_POST['cat_name'];
		$data['parent_id'] = $_POST['parent_id'];
		$data['sort_order'] = $_POST['sort_order'];
		$data['cat_desc'] = $_POST['cat_desc'];
		$data['is_show'] = $_POST['is_show'];
		$data['unit'] = $_POST['unit'];
		$data['cat_id'] = $_POST['cat_id'];

		$ids = $this->cat->getSubs($data['cat_id']);
		if ($data['parent_id'] == $data['cat_id'] || in_array($data['parent_id'], $ids)){
			$this->redirect('index.php?p=admin&c=Category&a=edit&cat_id=' . $data['cat_id'] ,'不能将分类移到该分类或其后代分类下面',3);
		} else {
			if ($this->cat->update($data)){
				$this->redirect("index.php?p=admin&c=Category&a=index",'更新商品分类信息成功',3);
			} else {
				$this->redirect('index.php?p=admin&c=Category&a=edit&cat_id=' . $data['cat_id'] ,'更新商品分类信息失败',3);
			}
		}	
	}

	//删除操作
	public function deleteAction(){
		$cat_id = $_GET['cat_id'] + 0;
		$ids = $this->cat->getSubs($cat_id);
		if (! empty($ids)){
			$this->redirect('index.php?p=admin&c=Category&a=index' ,'该分类下还有子分类，不能删除',3);
		} else {
			if ($this->cat->delete($cat_id)){
				$this->redirect("index.php?p=admin&c=Category&a=index",'删除商品分类信息成功',3);
			} else {
				$this->redirect("index.php?p=admin&c=Category&a=index",'删除商品分类信息失败',3);
			}
		}
	}

	public function testAction(){
		$cats = $this->cat->frontCats();
		var_dump($cats);
	}

}