<div class='home-content'>
    <h2>Hello!</h2>
    <p>Welcome to UC-Certification Management System (UC-CMS) where you can manage workshops and certificates</p>
    <?php
        if(isset($workshops)){
            foreach($workshops as $key => $val)
            {?>
                <div>
                    <p><img src="./uploads/<?= $val['event_poster_link']?>" alt="Responsive image" class="img-fluid"></p>
                    <p><a href='show_workshop/<?=$val['id']?>'><?=$val['workshop_name']?></a></p>
                </div>
<?php       }
        }
?>

</div>