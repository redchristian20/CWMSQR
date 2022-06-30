<div class="workshop-details-container-card">
  <h3>Workshop Details</h3>
  <p><img src="../uploads/<?= $workshop['event_poster_link']?>" class="workshop-banner" alt="Image" width="960px"></p>
  <p><strong>Name: </strong><?=$workshop['workshop_name']?></p>
  <p><strong>Description: </strong><?=$workshop['workshop_description']?></p>
  <p><img src="<?=$workshop['qr_link']?>" class="img-fluid"></p>
  
  <form action="add_participants/<?=$workshop['id']?>" method="post">
        <input type="hidden" name="form_submitted" value="1" />
        <input type="submit" name="add_participants" value="Add Participants">
  </form>
</div>