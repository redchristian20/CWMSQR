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
        width: 960px;
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
    <p><a href='/'>Go back</a> | <a href='edit_user/<?=$user['id']?>'>Edit</a></p>
    <h1>ID #<?=$user['id']?></h1>
    <p>Last name: <?=$user['lastname']?></p>
    <p>First name: <?=$user['firstname']?></p>
    <p>Middle name: <?=$user['middlename']?></p>
    <p>Email: <?=$user['email']?></p>
</body>
</html>