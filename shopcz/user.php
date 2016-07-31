<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="">	
		<ul>
			<li>
				<label for="">用户名：</label>
				<input type="text" name="username" id = "username"/>
				<span id="msg"></span>
			</li>
			<li>
				<label for="">密 &nbsp;码：</label>
				<input type="text" name="password" /></li>
			<li>
				<label for=""></label>
				<input type="submit" value="注册" /></li>
		</ul>
	</form>
	<iframe src="" frameborder="0" width="0" height="0" id ="ifr1"></iframe>
	<script type="text/javascript">
		var username = document.getElementById("username");
		username.onblur = function(){
			//在此处通过iframe来发请求
			var ifr1 =document.getElementById("ifr1");
			var uname = username.value;
			//设置ifr1的src属性
			ifr1.src = "checkUser.php?username="+uname;
		}
	</script>
</body>
</html>
