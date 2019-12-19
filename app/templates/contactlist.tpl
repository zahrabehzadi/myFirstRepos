<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>

</head>


<nav class="navbar navbar-dark bg-primary">
    <a style="color: white;font-size:2em" class="navbar-brand">Contact list</a>
    <form action="http://mvcproject.test/public/access/search" id="target" class="form-inline">
        <input class="form-control mr-sm-2" type="search" name="name" placeholder="Search" aria-label="Search" id="search_name">
        <button style="color:white;border-color: white" class="btn btn-outline-success my-2 my-sm-0" name="submit"  type="submit">Search</button>
    </form>
</nav>


<div style="display: none" class="showResult">
    {include file='searchresult.tpl'}
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
        {foreach from=$data item="i"}
            <tr>
                <td>{$i.contactid}</td>
                <td>{$i.name}</td>
                <td>{$i.phonenumber}</td>
                <td>
                    <a href="http://mvcproject.test/public/access/editcontact?contid={$i.contactid}
                           "class="btn btn-info">Edit</a>


                    <a class='btn btn-danger'
                       href="http://mvcproject.test/public/access/delete?contid={$i.contactid}"
                       onclick="return confirm('مطمئنی میخوای این مخاطبو حذف کنی?')">Delete</a>

                </td>
            </tr>
        {/foreach}

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

</html>
{literal}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $( "#target").submit(function( event ) {
            event.preventDefault();
            var search_name=$('#search_name').val();
            $.ajax({url:"http://mvcproject.test/public/access/search?search_name="+search_name,cache:false,success:function(result)
            {
            $('.showResult').html(result);
                $('.showResult').show();

            }});
    });
    });

</script>
{/literal}
