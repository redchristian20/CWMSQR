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