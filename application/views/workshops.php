
    <h1>Workshops</h1>
    <div class='workshop-section'>
        <table>
            <tr>
                <td>Workshop name</td>
                <td>Workshop description</td>
                <td>Venue</td>
                <td>Actions</td>
            </tr>
<?php
        foreach($workshops as $key => $val)
        {?>
            <tr>
                <td><?=$val['workshop_name']?></td>
                <td><?=$val['workshop_description']?></td>
                <td><?=$val['venue']?></td>
                <td>
                    <a href='show_workshop/<?=$val['id']?>'>Show</a> | <a href='edit_workshop/<?=$val['id']?>'>Edit</a> | 
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
