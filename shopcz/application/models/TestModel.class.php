<?php
class TestModel extends Model{
	public function getUsers(){
		$sql = "select * from {$this->table}";
		return $this->db->getAll($sql);
	}
}