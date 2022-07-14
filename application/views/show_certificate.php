<div class="container-fluid mx-3">
    <div class="container-fluid">
      <h2 class="text-center p-2"></strong><?=$certificate_data['workshop_name']?></h2>
      <img src="../uploads/<?= $certificate_data['workshop_poster_link']?>" class="img-fluid" alt="Image" width="100%" height="auto">
    </div>
    <div class="mx-auto" style="width: 1280px">
    <h3 class="text-center p-2">Event Details</h3>
      <p><?=$certificate_data['workshop_description']?></p>
      <p><strong>Speaker: </strong><?=$certificate_data['workshop_speaker']?></p>
      <p><strong>Date: </strong><?=$certificate_data['workshop_date']?></p>
      <p><strong>Time: </strong><?=$certificate_data['workshop_time']?></p>
      <p><strong>Venue: </strong><?=$certificate_data['workshop_venue']?></p>
      <p><strong>Link: </strong><?=$certificate_data['workshop_link']?></p>
      <p><strong>Event QR: </strong></p>
      <p><img src="<?=$certificate_data['workshop_qr_link']?>" class="img-fluid"></p>
  </div>

    <div class="container-fluid mx-auto" style="width: 1280px">
        <h4><em>This confirms the authenticity of the following certificate issued by Innovation Technology Transfer Office InTTO</em></h4>
        <p><strong>Participant: </strong> <?=$certificate_data['first_name']?> <?=$certificate_data['last_name']?></p>
        <p><strong>Certificate code:</strong> <?=$certificate_data['participant_code']?></p>
        <p><strong>Certificate QR:</strong></p>
        <p><img src="<?=$certificate_data['participant_qr']?>" class="img-fluid"></p>
    
    </div>
</div>
