<?php
//loader类，用于加类库和辅助函数
class Loader{
	//加载类库中的类
	public function library($lib){
		require LIB_PATH . $lib . ".class.php";
	}

	//加载辅助函数
	public function helper($helper){
		require HELPER_PATH . $helper . "_helper.php";
	}
}