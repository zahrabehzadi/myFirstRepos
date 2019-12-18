<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
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