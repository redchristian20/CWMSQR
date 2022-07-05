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

    <div class='workshop-section'>
        <table>
            <tr>
                <td>Workshop name</td>
                <td>Workshop description</td>
                <td>Certificate type</td>
                <td>Venue</td>
                <td>Actions</td>
            </tr>
<?php
        foreach($workshops as $key => $val)
        {?>
            <tr>
                <td><?=$val['workshop_name']?></td>
                <td><?=$val['workshop_description']?></td>
                <td><?=$val['certification_type']?></td>
                <td><?=$val['venue']?></td>
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
    <form action='add_workshop' method='POST'>
        <input type='submit' value='Add Workshop'>
    </form>



</body>
</html>