<?php
//管理员model
class AdminModel extends Model{

	public function checkUser($username,$password){
		$password = md5($password);
		$sql = "select * from {$this->table} 
		        where admin_name = '$username' and password = '$password' limit 1";
		        
		       
		$user = $this->db->getRow($sql);
		if (empty($user)){
			return false;
		} else {
			return true;
		}
	}
}