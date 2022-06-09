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