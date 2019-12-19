<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-19 21:53:38
  from 'C:\xampp1\htdocs\mvcproject\app\templates\searchresult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfbe3522e2a58_16354288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f59427f005c2af8b6d0e5b36326afcacbec374b' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\mvcproject\\app\\templates\\searchresult.tpl',
      1 => 1576788816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfbe3522e2a58_16354288 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card-body">
    <div class="card mt-5">
    <div class="card-header">
        <h2>Search Resault</h2>
    </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>phone number</th>
            <th>Action</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datares']->value, 'it');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['it']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['contactid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['phonenumber'];?>
</td>
                <td>
                    <a href="http://mvcproject.test/public/access/editcontact?contid=<?php echo $_smarty_tpl->tpl_vars['it']->value['contactid'];?>

                           "class="btn btn-info">Edit</a>


                    <a class='btn btn-danger'
                       href="http://mvcproject.test/public/access/delete?contid=<?php echo $_smarty_tpl->tpl_vars['it']->value['contactid'];?>
"
                       onclick="return confirm('مطمئنی میخوای این مخاطبو حذف کنی?')">Delete</a>

                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table>
</div><?php }
}
