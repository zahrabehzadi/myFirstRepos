<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-16 14:04:10
  from 'C:\xampp1\htdocs\mvcproject\app\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df780ca248b53_23903639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c86237da34933f99a0cb5e8b5bbb72072c8331' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\mvcproject\\app\\templates\\login.tpl',
      1 => 1576501038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df780ca248b53_23903639 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title></title>
</head>
<body>
status:<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<form action="http://mvcproject.test/public/access/login" method="post" >
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
    <input type=submit name="login" value="login">
</form>
</body>
</html>
<?php }
}
