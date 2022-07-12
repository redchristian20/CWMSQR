<?php
        ini_set('auto_detect_line_endings', true);
?>

<div class='container align-items-center'>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Select File:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type='hidden' name='action' value='upload_file'>
        <input type="submit" value="Submit"/>
    </form>

    <?php if(isset($errors)){echo $errors;}?>
    <?php if(isset($image_error)){echo $image_error;}?>
    <?php if(isset($success)){echo $success;}?>
</div>