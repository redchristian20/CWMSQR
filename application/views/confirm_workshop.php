<html>
<head>
<title>Confirm Workshop</title>
</head>
<body>
    <h2>Confirm workshop</h2>
    <img src="./uploads/<?php if(isset($file_name)){echo $file_name;} ?>" class="img-fluid" alt="Image" width="960" height="540">
    <img src="<?php if(isset($qr)){echo $qr;} ?>" class="img-fluid" alt="QR image">
    <p><?php if(isset($workshop_name)){echo $workshop_name;} ?></p>
    <p><?php if(isset($workshop_description)){echo $workshop_description;} ?></p>
    <p><?php if(isset($venue)){echo $venue;} ?></p>
    <p><?php if(isset($start_date)){echo $start_date;} ?></p>
    <p><?php if(isset($end_date)){echo $end_date;} ?></p>
    <p><?php if(isset($start_time)){echo $start_time;} ?></p>
    <p><?php if(isset($end_time)){echo $end_time;} ?></p>
    
    <form action="confirm_workshop" method="post">
        <input type="hidden" name="form_submitted" value="1" />
        <input type="submit" name="Confirm" value="Confirm">
    </form>
    <p><?php if(isset($upload_data)){echo $upload_data;} ?></p>
</body>
</html>