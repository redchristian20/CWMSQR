<div class="workshop-details-container-card">

  <h3>Workshop Details</h3>
  <p><strong>Name: </strong><?=$workshop['workshop_name']?></p>
  <p><strong>Description: </strong><?=$workshop['workshop_description']?></p>
  <p><strong>Venue: </strong><?=$workshop['venue']?></p>
  <p><strong>Date: </strong><?=$workshop['workshop_date']?></p>
  <p><strong>Start: </strong><?=date('h:i A',strtotime($workshop['start_time']))?></p>
  <p><strong>End: </strong><?=date('h:i A',strtotime($workshop['end_time']))?></p>

</div>