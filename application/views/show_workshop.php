<div class="workshop-details-container-card">
  <h3>Workshop Details</h3>
  <p><img src="../uploads/<?= $workshop['workshop_poster_link']?>" class="workshop-banner" alt="Image" width="960px"></p>
  <p><strong>Name: </strong><?=$workshop['workshop_name']?></p>
  <p><strong>Description: </strong><?=$workshop['workshop_description']?></p>
  <p><strong>Speaker: </strong><?=$workshop['workshop_speaker']?></p>
  <p><img src="<?=$workshop['workshop_qr_link']?>" class="img-fluid"></p>
  <form action="../add_participants/<?=$workshop['id']?>" method="post">
        <input type="hidden" name="form_submitted" value="1" />
        <input type="submit" name="add_participants" value="Add Participants">
  </form>
</div>