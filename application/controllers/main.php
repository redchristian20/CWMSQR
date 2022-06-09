<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

    //Function that loads the homepage
	public function index()
	{
		$this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
	}

    //Function that loads the register page
    public function register()
    {
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }

    
    //Function that inserts the user to the database
    public function register_user()
    {
        //TODO add form validation
        //Loads the form validation library
        $this->load->library("form_validation");

        $this->form_validation->set_rules("username", "Username", "trim|required");
        $this->form_validation->set_rules("honorific", "Honorific", "trim|alpha");
        $this->form_validation->set_rules("lastname", "Last name", "trim|required|alpha");
        $this->form_validation->set_rules("firstname", "First name", "trim|required|alpha");
        $this->form_validation->set_rules("middlename", "Middle name", "trim|required|alpha");
        $this->form_validation->set_rules("suffix", "Suffix", "trim|alpha");
        $this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
        $this->form_validation->set_rules("contact_number", "Contact number", "trim|required|numeric");
        $this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]|max_length[20]");
        $this->form_validation->set_rules("confirm_password", "Confirm password", "trim|required|matches[password]");

        if($this->form_validation->run() === FALSE)
        {
            $this->view_data["errors"] = validation_errors();
            $data['errors'] = $this->view_data["errors"];
            $this->load->view('register',$data);
        }
        else
        {
            //codes to run on success validation here
            echo "success";
            //Creates the salt to encrypt password
            $salt = bin2hex(openssl_random_pseudo_bytes(22));
            $encrypted_password = md5($this->input->post('password') . '' . $salt);
            //Loads the user model
            $this->load->model("user");
            $user_details = array("username" => $this->input->post('username'), "honorific" => $this->input->post('honorific'),"lastname" => $this->input->post('lastname'),"firstname" => $this->input->post('firstname'),"middlename" => $this->input->post('middlename'), "suffix" => $this->input->post('suffix'), "email" => $this->input->post('email'), "contact_number" => $this->input->post('contact_number'), "password" => $encrypted_password, "salt" => $salt);
            $add_user = $this->user->add_user($user_details);
            if($add_user) {
                redirect("/");
            }
        }  
    }


    public function login()
    {
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function login_user()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model("user");

        $getuser = $this->user->get_user_by_username($username);
        if(!empty($getuser))
        {
            $encrypted_password = md5($password . '' . $getuser['salt']);
            if($getuser['password'] == $encrypted_password)
            {
                //this means we have a successful login!
                echo "success";
            }
            else
            {
                //invalid password!
                echo "invalid password";
            } 
        }
        else
        {
            echo "Username does not exist";
        }
    }


    public function add_workshop()
    {
        $this->load->view('header');
        $this->load->view('add_workshop');
        $this->load->view('footer');
    }

    public function add_workshop_to_database()
    {
        //TODO add form validation
        //Loads the form validation library
        $this->load->library("form_validation");

        $this->form_validation->set_rules("workshop_name", "Workshop name", "trim|required");
        $this->form_validation->set_rules("workshop_description", "Workshop description", "trim|alpha");
        $this->form_validation->set_rules("certificate_type", "Certificate type", "trim|required|alpha");
        $this->form_validation->set_rules("venue", "Venue", "trim|required|alpha");
        $this->form_validation->set_rules("workshop_date", "Workshop date", "trim|required|alpha");
        $this->form_validation->set_rules("start_time", "Start time", "trim|alpha");
        $this->form_validation->set_rules("end_time", "End time", "trim|required|valid_email");

        if($this->form_validation->run() === FALSE)
        {
            $this->view_data["errors"] = validation_errors();
            $data['errors'] = $this->view_data["errors"];
            $this->load->view('add_workshop',$data);
        }
        else
        {
            //Loads the user model
            $this->load->model("workshop");
            $workshop_details = array("workshop_name" => $this->input->post('workshop_name'), "workshop_description" => $this->input->post('workshop_description'),"certificate_type" => $this->input->post('certificate_type'),"venue" => $this->input->post('venue'),"workshop_date" => $this->input->post('workshop_date'), "start_time" => $this->input->post('start_time'), "end_time" => $this->input->post('end_time'));
            $add_workshop = $this->workshop->add_workshop($workshop_details);
            if($workshop_details) {
                redirect("/");
            }
        }  
    }
}
