<?php
    class participant extends CI_Model
    {
        function get_all_participants()
        {
            return $this->db->query("SELECT * FROM participants")->result_array();
        }
        function get_participant_by_id($participant_id)
        {
            return $this->db->query("SELECT * FROM participants WHERE id=?", array($participant_id))->row_array();
        }
        function add_participants($participant)
        {
            $query = "INSERT INTO participants(full_name, email, created_at, updated_at) VALUES (?,?,?,?)";
            $values = array($participant['full_name'],$participant['email'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
            return $this->db->query($query, $values);
        }
        function update_participants($participant)
        {
            $query = "UPDATE participants SET full_name=?, email=?, updated_at=? WHERE id=?";
            $values = array($participant['full_name'],$participant['email'], date("Y-m-d, H:i:s")); 
            return $this->db->query($query, $values);
        }
    }
?>