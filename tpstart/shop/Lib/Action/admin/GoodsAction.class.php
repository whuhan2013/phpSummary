<?php

//后台商品控制器

class GoodsAction extends Action{
    //商品列表
    function showlist(){

        $goods_model = D("Goods");
        //1 引入分页类
        import("@.components.Page");
        
        //2 计算当前记录总数目
        $total = $goods_model -> count();
        $per = 5;
        
        //3. 实例化分页类对象
        $page = new Page($total,$per);
        
        //4. 制作一条sql语句获得每页信息
        $sql = "select * from sw_goods ".$page->limit;
        $info = $goods_model -> query($sql);
        
        //5. 获得页面列表
        $page_list = $page->fpage(array(3,4,5,6,7,8));
        
        $this -> assign('info',$info);
        $this -> assign('page_list',$page_list);
        $this -> display();
    }
    //添加商品
       function add(){
        $goods_model = D("Goods");
        //判断是否提交表单
        if(!empty($_POST)){
            //数据添加
            //foreach($_POST as $k => $v){
            //    $goods_model -> $k = $v;
            //}
            $goods_model -> create();  //tp框架本身收集表单数据方法
            
            $rst = $goods_model -> add();
            //die('here'.$rst);
            if($rst){
                $this -> success('添加成功',__URL__."/showlist");
            }
        } else {
            $this -> display();
        }
    }
    //修改商品
  function upd($goods_id,$goods_price=506){
        //把被修改的商品信息查询出来，传递给模板显示
        $goods_model = D("Goods");
        //echo $goods_price;
        if(!empty($_POST)){
            //接收修改的表单数据
            $goods_model -> create(); //收集表单信息
            $rst = $goods_model -> save();
            if($rst){
                //$this -> success(提示信息，跳转地址);
                $this -> success('修改成功',__URL__."/showlist");
            }
        } else {
            $info = $goods_model -> getByGoods_id($goods_id);

            $this -> assign('info',$info);
            $this -> display();
        }
    }
}