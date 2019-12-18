<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 22:24:13
  from 'C:\xampp1\htdocs\mvcproject\app\templates\contactlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfa98fd3d61d4_27183577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94730adca86266ae3ec35e8f17d6a9f5d4dbbd49' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\mvcproject\\app\\templates\\contactlist.tpl',
      1 => 1576704251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfa98fd3d61d4_27183577 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title></title>

</head>

<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>phone number</th>
            <th>Action</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['contactid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['phonenumber'];?>
</td>
                <td>
                    <a href="http://mvcproject.test/public/access/editcontact?contid=<?php echo $_smarty_tpl->tpl_vars['i']->value['contactid'];?>

                           "class="btn btn-info">Edit</a>


                    <a class='btn btn-danger'
                       href="http://mvcproject.test/public/access/delete?contid=<?php echo $_smarty_tpl->tpl_vars['i']->value['contactid'];?>
"
                       onclick="return confirm('مطمئنی میخوای این مخاطبو حذف کنی?')">Delete</a>

                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table>
</div>
</div>
</div>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Add a  new contact</h2>
        </div>
        <div class="card-body">

            <div class="alert alert-success">
            </div>
            <form action="http://mvcproject.test/public/access/addcontact" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">phone number</label>
                    <input type="text" name="phonenumber" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">add contact</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html><?php }
}
