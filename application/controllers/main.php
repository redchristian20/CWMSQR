<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
    }
    //Function that loads the homepage
	public function index()
	{
        $this->load->view('header');
        $data['workshops'] = $this->showWorkshops();
        $this->load->view('home',$data);
        $this->load->view('footer');
	}

    public function home()
    {
        $this->load->view('header');
        $data['workshops'] = $this->showWorkshops();
        $this->load->view('home',$data);
        $this->load->view('footer');
    }

    public function add_workshop()
    {
        $this->load->view('header');
        $this->load->view('add_workshop', array('error' => ' ' ));
        $this->load->view('footer');
    }

    public function edit_workshop($workshop_id)
    {
        $this->load->model("workshop");
        $this->load->view('header');
        $this->load->view('edit_workshop', array('error' => ' ' ));
        $this->load->view('footer');

        if($workshop_id == 'manage_workshops')
        {
            redirect("manage_workshops");
        }
        if($workshop_id == 'add_workshop')
        {
            redirect("add_workshop");
        }
        if($workshop_id == 'home')
        {
            redirect("home");
        }

        if($workshop_id == 'workshops')
        {
            redirect("workshops");
        }
    }

    public function add_workshop_to_database()
    {
        //Loads the form validation library
        $this->load->library("form_validation");

        $this->form_validation->set_rules("workshop_name", "Workshop name", "trim|required");
        $this->form_validation->set_rules("workshop_description", "Workshop description", "trim|required");
        //$this->form_validation->set_rules("venue", "Venue", "trim|required");
        //$this->form_validation->set_rules("start_date", "Start date", "trim|required");
        //$this->form_validation->set_rules("end_date", "End date", "trim|required");
        //$this->form_validation->set_rules("start_time", "Start time", "trim|required");
        //$this->form_validation->set_rules("end_time", "End time", "trim|required");

        //function to upload files
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile') || $this->form_validation->run() === FALSE)
        {
                $error = array('image_error' => $this->upload->display_errors(), 'errors' => validation_errors());
                $this->load->view('header');
                $this->load->view('add_workshop', $error);
                $this->load->view('footer');
        }
        else
        {
            $size = "200x200";
            $color = str_replace('#','','black');
            $workshop_link = uniqid('w');
            $qr = base_url().'show_workshop/'.$workshop_link;
            $qr_link = 'https://chart.googleapis.com/chart?cht=qr&chs='.$size.'&chl='.$qr.'&chco='.$color;
            $data = array("workshop_name" => $this->input->post('workshop_name'), "workshop_description" => $this->input->post('workshop_description'), 'event_poster_link' => $this->upload->data('file_name'),'workshop_link' => $workshop_link, 'qr_link' => $qr_link);
            //Loads the workshop model
            $this->load->model("workshop");
            $add_workshop = $this->workshop->add_workshop($data);
            if($add_workshop)
            {
                redirect("/");
            }
        }
            
    }

    public function workshops()
    {
        $this->load->view('header');
        $data['workshops'] = $this->showWorkshops();
        $this->load->view('workshops',$data);
        $this->load->view('footer');
    }

    public function manage_workshops()
    {
        $this->load->view('header');
        $data['workshops'] = $this->showWorkshops();
        $this->load->view('workshops',$data);
        $this->load->view('footer');
    }

    public function showWorkshops()
    {
        $this->load->model("workshop");
		$workshops = $this->workshop->get_all_workshops();
		return $workshops;
    }
    

    public function show_workshop($workshop_id)
    {
        $this->load->model("workshop");
        if($data['workshop'] = $this->workshop->get_workshop_by_id($workshop_id))
        {
            $this->load->view('header');
            $this->load->view('show_workshop',$data);
            $this->load->view('footer');
        }else if($data['workshop'] = $this->workshop->get_workshop_by_workshop_link($workshop_id)){
            $this->load->view('header');
            $this->load->view('show_workshop',$data);
            $this->load->view('footer');
        }else{
            if($workshop_id == 'manage_workshops')
            {
                redirect("manage_workshops");
            }
            else if($workshop_id == 'add_workshop')
            {
                redirect("add_workshop");
            }
            else if($workshop_id == 'home')
            {
                redirect("home");
            }

            else if($workshop_id == 'workshops')
            {
                redirect("workshops");
            }
        }    
    }

    public function add_participants($workshop_id)
    {
        $this->load->view('header');
        $this->load->view('add_participants');
        $this->load->view('footer');
    }
}
