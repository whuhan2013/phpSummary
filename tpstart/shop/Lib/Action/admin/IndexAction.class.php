<?php

//后台主架构控制器

class IndexAction extends Action{
    //默认调用index方法
    function index(){
        $this -> display();
    }
    
    //"品"字头部
    function head(){
        //查看系统有哪些常量可以使用
        
        //获得全部常量信息，true，常量根据类型进行分类显示
        //var_dump(get_defined_constants(true));
        $this -> display();
    }
    
    //"品"字左边
    function left(){
        //给左边传递数据，可以直接使用
        $this -> display();
    }
    
    function right(){
        $this -> display();
    }
}