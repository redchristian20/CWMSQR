<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>UC Workshop Management</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo base_url();?>assets/css/main.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">

</head>

<body>
<div class='header'>
 
</div>
<nav>

<?php
        if(null!==($this->session->userdata('user_level')))
        {?>
<?php     if($this->session->userdata('user_level')==10)
            {?>
        <ul class='nav-left'>
            <li><a href="home">Home</a></li>
            <li><a href="workshops">Workshops</a></li>
            <li><a href="certificate_verification">Certificate Verification</a></li>
            <li><a href="add_workshop">Add workshop</a></li>
            </ul>
            <ul class='nav-right'>
            <li><a href="profile">Profile</a></li>
            <li><a href="logout">Logout</a></li>
        </ul>
<?php       }else{?>

        <ul class='nav-left'>
            <li><a href="home">Home</a></li>
            <li><a href="workshops">Workshops</a></li>
            <li><a href="certificate_verification">Certificate Verification</a></li>
            </ul>
            <ul class='nav-right'>
            <li><a href="profile">Profile</a></li>
            <li><a href="logout">Logout</a></li>
        </ul>
        
<?php       }?>
<?php   }else{?>
        <ul class='nav-left'>
            <li><a href="home">Home</a></li>
            <li><a href="workshops">Workshops</a></li>
            <li><a href="certificate_verification">Certificate Verification</a></li>
            </ul>
            <ul class='nav-right'>
            <li><a href="login">Login</a></li>
            <li><a href="register">Register</a></li>
        </ul>
<?php   }
    ?>
    
</nav>


