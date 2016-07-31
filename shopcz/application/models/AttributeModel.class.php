<?php
class AttributeModel extends Model{
	//重新定义pageRows方法，覆盖父类的方法
	public function pageRows($offset,$limit,$where =''){
		if (empty($where)){
			$sql = "select * from cz_attribute left join 
					cz_goods_type using(type_id) 
					limit $offset, $limit";
		} else {
			$sql = "select * from cz_attribute left join 
					cz_goods_type using(type_id)  
					where $where limit $offset, $limit";
		}
		return $this->db->getAll($sql);
	}

	//获取属性构成的HTML字符串
	public function getAttrList($type_id){
		//判断type_id,这一步省略
		$sql = "select * from {$this->table} where type_id = $type_id ";
		$res = $this->db->getAll($sql);
		$attrs = "<table width='100%' id='attrTable'>";
		foreach ($res as $v) {
			$attrs .= "<tr>";
			$attrs .= "<td class='label'> " . $v['attr_name'] . " </td>";
			$attrs .= "<td>";
			$attrs .= "<input type='hidden' name='attr_id_list[]' value='".$v['attr_id']."'>";
			switch ($v["attr_input_type"]) {
				case 0: //文本框
					$attrs .= "<input name='attr_value_list[]' type='text' size='40'>";
					break; 
				case 1: //下拉列表
					$attrs .= "<select name='attr_value_list[]'>";
					$attrs .= "<option value=''>请选择...</option>";
					$opts = explode(PHP_EOL, $v['attr_value']);
					foreach ($opts as $v1) {
						$attrs .= "<option value='$v1'>$v1</option>";						
					}						
					$attrs .= "</select>";
					break;
				case 2: //文本域
					$attrs .= "<textarea name='attr_value_list[]' cols='30' rows='10'></textarea>";
					break;
				default:
					break;
			}
			$attrs .= "<input type='hidden' name='attr_price_list[]' value='0'>";
			$attrs .= "</td>";
			$attrs .= "</tr>";
		}
		$attrs .= "</table>";
		//构造属性组成的一个表单
		return $attrs;
	}
}


//using
//select * from cz_attribute left join cz_goods_type using(type_id);
//on
//select * from cz_attribute as a left join cz_goods_type as b 
//on a.type_id = b.type_id ;