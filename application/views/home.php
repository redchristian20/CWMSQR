<?php
    
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--<link rel='stylesheet' type='text/css' media='screen' href='<?php //echo base_url();?>assets/css/main.css'>-->

</head>

<style>
    body{
        width:960px;
        margin:10px auto 10px auto;
    }
    td{
        border:1px solid black;
        padding:10px;
    }
    form *{
        display:block;
        margin:0 0 10px 0;
    }

    td *{
        display:inline;
    }

</style>

<body>
    <!--<img src="<?php if(isset($qr)){echo $qr;} ?>" class="img-fluid" alt="">-->

    <div class='users-section'>
        <table>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Actions</td>
            </tr>
<?php
        foreach($users as $key => $val)
        {?>
            <tr>
                <td><?=$val['lastname']?>, <?=$val['firstname']?> <?=$val['middlename']?></td>
                <td><?=$val['email']?></td>
                <td>
                    <a href='/show/<?=$val['id']?>'>Show</a> | <a href='/edit_user/<?=$val['id']?>'>Edit</a> | 
                    <form action='remove/<?=$val['id']?>' method='POST'>
                        <input type='submit' value='remove'>
                    </form>
                </td>
            </tr>
<?php   }
?>
        </table>
    </div>
    <form action='adduser' method='POST'>
        <input type='submit' value='Add User'>
    </form>



</body>
</html>