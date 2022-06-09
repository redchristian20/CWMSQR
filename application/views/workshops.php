
    <h1>Workshops</h1>
    <div class='workshop-section'>
        <table>
            <tr>
                <td>Workshop name</td>
                <td>Workshop description</td>
                <td>Certificate type</td>
                <td>Venue</td>
                <td>Actions</td>
            </tr>
<?php
        foreach($workshops as $key => $val)
        {?>
            <tr>
                <td><?=$val['workshop_name']?></td>
                <td><?=$val['workshop_description']?></td>
                <td><?=$val['certificate_type']?></td>
                <td><?=$val['venue']?></td>
                <td>
                    <a href='/show/<?=$val['id']?>'>Show</a> | <a href='/edit_user/<?=$val['id']?>'>Edit</a> | 
                    <form action='join_workshop/<?=$val['id']?>' method='POST'>
                        <input type='submit' value='Join Workshop'>
                    </form>
                </td>
            </tr>
<?php   }
?>
        </table>
    </div>
    <form action='add_workshop' method='POST'>
        <input type='submit' value='Add Workshop'>
    </form>
