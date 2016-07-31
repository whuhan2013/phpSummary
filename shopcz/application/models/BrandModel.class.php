<?php
//商品品牌模型
class BrandModel extends Model{
	public function getBrands(){
		$sql = "select * from {$this->table}";
		return $this->db->getAll($sql);
	}

	//分页获取记录
	/*
	public function getBrandsPage($offset,$limit){
		$sql = "select * from {$this->table} limit $offset,$limit";
		return $this->db->getAll($sql);
	}
	*/

	/*
	public function getBrandsPage($offset,$limit,$where = ""){
		if (empty($where)){
			$sql = "select * from {$this->table} limit $offset,$limit";
		} else {
			$sql = "select * from {$this->table} where $where limit $offset,$limit";
		}
		
		return $this->db->getAll($sql);
	}
	*/
	
}