<?php
class Certificates_model extends CI_Model
{
    public function get_certificates_by_code($certificate_code)
    {
        $query = $this->db->query("SELECT * FROM workshops INNER JOIN tbl_user ON workshops.id = tbl_user.workshop_id WHERE tbl_user.participant_code ='062cf889c33305';");
        return $query->row_array();
    }
}
?>


