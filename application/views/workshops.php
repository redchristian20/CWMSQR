
    <h1>Workshops</h1>
    <div class='workshop-section'>
        <table>
            <tr>
                <td><strong>Title</strong></td>
                <td><strong>Description</strong></td>
                <td><strong>Venue</strong></td>
                <td><strong>Date</strong></td>
                <td><strong>Start time</strong></td>
                <td><strong>End time</strong></td>
                <td><strong>Actions</strong></td>
            </tr>
<?php
        foreach($workshops as $key => $val)
        {?>
            <tr>
                <td><?=$val['workshop_name']?></td>
                <td><?=$val['workshop_description']?></td>
                <td><?=$val['venue']?></td>
                <td><?=$val['workshop_date']?></td>
                <td><?=date('h:i A',strtotime($val['start_time']))?></td>
                <td><?=date('h:i A',strtotime($val['end_time']))?></td>
                <td>
                    <a href='show_workshop/<?=$val['id']?>'>Show</a> | <a href='edit_workshop/<?=$val['id']?>'>Edit</a>
                </td>
            </tr>
<?php   }
?>
        </table>
    </div>
    <form action='add_workshop' method='POST'>
        <input type='submit' value='Add Workshop'>
    </form>
