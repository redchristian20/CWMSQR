<?php
// Class that gets the certificates from the database
class Certificates_model extends CI_Model
{
    // Function that returns certificates of participants by a QR code.
    public function get_certificates_by_code($certificate_code)
    {
        $query = $this->db->query("SELECT * FROM workshops INNER JOIN tbl_user ON workshops.id = tbl_user.workshop_id WHERE tbl_user.participant_code ='{$certificate_code}';");
        return $query->row_array();
    }
}
?>


