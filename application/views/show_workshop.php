<div class="container-fluid mx-3">
    <div class="container-fluid">
      <h2 class="text-center p-2"></strong><?=$workshop['workshop_name']?></h2>
      <img src="../uploads/<?= $workshop['workshop_poster_link']?>" class="img-fluid" alt="Image" width="100%" height="auto">
    </div>
    <div class="mx-auto" style="width: 1280px">
    <h3 class="text-center p-2">Event Details</h3>
      <p><?=$workshop['workshop_description']?></p>
      <p><strong>Speaker: </strong><?=$workshop['workshop_speaker']?></p>
      <p><strong>Date: </strong><?=$workshop['workshop_date']?></p>
      <p><strong>Time: </strong><?=$workshop['workshop_time']?></p>
      <p><strong>Venue: </strong><?=$workshop['workshop_venue']?></p>
      <p><strong>Link: </strong><?=$workshop['workshop_link']?></p>
      <p><strong>Event QR:</p>
      <p><img src="<?=$workshop['workshop_qr_link']?>" class="img-fluid"></p>
  </div>
  <form action="<?=base_url()?>/add_participants/<?=$workshop['id']?>" method="post" class="text-center m-3">
    <input type="submit" name="add_participants" value="Add Participants" class="btn btn-success">
  </form>
  <div id="imported_csv_data" class="mx-auto" style="width: 1280px"></div>
</div>
