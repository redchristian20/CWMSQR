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
        <h2>User Registration</h2>
        <form action="register_user" method="post">

            <label for="username">Username:</label>
            <input type="text" name="username">

            <label for="password">Password:</label>
            <input type="password" name="password">

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password">

            <label for="honorific">Honorific:</label>
            <input type="text" name="honorific">
            
            <label for="lastname">Last name:</label>
            <input type="text" name="lastname">

            <label for="firstname">First name:</label>
            <input type="text" name="firstname">

            <label for="middlename">Middle name:</label>
            <input type="text" name="middlename">

            <label for="suffix">Suffix:</label>
            <input type="text" name="suffix">

            <label for="email">Email:</label>
            <input type="email" name="email">

            <label for="contact_number">Contact Number:</label>
            <input type="text" name="contact_number">


            <input type="hidden" name="form_submitted" value="1" />
            <input type="submit" name="register" value="Register">
        </form>

    </div>

    <?php
        if(isset($errors)){
            echo $errors;
        }
    ?>
    
    





</body>
</html>