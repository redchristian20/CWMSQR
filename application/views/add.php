<?php
    
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
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
    <a href='/'>Go back</a>
    <div class='add-user-section'>
        <h2>Workshop Registration</h2>
        <form action="add" method="post">
            <label for="last_name">Last name:</label>
            <input type="text" name="last_name">

            <label for="first_name">First name:</label>
            <input type="text" name="first_name">

            <label for="middle_name">Middle name:</label>
            <input type="text" name="middle_name">

            <label for="email">Email:</label>
            <input type="email" name="email">

            <label for="password">Password:</label>
            <input type="password" name="password">

            <input type="hidden" name="form_submitted" value="1" />
            <input type="submit" name="submit" value="Submit">
        </form>
        
        <!--For the QR code on TODO
        <form action="register" method="post">
            <img src="<?php if(isset($qr)){echo $qr;} ?>" class="img-fluid" alt="">
        </form>-->
    </div>



</body>
</html>