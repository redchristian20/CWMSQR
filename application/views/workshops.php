
<<<<<<< Updated upstream
    <h1>Workshops</h1>
    
=======
    
    <div class='workshop-section'>
>>>>>>> Stashed changes
<?php
        if(isset($workshops)){
            foreach($workshops as $key => $val)
            {?>
<<<<<<< Updated upstream
                <div class='workshop-details-container-card'>
                    <p><img src="./uploads/<?= $val['event_poster_link']?>" alt="Image" class="workshop-banner"></p>
                    <p><strong>Name: </strong><?=$val['workshop_name']?></p>
                    <p><strong>Description: </strong><?=$val['workshop_description']?></p>
                    <p><strong>Venue: </strong><?=$val['venue']?></p>
                    <p><strong>Start date: </strong><?=$val['start_date']?></p>
                    <p><strong>End date: </strong><?=$val['end_date']?></p>
                    <p><strong>Start: </strong><?=date('h:i A',strtotime($val['start_time']))?></p>
                    <p><strong>End: </strong><?=date('h:i A',strtotime($val['end_time']))?></p>
                    <p><img src="<?=$val['qr_code_link']?>" class="img-fluid"></p>

                    <form action="show_workshop/<?=$val['id']?>" method="post">
                        <input type="submit" name="show_workshop" value="Show">
                    </form>

                    <form action="edit_workshop/<?=$val['id']?>" method="post">
                        <input type="submit" name="edit_workshop" value="Edit">
                    </form>
                </div>
<?php       }
        }
?>
    
=======
                <h1>Workshops</h1>
                <p><img src="./uploads/<?= $val['event_poster_link']?>" class="img-fluid" alt="Image" width="960" height="540"></p>
                <p><?=$val['workshop_name']?></p>
                <p><?=$val['workshop_description']?></p>
                <p><?=$val['venue']?></p>
                <p><?=$val['start_date']?></p>
                <p><?=$val['end_date']?></p>
                <p><?=date('h:i A',strtotime($val['start_time']))?></p>
                <p><?=date('h:i A',strtotime($val['end_time']))?></p>
                <p><img src="<?=$val['qr_code_link']?>" class="img-fluid" alt="Image"></p>
                <p>
                    <a href='show_workshop/<?=$val['id']?>'>Show</a> | <a href='edit_workshop/<?=$val['id']?>'>Edit</a>
                </p>
<?php       }
        }
?>
    </div>
    <form action='add_workshop' method='POST'>
        <input type='submit' value='Add Workshop'>
    </form>
>>>>>>> Stashed changes
