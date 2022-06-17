<div class="workshop-details-container-card">

  <h3>Workshop Details</h3>
  <p><img src="../uploads/<?= $workshop['event_poster_link']?>" alt="Image" class="workshop-banner"></p>
  <p><strong>Name: </strong><?=$workshop['workshop_name']?></p>
  <p><strong>Description: </strong><?=$workshop['workshop_description']?></p>
  <p><strong>Venue: </strong><?=$workshop['venue']?></p>
  <p><strong>Start date: </strong><?=$workshop['start_date']?></p>
  <p><strong>End date: </strong><?=$workshop['end_date']?></p>
  <p><strong>Start: </strong><?=date('h:i A',strtotime($workshop['start_time']))?></p>
  <p><strong>End: </strong><?=date('h:i A',strtotime($workshop['end_time']))?></p>
  <p><img src="<?=$workshop['qr_code_link']?>"></p>
  <form action="confirm_workshop" method="post">
        <input type="hidden" name="form_submitted" value="1" />
        <input type="submit" name="add_participants" value="Add Participants">
  </form>

</div>