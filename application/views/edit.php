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
</style>


<body>
    <p><a href='/'>Go back</a> | <a href='/show/<?=$contact['id']?>'>Show</a></p>
    <h1>Edit contact</h1>
    <form action='edit/<?=$user['id']?>' method='POST'>
    <label for="last_name">Last name:</label>
            <input type="text" name="last_name" value='<?=$user['lastname']?>'>

            <label for="first_name">First name:</label>
            <input type="text" name="first_name" value='<?=$user['firstname']?>'>

            <label for="middle_name">Middle name:</label>
            <input type="text" name="middle_name" value='<?=$user['middlename']?>'>

            <label for="email">Email:</label>
            <input type="email" name="email" value='<?=$user['email']?>'>

            <input type="hidden" name="form_submitted" value="1" />
            <input type="submit" name="edit" value="Edit">
    </form>
</body>
</html>