<?php
class TypeModel extends Model{
	
	//获取商品类型
	public function getTypes(){
		$sql = "select * from {$this->table}";
		return $this->db->getAll($sql);
	}

	//重新定义pageRows方法，覆盖父类的方法
	public function pageRows($offset,$limit,$where =''){
		if (empty($where)){
			$sql = "select *,count(*) as total from cz_goods_type as a 
					left join cz_attribute as b
					on a.type_id = b.type_id
					group by a.type_id
					limit $offset, $limit";
		} else {
			$sql = "select *,count(*) as total from cz_goods_type as a 
					left join cz_attribute as b
					on a.type_id = b.type_id
					group by a.type_id 
					where $where limit $offset, $limit";
		}
		return $this->db->getAll($sql);
	}
}