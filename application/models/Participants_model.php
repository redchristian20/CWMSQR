<?php
    class Participants_model extends CI_Model
    {
        public $id;
        public $full_name;
        public $email;
        public $workshop_id;
        public $created_at;
        public $updated_at;

        public function get_participants()
        {
            $query = $this->db->get('participants');
            return $query->result_array();
        }

        public function insert_participant($participant_array)
        {
            $this->full_name = $participant_array['full_name'];
            $this->email = $participant_array['email'];
            $this->workshop_id = $participant_array['workshop_id'];
            $this->created_at = date("Y-m-d, H:i:s");
            $this->updated_at = date("Y-m-d, H:i:s");
            $this->db->insert('participants', $this);
        }

        public function update_participant($participant_array)
        {
            $this->full_name = $participant_array('full_name');
            $this->email = $participant_array('email');
            $this->workshop_id = $participant_array('workshop_id');
            $this->updated_at = time();
            $this->db->update('participants', $this, array('id' => $participant_array('id')));
        }

        public function get_participant_by_id($participant_id)
        {
            $query = $this->db->select('*')->where('id', $workshop_id)->get('participants');
            $row = $query->row_array();
            if (isset($row))
            {
                return $row;
            }
        } 
    }
?>


