<div class='container align-items-center'>

    <?php if(isset($errors)){echo $errors;}?>
    <?php if(isset($image_error)){echo $image_error;}?>
    
    <?php echo form_open_multipart('add_workshop_to_database');?>
        <h2>Workshop Event Creation</h2>
        <div class="form-group">
            <input type="file" name="userfile" value="Upload Event Poster" size="20" />
        </div>
        <div class="form-group">
            <label for="workshop_name">Workshop name:</label>
            <input type="text" name="workshop_name">
        </div>
        <div class="form-group">
            <label for="workshop_description">Workshop description:</label>
            <input type="text" name="workshop_description">
        </div>
        <div class="form-group">
            <label for="venue">Venue:</label>
            <input type="text" name="venue">
        </div>
        <div class="form-group">
            <label for="start_date">Start date:</label>
            <input type="date" name="start_date">
        </div>
        <div class="form-group">
            <label for="end_date">End date:</label>
            <input type="date" name="end_date">
        </div>
        <div class="form-group">
            <label for="start_time">Start time:</label>
            <input type="time" name="start_time">
        </div>  
        <div class="form-group">
            <label for="end_time">End time:</label>
            <input type="time" name="end_time">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Create">
        </div>
    </form>
</div>