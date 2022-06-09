<?php
    class workshop extends CI_Model{
        function get_all_workshops()
        {
            return $this->db->query("SELECT * FROM workshops")->result_array();
        }

        function get_workshop_by_id($user_id)
        {
            return $this->db->query("SELECT * FROM workshops WHERE id=?", array($user_id))->row_array();
        }
 

        function add_workshop($workshop)
        {
            $query = "INSERT INTO workshops(workshop_name, workshop_description, certificate_type, venue, workshop_date, start_time, end_time, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?,?)";
            $values = array($workshop['workshop_name'],$workshop['workshop_description'],$workshop['certificate_type'], $workshop['venue'], $workshop['workshop_date'], $workshop['start_time'], $workshop['end_time'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
            return $this->db->query($query, $values);
        }
    }
?>