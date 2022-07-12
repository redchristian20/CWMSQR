<?php
    if(isset($workshops)){
        foreach($workshops as $key => $val)
        {?>
            <div class='d-inline-block' style="margin:10px">
                <img class="img" src="./uploads/<?= $val['workshop_poster_link']?>" alt="<?= $val['workshop_name']?>" width="360px">
                <p><strong>Name: </strong><?=$val['workshop_name']?></p>
                <p><strong>Description: </strong><?=$val['workshop_description']?></p>
                <form action="show_workshop/<?=$val['id']?>" method="post" class="d-inline-block">
                    <input type="submit" name="show_workshop" value="Show" class="btn btn-success d-inline-block" style="margin:10px">
                </form>
                <form action="edit_workshop/<?=$val['id']?>" method="post" class="d-inline-block">
                    <input type="submit" name="edit_workshop" value="Edit" class="btn btn-primary d-inline-block" style="margin:10px">
                </form>
            </div>
<?php   }
    }
?>    
