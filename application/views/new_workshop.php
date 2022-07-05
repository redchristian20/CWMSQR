<div class='container align-items-center'>

    <?php echo form_open_multipart('insert_workshop');?>
        <h2>Workshop Event Creation</h2>
        <div class="form-group">
            <input type="file" name="userfile" value="Upload Event Poster" size="20" />
        </div>
        <div class="form-group">
            <input type="text" name="workshop_name" placeholder="Insert Title Here">
        </div>
        <h3>Event Details:</h3>
        <div class="form-group">
            <textarea name="workshop_description" cols="120" rows="2" placeholder="Insert event description"></textarea>
        </div>
        <div class="form-group">
            <label for="workshop_speaker">Speaker:</label>
            <input type="text" name="workshop_speaker">
        </div>
        <div class="form-group">
            <label for="workshop_date">Date:</label>
            <input type="text" name="workshop_date">
        </div>
        <div class="form-group">
            <label for="workshop_time">Time:</label>
            <input type="text" name="workshop_time">
        </div>
        <div class="form-group">
            <label for="workshop_venue">Venue:</label>
            <input type="text" name="workshop_venue">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Save">
        </div>
    </form>

    <?php if(isset($errors)){echo $errors;}?>
    <?php if(isset($image_error)){echo $image_error;}?>
    <?php if(isset($success)){echo $success;}?>
</div>