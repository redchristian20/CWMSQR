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
        $this->load->view('workshops');
        $this->load->view('footer');
	}

    public function add_workshop()
    {
        $this->load->view('header');
        $this->load->view('add_workshop', array('error' => ' ' ));
        $this->load->view('footer');
    }

    /*
    public function qrgenerate()
	{
		$qrcode['red'] = false;
		if(isset($_POST['submit'])){
			$qrcode['red'] = true;
			$size = "200x200";
			$color = str_replace('#','','black');
			$password = $_POST['password'];
			$salt = bin2hex(openssl_random_pseudo_bytes(22));
			$encrypted_password = md5($password . '' . $salt);
			$data = $encrypted_password;
			$qr = 'https://chart.googleapis.com/chart?cht=qr&chs='.$size.'&chl='.$data.'&chco='.$color;
			$qrcode['qr'] = $qr;
			$this->load->view('main',$qrcode);
		}
    }*/

    public function add_workshop_to_database()
    {
        //function to upload files
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('confirm_workshop', $error);
        }
        else
        {
            $size = "200x200";
            $color = str_replace('#','','black');
            $data = "sheesh";
            $qr = 'https://chart.googleapis.com/chart?cht=qr&chs='.$size.'&chl='.$data.'&chco='.$color;
            $data = array('upload_data' => $this->upload->data(), 'qr' => $qr, "workshop_name" => $this->input->post('workshop_name'), "workshop_description" => $this->input->post('workshop_description'),"venue" => $this->input->post('venue'),"start_date" => $this->input->post('start_date'), "end_date" => $this->input->post('end_date'), "start_time" => $this->input->post('start_time'), "end_time" => $this->input->post('end_time'));
            //$this->load->view('confirm_workshop', $data);
        }

        
        //Loads the form validation library
        $this->load->library("form_validation");

        $this->form_validation->set_rules("workshop_name", "Workshop name", "trim|required");
        $this->form_validation->set_rules("workshop_description", "Workshop description", "trim|required");
        $this->form_validation->set_rules("venue", "Venue", "trim|required");
        $this->form_validation->set_rules("workshop_date", "Workshop date", "trim|required");
        $this->form_validation->set_rules("start_time", "Start time", "trim|required");
        $this->form_validation->set_rules("end_time", "End time", "trim|required");

        if($this->form_validation->run() === FALSE)
        {
            $this->view_data["errors"] = validation_errors();
            $data['errors'] = $this->view_data["errors"];
            $this->load->view('header');
            $this->load->view('add_workshop',$data);
            $this->load->view('footer');
        }
        else
        {
            //Loads the user model
            $this->load->model("workshop");
            $workshop_details = array("workshop_name" => $this->input->post('workshop_name'), "workshop_description" => $this->input->post('workshop_description'),"venue" => $this->input->post('venue'),"start_date" => $this->input->post('start_date'),"end_date" => $this->input->post('end_date'), "start_time" => $this->input->post('start_time'), "end_time" => $this->input->post('end_time'),"event_poster_link" => $this->input->post('event_poster_link'),"qr_code_link" => $this->input->post('qr_code_link'));
            $add_workshop = $this->workshop->add_workshop($workshop_details);
            if($workshop_details) {
                redirect("/");
            }
        }
    }

    public function workshops()
    {

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
        $data['workshop'] = $this->workshop->get_workshop_by_id($workshop_id);
        if(!empty($data))
        {
            $this->load->view('header');
            $this->load->view('show_workshop',$data);
            $this->load->view('footer');
        }

        if($workshop_id == 'home')
        {
            redirect("home");
        }
        if($workshop_id == 'workshops')
        {
            redirect("workshops");
        }
        if($workshop_id == 'add_workshop')
        {
            redirect("add_workshop");
        }
        if($workshop_id == 'about')
        {
            redirect("about");
        }
        if($workshop_id == 'login')
        {
            redirect("login");
        }
        if($workshop_id == 'register')
        {
            redirect("register");
        }
        if($workshop_id == 'profile')
        {
            redirect("profile");
        }
        if($workshop_id == 'certificates')
        {
            redirect("certificates");
        }
    }
}
