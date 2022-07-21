<?php
// Class for importning CSV files.
class Csv_import_model extends CI_Model
{
   // Select a CSV file
 function select($workshop_id)
 {
    $query =$this->db->order_by('id', 'ASC')->where('workshop_id', $workshop_id)->get('tbl_user');
    return $query;
 }

 // Function that displays all data on the CSV file
 function select_all()
 {
   $query =$this->db->order_by('id', 'ASC')->get('tbl_user');
    return $query;
 }

 // Function that inserts the CSV file
 function insert($data)
 {
  $this->db->insert_batch('tbl_user', $data);
 }
}