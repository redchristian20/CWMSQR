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
        function get_workshop_by_workshop_link($workshop_link)
        {
            return $this->db->query("SELECT * FROM workshops WHERE workshop_link=?", array($workshop_link))->row_array();
        }
        function add_workshop($workshop)
        {
            $query = "INSERT INTO workshops(workshop_name, workshop_description, event_poster_link, workshop_link, qr_link, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
            $values = array($workshop['workshop_name'],$workshop['workshop_description'], $workshop['event_poster_link'], $workshop['workshop_link'], $workshop['qr_link'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
            return $this->db->query($query, $values);
        }

        function update_workshop($workshop)
        {
            $query = "UPDATE workshops SET workshop_name=?, workshop_description=?, event_poster_link=?, updated_at=? WHERE id=?";
            $values = array($workshop['workshop_name'],$workshop['workshop_description'], $workshop['event_poster_link'], date("Y-m-d, H:i:s"), $workshop['id']); 
            return $this->db->query($query, $values);
        }
    }
?>