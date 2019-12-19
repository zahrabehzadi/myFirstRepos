
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
        {foreach from=$datares item="it"}
            <tr>
                <td>{$it.contactid}</td>
                <td>{$it.name}</td>
                <td>{$it.phonenumber}</td>
                <td>
                    <a href="http://mvcproject.test/public/access/editcontact?contid={$it.contactid}
                           "class="btn btn-info">Edit</a>


                    <a class='btn btn-danger'
                       href="http://mvcproject.test/public/access/delete?contid={$it.contactid}"
                       onclick="return confirm('مطمئنی میخوای این مخاطبو حذف کنی?')">Delete</a>

                </td>
            </tr>
        {/foreach}

    </table>
</div>