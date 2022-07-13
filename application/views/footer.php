</body>
</html>
<script>
    $(document).ready(function(){

    load_data();
    
    function load_data()
    {
    $.ajax({
    url:"<?php echo base_url(); ?>main/load_data",
    method:"POST",
    success:function(data)
    {
        $('#imported_csv_data').html(data);
    }
    })
    }

    $('#import_csv').on('submit', function(event){
    event.preventDefault();
    $.ajax({
    url:"<?php echo base_url(); ?>main/import",
    method:"POST",
    data:new FormData(this),
    contentType:false,
    cache:false,
    processData:false,
    beforeSend:function(){
        $('#import_csv_btn').html('Importing...');
    },
    success:function(data)
    {
        $('#import_csv')[0].reset();
        $('#import_csv_btn').attr('disabled', false);
        $('#import_csv_btn').html('Import Done');
        load_data();
    }
    })
    });
    
    });
</script>