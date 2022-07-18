<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->model('csv_import_model');
            $this->load->library('csvimport');
    }
    //Function that loads the homepage
	public function index()
	{
        
        $this->load->model("Workshops_model");
        $data['workshops'] = $this->Workshops_model->get_workshops();
        $this->load->view('header');
        $this->load->view('home',$data);
        $this->load->view('footer');
        
        //$this->load->view('csv_import');
	}

    public function tests()
    {
        $this->load->model("Workshops_model");
        $data['workshops'] = $this->Workshops_model->get_workshops();
        $this->load->view('header');
        $this->load->view('view_workshops',$data);
        $this->load->view('footer');
    }

    public function home()
    {
        $this->load->model("Workshops_model");
        $data['workshops'] = $this->Workshops_model->get_workshops();
        $this->load->view('header');
        $this->load->view('home',$data);
        $this->load->view('footer');
    }

    public function admin_login()
    {
        $this->load->model("Workshops_model");
        $data['workshops'] = $this->Workshops_model->get_workshops();
        $this->load->view('header');
        $this->load->view('admin_login',$data);
        $this->load->view('footer');
    }

    public function certificate_verification()
    {
        $this->load->model("Workshops_model");
        $data['attendees'] = $this->csv_import_model->select_all();
        $this->load->view('header');
        $this->load->view('certificate_verification',$data);
        $this->load->view('footer');
    }

    public function create_event()
    {
        $this->load->view('header');
        $this->load->view('new_workshop',array('error' => ' ','success' => ' '));
        $this->load->view('footer');
    }

    public function view_workshops(){
        $this->load->model("Workshops_model");
        $data['workshops'] = $this->Workshops_model->get_workshops();
        $this->load->view('header');
        $this->load->view('view_workshops',$data);
        $this->load->view('footer');
    }

    public function insert_workshop()
    {
        //Loads the form validation library
        $this->load->library("form_validation");
        $this->form_validation->set_rules("workshop_name", "Name", "trim|required");
        $this->form_validation->set_rules("workshop_description", "Description", "trim|required");
        $this->form_validation->set_rules("workshop_speaker", "Speaker", "trim|required");
        $this->form_validation->set_rules("workshop_date", "Date", "trim|required");
        $this->form_validation->set_rules("workshop_time", "Time", "trim|required");
        $this->form_validation->set_rules("workshop_venue", "Venue", "trim|required");
        //function to upload files
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile') && $this->form_validation->run() === FALSE || !$this->upload->do_upload('userfile') || $this->form_validation->run() === FALSE)
        {
                $message = array('image_error' => $this->upload->display_errors(), 'errors' => validation_errors());
                $this->load->view('header');
                $this->load->view('new_workshop', $message);
                $this->load->view('footer');
        }
        else
        {
            $size = "250x250";
            $color = str_replace('#','','black');
            $workshop_link = uniqid('w');
            $qr = base_url().'show_workshop_by_link/'.$workshop_link;
            $qr_link = 'https://chart.googleapis.com/chart?cht=qr&chs='.$size.'&chl='.$qr.'&chco='.$color;
            $data = array(
            "workshop_name" => $this->input->post('workshop_name'),
            "workshop_description" => $this->input->post('workshop_description'),
            "workshop_speaker" => $this->input->post('workshop_speaker'),
            "workshop_date" => $this->input->post('workshop_date'),
            "workshop_time" => $this->input->post('workshop_time'),
            "workshop_venue" => $this->input->post('workshop_venue'),
            "workshop_poster_link" => $this->upload->data('file_name'),
            "workshop_link" => $workshop_link,
            "workshop_qr_link" => $qr_link);
            //Loads the workshop model
            $this->load->model("Workshops_model");
            $this->Workshops_model->insert_workshop($data);
            if($this->db->affected_rows()>0)
            {
                $message = $arrayName = array('success' => 'Event Created');
                $this->load->view('header');
                $this->load->view('new_workshop', $message);
                $this->load->view('footer');
            }
        }
    }

    public function show_workshop($workshop_id)
    {
        $this->load->model("Workshops_model");
        $data['workshop'] = $this->Workshops_model->get_workshop_by_id($workshop_id);
        if(isset($data))
        {
            $this->load->view('header');
            $this->load->view('show_workshop', $data);
            $this->load->view('footer');
        }

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

        else if($workshop_id == 'view_workshops')
        {
            redirect("view_workshops");
        }
    }

    public function show_workshop_by_link($workshop_link)
    {
        $this->load->model("Workshops_model");
        $data['workshop'] = $this->Workshops_model->get_workshop_by_link($workshop_link);
        if(isset($data))
        {
            $this->load->view('header');
            $this->load->view('show_workshop', $data);
            $this->load->view('footer');
        }
    }

    public function add_participants($workshop_id)
    {
        $this->load->model("Workshops_model");
        $data['workshop'] = $this->Workshops_model->get_workshop_by_id($workshop_id);
        if(isset($data))
        {
            $this->load->view('header');
            $this->load->view('add_participants', $data);
            $this->load->view('footer', $data);
        }
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

        else if($workshop_id == 'view_workshops')
        {
            redirect("view_workshops");
        }

        else if($workshop_id == 'certificate_verification')
        {
            redirect("certificate_verification");
        }
    }

    public function show_certificate($certificate_code)
    {
        $this->load->model("Certificates_model");
        $data['certificate_data'] = $this->Certificates_model->get_certificates_by_code($certificate_code);
        if(isset($data))
        {
            $this->load->view('header');
            $this->load->view('show_certificate', $data);
            $this->load->view('footer', $data);
        }
        if($certificate_code == 'manage_workshops')
        {
            redirect("manage_workshops");
        }
        else if($certificate_code == 'add_workshop')
        {
            redirect("add_workshop");
        }
        else if($certificate_code == 'home')
        {
            redirect("home");
        }

        else if($certificate_code == 'view_workshops')
        {
            redirect("view_workshops");
        }

        else if($certificate_code == 'certificate_verification')
        {
            redirect("certificate_verification");
        }

    }
}
