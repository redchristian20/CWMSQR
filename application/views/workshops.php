
    <h1>Workshops</h1>
    <div class='workshop-section'>
        <table>
            <tr>
                <td><strong>Title</strong></td>
                <td><strong>Description</strong></td>
                <td><strong>Venue</strong></td>
                <td><strong>Start Date</strong></td>
                <td><strong>End Date</strong></td>
                <td><strong>Image</strong></td>
                <td><strong>QR</strong></td>
                <td><strong>Start time</strong></td>
                <td><strong>End time</strong></td>
                <td><strong>Actions</strong></td>
            </tr>
<?php
        if(isset($workshops)){
            foreach($workshops as $key => $val)
            {?>
                <tr>
                    <td><?=$val['workshop_name']?></td>
                    <td><?=$val['workshop_description']?></td>
                    <td><?=$val['venue']?></td>
                    <td><?=$val['start_date']?></td>
                    <td><?=$val['end_date']?></td>
                    <td><img src="./uploads/<?= $val['event_poster_link']?>" class="img-fluid" alt="Image" width="960" height="540"></td>
                    <td><img src="<?=$val['qr_code_link']?>" class="img-fluid" alt="Image" width="960" height="540"></td>
                    <td><?=date('h:i A',strtotime($val['start_time']))?></td>
                    <td><?=date('h:i A',strtotime($val['end_time']))?></td>
                    <td>
                        <a href='show_workshop/<?=$val['id']?>'>Show</a> | <a href='edit_workshop/<?=$val['id']?>'>Edit</a>
                    </td>
                </tr>
<?php       }
        }
?>
        </table>
    </div>
    <form action='add_workshop' method='POST'>
        <input type='submit' value='Add Workshop'>
    </form>
