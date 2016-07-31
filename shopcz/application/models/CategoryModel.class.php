<?php
//类别模型
class CategoryModel extends Model{
	
	//获取所有分类信息
	public function getCats(){
		$sql = "SELECT * FROM $this->table";
		$cats = $this->db->getAll($sql);
		return $this->tree($cats);
	}

	/**
	 * 获取某个分类下面的所有子孙分类
	 * @param $arr array 要遍历的数组
	 * @param $pid int 表示哪个分类，为0则表示顶级分类
	 * @param $level int 表示层级
	 * @return $tree array 排好序的数组 
	 */
	public function tree($arr,$pid = 0, $level = 1){
		static $tree = array();
		foreach ($arr as $v) {
			if ($v['parent_id'] == $pid){
				$v['level'] = $level;
				$tree[] = $v;
				$this->tree($arr,$v['cat_id'],$level + 1);
			}
		}
		return $tree;
	}

	/**
	 * 获取当前分类下面所有的后代分类
	 * @param $cat_id int 分类id
	 * @return array 返回后代分类id组成的数组
	 */
	public function getSubs($cat_id){
		$sql = "SELECT * FROM $this->table";
		$cats = $this->db->getAll($sql);
		$list =  $this->tree($cats,$cat_id);
		$ids = array();

		foreach ($list as $v) {
			$ids[] = $v['cat_id'];	
		}
		return $ids;
	}

	//获取当前元素的所有子元素
	public function child($arr,$pid = 0){
		$child = array();
		foreach ($arr as $v) {
			if ($v['parent_id'] == $pid){
				$child[] = $v;
			}
		}
		return $child;
	}

	//将一维数组转成三维数组
	public function catList($arr,$pid = 0){
		//找到当前的所有子节点
		$child = $this->child($arr,$pid);
		if (empty($child)){
			return null;
		}
		foreach ($child as $k => $v) {
			$current_child = $this->catList($arr,$v['cat_id']);
			if ($current_child != null){
				//说明有子节点
				$child[$k]['child']  = $current_child;
			}
		}
		return $child;
	}
	

	public function frontCats(){
		$sql = "SELECT * FROM $this->table";
		$cats = $this->db->getAll($sql);
		return $this->catList($cats);
	}
}