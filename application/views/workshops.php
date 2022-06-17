
    <h1>Workshops</h1>
    <div class='.workshop-details-container-card'>
<?php
        if(isset($workshops)){
            foreach($workshops as $key => $val)
            {?>
                <tr>
                    <p><?=$val['workshop_name']?></p>
                    <p><?=$val['workshop_description']?></p>
                    <p><?=$val['venue']?></p>
                    <p><?=$val['start_date']?></p>
                    <p><?=$val['end_date']?></p>
                    <p><img src="./uploads/<?= $val['event_poster_link']?>" class="img-fluid" alt="Image" width="960" height="540"></p>
                    <p><?=date('h:i A',strtotime($val['start_time']))?></p>
                    <p><?=date('h:i A',strtotime($val['end_time']))?></p>
                    <p>
                        <a href='show_workshop/<?=$val['id']?>'>Show</a> | <a href='edit_workshop/<?=$val['id']?>'>Edit</a>
                    </p>
                    <p><img src="<?=$val['qr_code_link']?>" class="img-fluid"></p>
                </tr>
<?php       }
        }
?>
    </div>
