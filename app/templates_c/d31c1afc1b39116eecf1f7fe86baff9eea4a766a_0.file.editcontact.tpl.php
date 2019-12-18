<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 21:02:49
  from 'C:\xampp1\htdocs\mvcproject\app\templates\editcontact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfa85e95efa35_58586716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd31c1afc1b39116eecf1f7fe86baff9eea4a766a' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\mvcproject\\app\\templates\\editcontact.tpl',
      1 => 1576699241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfa85e95efa35_58586716 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
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
            <h2>Update person</h2>
        </div>
        <div class="card-body">
            <?php echo '<?php ';?>
if(!empty($message)): <?php echo '?>';?>

            <div class="alert alert-success">
                <?php echo '<?=';?>
 $message; <?php echo '?>';?>

            </div>
            <?php echo '<?php ';?>
endif; <?php echo '?>';?>

            <form action="http://mvcproject.test/public/access/editcontactfinal" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
" name="number" id="number" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Update person</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html><?php }
}
