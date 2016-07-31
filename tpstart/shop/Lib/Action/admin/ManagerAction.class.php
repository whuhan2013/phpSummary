<?php

//后台管理员控制器

class ManagerAction extends Action{
    //登录系统
    function login(){

         
        if(!empty($_POST)){
            //判断验证码是否正确
            //$_SESSION['verify']
            //让用户提交过来的验证码与session的做比较
            if(md5($_POST['captcha']) == $_SESSION['verify']){
                //用户名和密码校验
                //在数据model模型里边，自定义一个方法校验用户名和密码
                $manager_model = D("Manager");
                $user_info = $manager_model -> checkNamePwd($_POST['mg_name'],$_POST['mg_pwd']);
                //如果$user_info不等于false，就说明用户名和密码是正确的
                if($user_info !== false){
                    //持久化用户信息(id和名字)
                    session("mg_name",$user_info['mg_name']);
                    session("mg_id",$user_info['mg_id']);
                    $this -> redirect("Index/index");
                } else {
                    echo "用户名或密码错误！";
                }
            } else {
                echo "验证码不正确";
            }
        }
        
        $this -> assign('language',L());
        $this -> display();
    }

    //退出系统
    function logout(){
        //删除session信息
        session(null);
        $this -> redirect("Manager/login");
    }

     //生成验证码
    function verifyImg(){
        import("ORG.Util.Image");
        echo Image::buildImageVerify();
    }
}
