<?php /* Smarty version Smarty-3.1.6, created on 2016-07-27 09:52:36
         compiled from "../Tpl/home\Ucenter\welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:14098579813e42b65d1-87005547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b450df4a97b4c5e7dfbe87f5e53a8946e0467b1' => 
    array (
      0 => '../Tpl/home\\Ucenter\\welcome.html',
      1 => 1387679997,
      2 => 'file',
    ),
    'c4865507a796473fe02d38cbc004832b2d6455e4' => 
    array (
      0 => '../Tpl/home\\public\\layout.html',
      1 => 1387679071,
      2 => 'file',
    ),
    'd69f9658118cba07e182d80c16c789742292840b' => 
    array (
      0 => '../Tpl/home\\public\\ucenterleft.html',
      1 => 1387680709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14098579813e42b65d1-87005547',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_579813e45ac38',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579813e45ac38')) {function content_579813e45ac38($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="YONGDA商城" />
        <meta name="Description" content="YONGDA商城" />
        
        <title>YONGDA商城 - Powered by YongDa</title>
        
        <link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body class="index_body">
        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top"><img class="logo" src="<?php echo @IMG_URL;?>
logo.gif"></a>

            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                    <font id="ECS_MEMBERZONE">
                        <div id="append_parent"></div>
                        欢迎光临本店&nbsp;
                        <a href="#"> 登录</a>
                        <a href="#">注册</a>
                    </font>
                </div>
                <div style="float: right;">
                    <a href="#">查看购物车</a>
                    |
                    <a href="#">选购中心</a>
                    |
                    <a href="#">标签云</a>
                    |
                    <a href="#">报价单</a>
                </div>
            </div>
            <div id="mainNav" class="clearfix">
                <a href="#" class="cur">首页<span></span></a>
                <a href="#">GSM手机<span></span></a>
                <a href="#">电脑<span></span></a>
                <a href="#">手机配件<span></span></a>
                <a href="#">优惠活动<span></span></a>
                <a href="#">留言板<span></span></a>
            </div>
        </div>

        <div class="header_bg">
            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

            <form id="searchForm" method="get" action="#">
                <input name="keywords" id="keyword" type="text" />
                <input name="imageField" value=" " class="go" style="cursor: pointer; background: url('<?php echo @IMG_URL;?>
sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;" type="submit" />

            </form>
        </div>
        <div class="blank5"></div>
        <div class="header_bg_b">
            <div class="f_l" style="padding-left: 10px;">
                <img src="<?php echo @IMG_URL;?>
biao6.gif" />
                    北京市区，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b>
            </div>
            <div class="f_r" style="padding-right: 10px;">
                <img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao3.gif">
                    <span class="cart" id="ECS_CARTINFO">
                        <a href="#" title="查看购物车">您的购物车中有 0 件商品，总计金额 ￥0.00元。</a></span>
                    <a href="#"><img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao7.gif"></a>

            </div>
        </div>
        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
            </div>
        </div>
        <div class="blank"></div>
        
        
<div class="block clearfix">
    
    <?php /*  Call merged included template "public/ucenterleft.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("public/ucenterleft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14098579813e42b65d1-87005547');
content_579813e44508b($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "public/ucenterleft.html" */?>

    <div class="AreaR">
        <div class="box">
            <div class="box_1">
                <div class="userCenterBox boxCenterList clearfix" style="">

                    <font class="f5"><b class="f4">finisher</b> 欢迎您回到 YONGDA！</font><br />
                    <div class="blank"></div>
                    您的上一次登录时间: 2012-10-06 20:12:04<br />
                    <div class="blank5"></div>
                    您的等级是 注册用户  ,您还差 10000 积分达到 vip <br />
                    <div class="blank5"></div>
                    您还没有通过邮件认证 <a href="#" style="color: rgb(0, 107, 208);">点此发送认证邮件</a><br />
                    <div style="margin: 5px 0pt; border: 1px solid rgb(247, 221, 152); padding: 10px 20px; background-color: rgb(255, 250, 213);">
                        <img src="<?php echo @IMG_URL;?>
note.gif" alt="note" />&nbsp;用户中心公告！           </div>
                    <br /><br />
                    <div class="f_l" style="width: 350px;">
                        <h5><span>您的账户</span></h5>
                        <div class="blank"></div>
                        余额:<a href="#" style="color: rgb(0, 107, 208);">￥0.00元</a><br />
                        红包:<a href="#" style="color: rgb(0, 107, 208);">共计 0 个,价值 ￥0.00元</a><br />
                        积分:0积分<br />
                    </div>
                    <div class="f_r" style="width: 350px;">
                        <h5><span>用户提醒</span></h5>
                        <div class="blank"></div>
                        您最近30天内提交了1个订单<br />
                    </div>
                    <div class="blank5"></div>
                </div>
            </div>
        </div>
    </div>
</div>

        
        <div class="blank"></div>
        <div class="block">
            <a href="#" target="_blank" title="YONGDA商城"><img alt="YONGDA商城" src="<?php echo @IMG_URL;?>
di.jpg"></a>
            <div class="blank"></div>
        </div>
        <div class="block">
            <div class="box">
                <div class="helpTitBg" style="clear: both;">
                    <dl>
                        <dt><a href="#" title="新手上路 ">新手上路 </a></dt>
                        <dd><a href="#" title="售后流程">售后流程</a></dd>
                        <dd><a href="#" title="购物流程">购物流程</a></dd>
                        <dd><a href="#" title="订购方式">订购方式</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="手机常识 ">手机常识 </a></dt>
                        <dd><a href="#" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                        <dd><a href="#" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                        <dd><a href="#" title="如何享受全国联保">如何享受全国联保</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="配送与支付 ">配送与支付 </a></dt>
                        <dd><a href="#" title="货到付款区域">货到付款区域</a></dd>
                        <dd><a href="#" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                        <dd><a href="#" title="支付方式说明">支付方式说明</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="会员中心">会员中心</a></dt>
                        <dd><a href="#" title="资金管理">资金管理</a></dd>
                        <dd><a href="#" title="我的收藏">我的收藏</a></dd>
                        <dd><a href="#" title="我的订单">我的订单</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="服务保证 ">服务保证 </a></dt>
                        <dd><a href="#" title="退换货原则">退换货原则</a></dd>
                        <dd><a href="#" title="售后服务保证 ">售后服务保证</a></dd>
                        <dd><a href="#" title="产品质量保证 ">产品质量保证</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="联系我们 ">联系我们 </a></dt>
                        <dd><a href="#" title="网站故障报告">网站故障报告</a></dd>
                        <dd><a href="#" title="选机咨询 ">选机咨询</a></dd>
                        <dd><a href="#" title="投诉与建议 ">投诉与建议</a></dd>
                    </dl>
                </div>
            </div>


        </div>
        <div class="blank"></div>
        <div id="bottomNav" class="box block">
            <div class="box_1">
                <div class="links clearfix"> 
                    <a href="#" target="_blank" title="YONGDA商城"><img src="<?php echo @IMG_URL;?>
ecmoban_link.jpg" alt="YONGDA商城" border="0"></a>

                    <a href="#" target="_blank" title="YONGDA 网上商店管理系统">
                        <img src="<?php echo @IMG_URL;?>
yongda_logo.gif" alt="YONGDA 网上商店管理系统" border="0" />
                    </a>


                    [<a href="#" target="_blank" title="免费申请网店">免费申请网店</a>]
                    [<a href="#" target="_blank" title="免费开独立网店">免费开独立网店</a>]


                    [<a href="#" target="_blank" title="免费开独立网店">yongda商城</a>]
                </div>
            </div>
        </div>
        <div class="blank"></div>
        <div id="bottomNav" class="box block">
            <div class="bNavList clearfix">
                <a href="#">免责条款</a>
                |
                <a href="#">隐私保护</a>
                |
                <a href="#">咨询热点</a>
                |
                <a href="#">联系我们</a>
                |
                <a href="#">Powered&nbsp;by&nbsp;<strong><span style="color: rgb(51, 102, 255);">YongDa</span></strong></a>
                |
                <a href="#">批发方案</a>
                |
                <a href="#">配送方式</a>

            </div>
        </div>

        <div id="footer">
            <div class="text">
                © 2005-2012 YONGDA 版权所有，并保留所有权利。<br />
            </div>
        </div>
    </body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.6, created on 2016-07-27 09:52:36
         compiled from "../Tpl/home\public\ucenterleft.html" */ ?>
<?php if ($_valid && !is_callable('content_579813e44508b')) {function content_579813e44508b($_smarty_tpl) {?><div class="AreaL">
    <div class="box">
        <div class="box_1">
            <div class="userCenterBox">
                <div class="userMenu">
                    <a href="#" <?php if (@ACTION_NAME=='welcome'){?>class="curs"<?php }?>><img src="<?php echo @IMG_URL;?>
u1.gif" /> 欢迎页</a>
                    <a href="#"><img src="<?php echo @IMG_URL;?>
u2.gif" /> 用户信息</a>
                    <a href="#" <?php if (@ACTION_NAME=='dingdan'){?>class="curs"<?php }?>><img src="<?php echo @IMG_URL;?>
u3.gif" /> 我的订单</a>
                    <a href="#" <?php if (@ACTION_NAME=='address'){?>class="curs"<?php }?>><img src="<?php echo @IMG_URL;?>
u4.gif" /> 收货地址</a>
                    
                    <a href="#"><img src="<?php echo @IMG_URL;?>
u5.gif" /> 我的收藏</a>
                    <a href="#"><img src="<?php echo @IMG_URL;?>
u6.gif" /> 我的留言</a>
                    <a href="#"><img src="<?php echo @IMG_URL;?>
u7.gif" /> 我的标签</a>
                    <a href="#"><img src="<?php echo @IMG_URL;?>
u8.gif" /> 缺货登记</a>
                    <a href="#"><img src="<?php echo @IMG_URL;?>
u9.gif" /> 我的红包</a>
                    <a href="#"><img src="<?php echo @IMG_URL;?>
u10.gif" /> 我的推荐</a>
                    <a href="#"><img src="<?php echo @IMG_URL;?>
u11.gif"> 我的评论</a>
                    <!--<a href="user.php?act=group_buy">我的团购</a>-->
                    <a href="#"><img src="<?php echo @IMG_URL;?>
u12.gif" /> 跟踪包裹</a>
                    <a href="#"><img src="<?php echo @IMG_URL;?>
u13.gif" /> 资金管理</a>
                    <a href="#" style="background: none repeat scroll 0% 0% transparent; text-align: right; margin-right: 10px;"><img src="<?php echo @IMG_URL;?>
bnt_sign.gif" /></a>
                </div>      </div>
        </div>
    </div>
</div><?php }} ?>