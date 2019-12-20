<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-20 17:18:00
  from 'C:\xampp1\htdocs\mvcproject\app\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfcf4382707c6_63262139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c86237da34933f99a0cb5e8b5bbb72072c8331' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\mvcproject\\app\\templates\\login.tpl',
      1 => 1576858676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfcf4382707c6_63262139 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>login </h2>
        </div>
        <div class="card-body">

            <div class="alert alert-success">
               <h4>status:</h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>

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
