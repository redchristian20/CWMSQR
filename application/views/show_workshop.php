<div class="container-fluid mx-3">
  <h3>Workshop Details</h3>
    <p><img src="../uploads/<?= $workshop['workshop_poster_link']?>" class="img-fluid" alt="Image" width="100%" height="auto"></p>
    <p><strong>Name: </strong><?=$workshop['workshop_name']?></p>
    <p><strong>Description: </strong><?=$workshop['workshop_description']?></p>
    <p><strong>Speaker: </strong><?=$workshop['workshop_speaker']?></p>
    <p><strong>Date: </strong><?=$workshop['workshop_date']?></p>
    <p><strong>Time: </strong><?=$workshop['workshop_time']?></p>
    <p><strong>Venue: </strong><?=$workshop['workshop_venue']?></p>
    <p><strong>Link: </strong><?=$workshop['workshop_link']?></p>
    <p><img src="<?=$workshop['workshop_qr_link']?>" class="img-fluid"></p>
    <div id="imported_csv_data"></div>
  <form action="../add_participants/<?=$workshop['id']?>" method="post">
    <input type="submit" name="add_participants" value="Add Participants">
  </form>
</div>
