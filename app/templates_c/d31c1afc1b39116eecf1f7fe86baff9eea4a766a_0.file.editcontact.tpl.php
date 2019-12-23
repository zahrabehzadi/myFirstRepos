<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-23 22:28:36
  from 'C:\xampp1\htdocs\mvcproject\app\templates\editcontact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e013184560dd7_15000726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd31c1afc1b39116eecf1f7fe86baff9eea4a766a' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\mvcproject\\app\\templates\\editcontact.tpl',
      1 => 1577136091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e013184560dd7_15000726 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
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
    <style>
        .warning{
            border-color: red;
        }
    </style>
</head>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Update Contact</h2>
        </div>
        <div class="card-body">

            <form action="http://mvcproject.test/public/panell/editcontactfinal" method="post" onSubmit="return check();">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" type="text" name="name1" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
" name="number" id="number" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Update contact</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/cycle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    function check()
    {

        var mobile = $("input[name=number]").val();
        var name=$("input[name=name1]").val();


        if(name==''){error=1;$("input[name=name1]").addClass('warning');return false}
        else {
            $("input[name=name1]").removeClass('warning');
        }


        var regexp2 = /^0{1}9{1}[0-9]{9}$/i;


        if (regexp2.test(mobile) != false) {
            $("input[name=number]").removeClass('warning');
        }
        else {
            $("input[name=number]").val('لطفا موبایل خود را به درستی وارد کنید');
            $("input[name=number]").addClass('warning');
            return false;


        }




    }
<?php echo '</script'; ?>
>

</html>
<?php }
}
