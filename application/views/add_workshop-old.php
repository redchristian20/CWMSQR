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
        <h2>Add Workshop</h2>
        <form action="add_workshop_to_database" method="post">
            <label for="workshop_name">Workshop name:</label>
            <input type="text" name="workshop_name">

            <label for="workshop_description">Workshop description:</label>
            <input type="text" name="workshop_description">

            <label for="certification_type">Certification type:</label>
            <input type="text" name="certification_type">

            <label for="venue">Venue:</label>
            <input type="text" name="venue">

            <label for="training_time">Training time:</label>
            <input type="text" name="training_time">

            <label for="training_hours">Training hours:</label>
            <input type="text" name="training_hours">

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