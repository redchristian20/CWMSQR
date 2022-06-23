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

        function get_workshop_by_name($workshop_name)
        {
            return $this->db->query("SELECT * FROM workshops WHERE workshop_name=?", array($workshop_name))->row_array();
        }
 

        function add_workshop($workshop)
        {
            $query = "INSERT INTO workshops(workshop_name, workshop_description, venue, start_date, end_date, start_time, end_time, event_poster_link, qr_code_link, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $values = array($workshop['workshop_name'],$workshop['workshop_description'], $workshop['venue'], $workshop['start_date'], $workshop['end_date'], $workshop['start_time'], $workshop['end_time'], $workshop['event_poster_link'], $workshop['qr_code_link'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
            return $this->db->query($query, $values);
        }

        function update_workshop($workshop)
        {
            $query = "UPDATE workshops SET workshop_name=?, workshop_description=?, venue=?, start_date=?, end_date=?, start_time=?, end_time, event_poster_link, qr_code_link=?, updated_at=? WHERE id=?";
            $values = array($workshop['workshop_name'],$workshop['workshop_description'],$workshop['venue'],$workshop['start_date'], $workshop['end_date'], $workshop['event_poster_link'], $workshop['qr_code_link'], date("Y-m-d, H:i:s"), $workshop['id']); 
            return $this->db->query($query, $values);
        }
    }
?>