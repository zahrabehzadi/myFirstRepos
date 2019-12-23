<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-23 22:33:18
  from 'C:\xampp1\htdocs\mvcproject\app\templates\contactlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e01329e237bf0_58667214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94730adca86266ae3ec35e8f17d6a9f5d4dbbd49' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\mvcproject\\app\\templates\\contactlist.tpl',
      1 => 1577136796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:searchresult.tpl' => 1,
  ),
),false)) {
function content_5e01329e237bf0_58667214 (Smarty_Internal_Template $_smarty_tpl) {
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


<nav class="navbar navbar-dark bg-primary">
    <a style="color: white;font-size:2em" class="navbar-brand">Contact list</a>
    <form action="http://mvcproject.test/public/panell/search"  id="target" class="form-inline"  >
        <input class="form-control mr-sm-2" type="search" name="name2" placeholder="Search" aria-label="Search" id="search_name">
        <button style="color:white;border-color: white" class="btn btn-outline-success my-2 my-sm-0" name="submit"  type="submit">Search</button>
    </form>
</nav>


<div style="display: none" class="showResult">
    <?php $_smarty_tpl->_subTemplateRender('file:searchresult.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>


<div class="card-body">
    <div class="card mt-5">
        <div class="card-header">
            <h2>All Contacts</h2>
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
                    <a href="http://mvcproject.test/public/panell/editcontact?contid=<?php echo $_smarty_tpl->tpl_vars['i']->value['contactid'];?>

                           "class="btn btn-info">Edit</a>


                    <a class='btn btn-danger'
                       href="http://mvcproject.test/public/panell/delete?contid=<?php echo $_smarty_tpl->tpl_vars['i']->value['contactid'];?>
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


            <form action="http://mvcproject.test/public/panell/addcontact" method="post"
                  onSubmit="return check();">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="txt_name" type="text" name="name1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">phone number</label>
                    <input id="mobile" type="text" name="phonenumber" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">add contact</button>
                </div>
            </form>
        </div>
    </div>
</div>

</html>

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

            var mobile = $("input[name=phonenumber]").val();
            var name=$("input[name=name1]").val();


            if(name==''){error=1;$("input[name=name1]").addClass('warning');return false}
            else {
                $("input[name=name1]").removeClass('warning');
            }



            var regexp2 = /^0{1}9{1}[0-9]{9}$/i;


            if (regexp2.test(mobile) != false) {
                $("input[name=phonenumber]").removeClass('warning');
            }
            else {
                $("input[name=phonenumber]").val('لطفا موبایل خود را به درستی وارد کنید');
                $("input[name=phonenumber]").addClass('warning');
                return false;


            }




        }
    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
        $( "#target").submit(function( event ) {
            event.preventDefault();
            var search_name=$('#search_name').val();
            $.ajax({url:"http://mvcproject.test/public/panell/search?search_name="+search_name,cache:false,success:function(result)
            {
            $('.showResult').html(result);
                $('.showResult').show();

            }});
    });
    });


<?php echo '</script'; ?>
>

<?php }
}
