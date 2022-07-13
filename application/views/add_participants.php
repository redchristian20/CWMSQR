<div class="container box">
  <h3></h3>
  <br/>

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