<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 22:29:43
  from 'C:\xampp1\htdocs\mvcproject\app\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfa9a471dada6_10990813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c86237da34933f99a0cb5e8b5bbb72072c8331' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\mvcproject\\app\\templates\\login.tpl',
      1 => 1576704580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfa9a471dada6_10990813 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>login </h2>
        </div>
        <div class="card-body">

            <div class="alert alert-success">
                status:<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
            <form action="http://mvcproject.test/public/access/login" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html><?php }
}
