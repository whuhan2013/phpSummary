<?php
class BrandController extends BaseController{
	protected $brandModel;
	public function __construct(){
		parent::__construct();
		//实例化一个模型
		$this->brandModel = new BrandModel("brand");
	}
	//显示商品品牌列表
	public function indexAction(){
		//$brands = $this->brandModel->getBrands();
		//分页获取记录
		//获取每一页显示的记录数
		$pagesize = $GLOBALS['config']['pagesize'];
		//总的记录数
		$total = $this->brandModel->total();
		//当前页
		$current = isset($_GET['page']) ? $_GET['page'] : 1;
		//计算offset
        $offset = ( $current - 1 ) * $pagesize;
        $brands = $this->brandModel->pageRows($offset,$pagesize);
        //获取分页信息
        $this->loader->library("Page");
        $page = new Page($total,$pagesize,$current,"index.php",array("p"=>"admin","c"=>"brand","a"=>"index"));
        $pageinfo = $page->showPage();
		//载入视图
		include CURR_VIEW_PATH . "brand_list.html";
	}

	//展示添加商品界面
	public function addAction(){
		//只需要载入添加的界面即可
		include CURR_VIEW_PATH ."brand_add.html";
	}
	//商品品牌入库
	public function insertAction(){
		//对数据进行相应的验证和过滤
		$data['brand_name'] = trim($_POST['brand_name']);
		$data['url'] = trim($_POST['url']);
		$data['brand_desc'] = trim($_POST['brand_desc']);
		$data['sort_order'] = trim($_POST['sort_order']);
		$data['is_show'] = trim($_POST['is_show']);

		//载入helper_input
		$this->loader->helper("input");
		$data = addslashes_deep($data);
		$data = specialchars_deep($data);

		if ($data['brand_name'] === ""){
			$this->redirect("index.php?p=admin&c=brand&a=add","品牌名称不能为空",2);
		}
		//处理图片上传,使用上传类
		if (is_uploaded_file($_FILES['logo']['tmp_name'])){			
			$this->loader->library('Upload');  //加载upload类
			$upload = new Upload();
			if ($file_name = $upload->up($_FILES['logo'])){
				//上传成功
				$data['logo'] = $file_name; //保存图片的路径
				//品牌信息入库
				if ($this->brandModel->insert($data)){					
					$this->redirect("index.php?p=admin&c=brand&a=index","添加品牌成功",3); //插入成功
				} else {					
					$this->redirect("index.php?p=admin&c=brand&a=add","添加品牌失败",3); //插入失败
				}
			} else {				
				$this->redirect("index.php?p=admin&c=brand&a=add",$upload->error(),3); //上传失败
			}
		} else {
			$this->redirect("index.php?p=admin&c=brand&a=add","没有上传图片",2);
		}
	}

	//展示编辑界面
	public function editAction(){
		//获取数据
		$brand_id = $_GET['brand_id'] + 0;  //将brand_id转成整型
		$brand = $this->brandModel->selectByPk($brand_id);
		//var_dump($brand); 测试使用
		include CURR_VIEW_PATH . "brand_edit.html";
	}

	//更新操作
	public function updateAction(){
		//获取数据
		$data['brand_name'] = trim($_POST['brand_name']);
		$data['url'] = trim($_POST['url']);
		$data['brand_desc'] = trim($_POST['brand_desc']);
		$data['sort_order'] = trim($_POST['sort_order']);
		$data['is_show'] = trim($_POST['is_show']);
		$data['brand_id'] = trim($_POST['brand_id']);		
		//对数据进行相应的数据
		//图片重新上传处理
		//更新操作
		if ($this->brandModel->update($data)){
			//成功
			$this->redirect("index.php?p=admin&c=brand&a=index","更新成功",2);
		} else {
			//失败
			$this->redirect("index.php?p=admin&c=brand&a=edit&brand_id=".$data['brand_id'],"更新失败",3);
		}
	}

	//删除动作
	public function deleteAction(){
		$brand_id = $_GET['brand_id'] + 0;  //将brand_id转成整型
		if ($this->brandModel->delete($brand_id)){
			$this->redirect("index.php?p=admin&c=brand&a=index","删除成功",2);
		} else {
			$this->redirect("index.php?p=admin&c=brand&a=index","删除失败",2);
		}
	}
}