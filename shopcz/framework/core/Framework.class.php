<?php
//框架类
class Framework{
	//定义一个主方法run
	public static function run(){
		self::init();
		self::autoload();
		self::dispatch();
	}

	//1.项目初始化
	private static function init(){
		//定义路径常量
		define("ROOT_PATH", getcwd() . DIRECTORY_SEPARATOR); //根目录
		define("FRAMWORK_PATH", ROOT_PATH . "framework" . DIRECTORY_SEPARATOR ); //框架目录
		define("APP_PATH", ROOT_PATH . "application" . DIRECTORY_SEPARATOR); //应用程序目录
		define("CORE_PATH", FRAMWORK_PATH . "core" . DIRECTORY_SEPARATOR);
		define("DB_PATH", FRAMWORK_PATH . "database" . DIRECTORY_SEPARATOR);
		define("LIB_PATH", FRAMWORK_PATH . "libraries" . DIRECTORY_SEPARATOR);
		define("HELPER_PATH", FRAMWORK_PATH . "helpers" . DIRECTORY_SEPARATOR);
		define("CONTROLLER_PATH", APP_PATH . "controllers" . DIRECTORY_SEPARATOR);
		define("MODEL_PATH", APP_PATH . "models" . DIRECTORY_SEPARATOR);
		define("VIEW_PATH", APP_PATH . "views" . DIRECTORY_SEPARATOR);
		define("CONFIG_PATH", APP_PATH . "config" . DIRECTORY_SEPARATOR);
		define("UPLOAD_PATH", ROOT_PATH . "public" . DIRECTORY_SEPARATOR . "uploads" .DIRECTORY_SEPARATOR);
		//载入配置文件		
 		$GLOBALS['config'] = require CONFIG_PATH . "config.php";

 		//载入核心文件
		require CORE_PATH . "Controller.class.php";
		require CORE_PATH . "Loader.class.php";
		require CORE_PATH . "Model.class.php";
		require DB_PATH . "Mysql.class.php";

		//确定当前所访问的平台，控制器，方法，以及相应的控制器和视图目录
		define("PLATFORM", isset($_REQUEST["p"]) ? $_REQUEST["p"] : "home" );
		define("CONTROLLER", isset($_REQUEST["c"]) ? ucfirst($_REQUEST["c"]) : "Index" );
		define("ACTION", isset($_REQUEST["a"]) ? $_REQUEST["a"] : "index" );
		define("CURR_CONTROLLER_PATH", CONTROLLER_PATH . PLATFORM . DIRECTORY_SEPARATOR);
		define("CURR_VIEW_PATH", VIEW_PATH . PLATFORM . DIRECTORY_SEPARATOR);

		//开启session
		session_start();
	}

	//2.实现自动加载
 	private static function autoload(){
 		//将load方法注册为自动加载
 		spl_autoload_register(array(__CLASS__,"load"));
 	}

 	private static function load($classname){
 		//此处的自动加载只加载控制器和模型
 		if (substr($classname, -10) == "Controller"){
 			require CURR_CONTROLLER_PATH . $classname . ".class.php";
 		} elseif (substr($classname, -5) == "Model"){
 			require MODEL_PATH . $classname . ".class.php";
 		}
 	}

	//3.路由分发
	private static function dispatch(){
		//实例化控制器对象，调用方法
		$controller_name =  CONTROLLER . "Controller";
		$action_name = ACTION . "Action";
		$controller = new $controller_name();
		$controller->$action_name();
	}
}