<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class workshop_main extends CI_Controller {
	public function index()
	{
		$data['workshops'] = $this->showWorkshops();
		$this->load->view('workshop_home',$data);
	}

	//this function is to show users 
	public function showWorkshops()
	{
		$this->load->model("workshop");
		$workshops = $this->workshop->get_all_workshops();
		return $workshops;
	}

  public function remove($id)
	{
			$this->load->model("workshop");
			$deleteWorkshop = $this->workshop->delete_workshop($id);
			if($deleteWorkshop)
			{
					redirect('/');
			}
	}

  public function add_workshop()
  {
    $this->load->view('add_workshop');
  }

  public function add_workshop_to_database()
  {
		$this->load->model("workshop");
		$workshop_details = array("workshop_name" => $this->input->post('workshop_name'),"workshop_description" => $this->input->post('workshop_description'),"certification_type" => $this->input->post('certification_type'), "venue" => $this->input->post('venue'),"training_time" => $this->input->post('training_time'),"training_hours" => $this->input->post('training_hours'));
		$add_workshop = $this->workshop->add_workshop($workshop_details);
		if($add_workshop) {
			redirect("/");
		}
  }


}
