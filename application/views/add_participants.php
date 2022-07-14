<div class="container-fluid mx-3">
  <h3>Workshop Details</h3>
  <img src="../uploads/<?= $workshop['workshop_poster_link']?>" class="img-fluid" alt="Image" width="100%" height="auto">
    <div class="mx-auto" style="width: 1280px">
      <p><strong>Name: </strong><?=$workshop['workshop_name']?></p>
      <p><strong>Description: </strong><?=$workshop['workshop_description']?></p>
      <p><strong>Speaker: </strong><?=$workshop['workshop_speaker']?></p>
      <p><strong>Date: </strong><?=$workshop['workshop_date']?></p>
      <p><strong>Time: </strong><?=$workshop['workshop_time']?></p>
      <p><strong>Venue: </strong><?=$workshop['workshop_venue']?></p>
      <p><strong>Link: </strong><?=$workshop['workshop_link']?></p>
      <p><strong>Workshop QR Code</p>
      <img src="<?=$workshop['workshop_qr_link']?>" class="img-fluid">
    </div>
</div>
<div class="container box">
	<form method="post" id="import_csv" enctype="multipart/form-data">
		<div class="form-group">
			<label>Select CSV File</label>
			<input type="file" name="csv_file" id="csv_file" required accept=".csv" />
		</div>
		<br />
		<button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Import CSV</button>
	</form>
	<br />
	<div id="imported_csv_data"></div>
</div>
