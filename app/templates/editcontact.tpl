<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                    <input value="{$n}" type="text" name="name1" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" value="{$p}" name="number" id="number" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Update contact</button>
                </div>
            </form>
        </div>
    </div>
</div>
{literal}
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/cycle.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">

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
</script>
{/literal}
</html>
