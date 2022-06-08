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
    <a href="login">Login</a>
    <a href="register">Register</a>
    <a href="workshops">Workshops</a>
    <a href="add_workshops">Add workshop</a>

    <div class='add-user-section'>
        <h2>User Login</h2>
        <form action="login_user" method="post">

            <label for="username">Username:</label>
            <input type="text" name="username">

            <label for="password">Password:</label>
            <input type="password" name="password">

            <input type="hidden" name="form_submitted" value="1" />
            <input type="submit" name="login" value="Login">
        </form>

    </div>

    <?php
        if(isset($errors)){
            echo $errors;
        }
    ?>
    
    





</body>
</html>