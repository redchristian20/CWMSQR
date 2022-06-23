
    <h1>Workshops</h1>
<?php
        if(isset($workshops)){
            foreach($workshops as $key => $val)
            {?>
                <div class='card'>
                    <img class="img-thumbnail" src="./uploads/<?= $val['event_poster_link']?>" alt="<?= $val['workshop_name']?>" width="360px">
                    <p><strong>Name: </strong><?=$val['workshop_name']?></p>
                    <p><strong>Description: </strong><?=$val['workshop_description']?></p>
                    <form action="show_workshop/<?=$val['id']?>" method="post">
                        <input type="submit" name="show_workshop" value="Show" class="btn" style="margin:10px">
                    </form>
                    <form action="edit_workshop/<?=$val['id']?>" method="post">
                        <input type="submit" name="edit_workshop" value="Edit" class="btn" style="margin:10px">
                    </form>
                </div>
<?php       }
        }
?>
    
