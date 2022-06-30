<div class='container align-items-center'>

    <?php if(isset($errors)){echo $errors;}?>
    <?php if(isset($image_error)){echo $image_error;}?>
    
    <form action="add_participant_to_workshop" method="post">
        <div class="form-group">
            <label for="full_name">Full name:</label>
            <input type="text" name="full_name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Add Participant to Workshop">
        </div>
    </form>
</div>