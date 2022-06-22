
    <h1>Workshops</h1>
    
<?php
        if(isset($workshops)){
            foreach($workshops as $key => $val)
            {?>
                <div class='workshop-details-container-card'>
                    <p><strong>Name: </strong><?=$val['workshop_name']?></p>
                    <p><strong>Description: </strong><?=$val['workshop_description']?></p>

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
    
