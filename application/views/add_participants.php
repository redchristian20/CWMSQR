<div class="workshop-details-container-card">
  <h3>Workshop Details</h3>
    <p><img src="../uploads/<?= $workshop['workshop_poster_link']?>" class="workshop-banner" alt="Image" width="960px"></p>
    <p><strong>Name: </strong><?=$workshop['workshop_name']?></p>
    <p><strong>Description: </strong><?=$workshop['workshop_description']?></p>
    <p><strong>Speaker: </strong><?=$workshop['workshop_speaker']?></p>
    <p><strong>Date: </strong><?=$workshop['workshop_date']?></p>
    <p><strong>Time: </strong><?=$workshop['workshop_time']?></p>
    <p><strong>Venue: </strong><?=$workshop['workshop_venue']?></p>
    <p><strong>Link: </strong><?=$workshop['workshop_link']?></p>
    <p><img src="<?=$workshop['workshop_qr_link']?>" class="img-fluid"></p>

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
