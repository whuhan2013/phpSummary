<?php /* Smarty version Smarty-3.1.6, created on 2016-07-27 11:08:45
         compiled from "../Tpl/admin\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1853457981b15c25aa8-50239084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd459575a180397dd29d179a99602296abf1c2b11' => 
    array (
      0 => '../Tpl/admin\\Manager\\login.html',
      1 => 1469588920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1853457981b15c25aa8-50239084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57981b15d8540',
  'variables' => 
  array (
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57981b15d8540')) {function content_57981b15d8540($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />

        <title>用户登录</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
    </head><body id="userlogin_body">
        <div></div>
        <div id="user_login">
            <dl>
                <dd id="user_top">
                    <ul>
                        <li class="user_top_l"></li>
                        <li class="user_top_c"></li>
                        <li class="user_top_r"></li></ul>
                </dd><dd id="user_main">
                    <form action="<?php echo @__SELF__;?>
" method="post">
                        <ul>
                            <li class="user_main_l"></li>
                            <li class="user_main_c">
                                <div class="user_main_box">
                                    <ul>
                                        <li class="user_main_text"><?php echo $_smarty_tpl->tpl_vars['language']->value['USERNAME'];?>
 </li>
                                        <li class="user_main_input">
                                            <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="mg_name"> </li></ul>
                                    <ul>
                                        <li class="user_main_text"><?php echo $_smarty_tpl->tpl_vars['language']->value['PASSWORD'];?>
</li>
                                        <li class="user_main_input">
                                            <input class="TxtPasswordCssClass" id="admin_psd" name="mg_pwd" type="password">
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="user_main_text"><?php echo $_smarty_tpl->tpl_vars['language']->value['VERIFYCODE'];?>
</li>
                                        <li class="user_main_input">
                                            <input class="TxtValidateCodeCssClass" id="captcha" name="captcha" type="text">
                                            <img src="<?php echo @__URL__;?>
/verifyImg"  alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="user_main_r">

                                <input style="border: medium none; background: url('<?php echo @ADMIN_IMG_URL;?>
user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="submit">
                            </li>
                        </ul>
                    </form>
                </dd><dd id="user_bottom">
                    <ul>
                        <li class="user_bottom_l"></li>
                        <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
                        <li class="user_bottom_r"></li></ul></dd></dl></div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
        <div id="ValidationSummary1" style="display: none; color: red;"></div>
    </body>
</html><?php }} ?>