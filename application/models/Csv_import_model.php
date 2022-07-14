<?php
class Csv_import_model extends CI_Model
{
 function select($workshop_id)
 {
    $query =$this->db->order_by('id', 'ASC')->where('workshop_id', $workshop_id)->get('tbl_user');
    return $query;
 }

 function select_all()
 {
   $query =$this->db->order_by('id', 'ASC')->get('tbl_user');
    return $query;
 }

 function insert($data)
 {
  $this->db->insert_batch('tbl_user', $data);
 }
}