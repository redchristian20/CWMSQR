<?php
    class workshop extends CI_Model{
        function get_all_workshops()
        {
            return $this->db->query("SELECT * FROM workshops")->result_array();
        }


        function delete_workshop($workshop_id)
        {
            $query = "DELETE FROM workshops WHERE id=?";
            return $this->db->query($query,$workshop_id);
        }

        function add_workshop($workshop)
        {
            $query = "INSERT INTO workshops(workshop_name, workshop_description, certification_type, venue, training_time, training_hours, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?)";
            $values = array($workshop['workshop_name'],$workshop['workshop_description'],$workshop['certification_type'], $workshop['venue'], $workshop['training_time'], $workshop['training_hours'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
            return $this->db->query($query, $values);
        }
    }
?>