<?php 
// Class for Workshop model
class Workshops_model extends CI_Model
{
    public $workshop_name;
    public $workshop_description;
    public $workshop_speaker;
    public $workshop_date;
    public $workshop_time;
    public $workshop_venue;
    public $workshop_poster_link;
    public $workshop_link;
    public $workshop_qr_link;
    public $created_at;
    public $updated_at;

    // Function that gets Workshops
    public function get_workshops()
    {
        $query = $this->db->get('workshops');
        return $query->result_array();
    }

    // Function that inserts workshop details
    public function insert_workshop($workshop_array)
    {
        $this->workshop_name = $workshop_array['workshop_name'];
        $this->workshop_description = $workshop_array['workshop_description'];
        $this->workshop_speaker = $workshop_array['workshop_speaker'];
        $this->workshop_date = $workshop_array['workshop_date'];
        $this->workshop_time = $workshop_array['workshop_time'];
        $this->workshop_venue = $workshop_array['workshop_venue'];
        $this->workshop_poster_link = $workshop_array['workshop_poster_link'];
        $this->workshop_link = $workshop_array['workshop_link'];
        $this->workshop_qr_link = $workshop_array['workshop_qr_link'];
        $this->created_at = date("Y-m-d, H:i:s");
        $this->updated_at = date("Y-m-d, H:i:s");
        $this->db->insert('workshops', $this);
    }

    // Function that update workshop details
    public function update_workshop($workshop_array)
    {
        $this->workshop_name = $workshop_array('workshop_name');
        $this->workshop_description = $workshop_array('workshop_description');
        $this->workshop_speaker = $workshop_array('workshop_speaker');
        $this->workshop_date = $workshop_array('workshop_date');
        $this->workshop_time = $workshop_array('workshop_time');
        $this->updated_at = time();
        $this->db->update('workshops', $this, array('id' => $workshop_array('id')));
    }

    // Function that gets workshop by ID
    public function get_workshop_by_id($workshop_id)
    {
        $query = $this->db->select('*')->where('id', $workshop_id)->get('workshops');
        $row = $query->row_array();
        if (isset($row))
        {
            return $row;
        }
    }

    // Function that gets workshop by a link
    public function get_workshop_by_link($workshop_link)
    {
        $query = $this->db->select('*')->where('workshop_link', $workshop_link)->get('workshops');
        $row = $query->row_array();
        if (isset($row))
        {
            return $row;
        }
    }

    
}
?>


