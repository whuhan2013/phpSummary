<?php
//递归转义数组
function addslashes_deep($value){
	if (empty($value)){
		return $value;
	} else {
		return is_array($value) ? array_map("addslashes_deep", $value) : addslashes($value);
	}
}

//递归实体转义
function specialchars_deep($value){
	if (empty($value)){
		return $value;
	} else {
		return is_array($value) ? array_map("specialchars_deep", $value) : htmlspecialchars($value);
	}
}