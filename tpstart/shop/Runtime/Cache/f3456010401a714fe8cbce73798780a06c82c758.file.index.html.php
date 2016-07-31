<?php /* Smarty version Smarty-3.1.6, created on 2016-07-26 15:55:38
         compiled from "../Tpl/admin\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:71665796d39f318553-71861759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3456010401a714fe8cbce73798780a06c82c758' => 
    array (
      0 => '../Tpl/admin\\Index\\index.html',
      1 => 1469502903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71665796d39f318553-71861759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5796d39f38d87',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5796d39f38d87')) {function content_5796d39f38d87($_smarty_tpl) {?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
    </head>
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
        <!--通过"单独"请求头部、左边、右边-->
        <frame name=head src="<?php echo @__URL__;?>
/head" frameborder=0 noresize scrolling=no>
            <frameset cols="170, *">
                <frame name=left src="<?php echo @__URL__;?>
/left" frameborder=0 noresize />
                <frame name=right src="<?php echo @__URL__;?>
/right" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html><?php }} ?>