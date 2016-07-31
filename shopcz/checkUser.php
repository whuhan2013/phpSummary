<?php
$uname = isset($_GET["username"]) ? $_GET["username"] : "";
//查询数据的操作
if ($uname == "admin"){
	$msg = "√";
} else {
	$msg = "x";
}
echo <<<RESUTL
<script type="text/javascript">
	//获取父页面,window.parent
	window.parent.document.getElementById("msg").innerHTML  = "$msg";
</script>
RESUTL;
