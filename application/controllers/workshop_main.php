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





	/*QR CODE GENERATION TODO
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
	}
	*/


}
