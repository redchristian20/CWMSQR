<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
	public function index()
	{
		$data['users'] = $this->showUsers();
		$this->load->view('home',$data);
	}

	//this function is to show users 
	public function showUsers()
	{
		$this->load->model("user");
		$users = $this->user->get_all_users();
		return $users;
	}

    public function adduser()
    {
		$this->load->view('add');
    }

	public function add()
	{
		$password = $this->input->post('password');
		$salt = bin2hex(openssl_random_pseudo_bytes(22));
		$encrypted_password = md5($password . '' . $salt);
		$this->load->model("user");
		$user_details = array("lastname" => $this->input->post('last_name'),"firstname" => $this->input->post('first_name'),"middlename" => $this->input->post('middle_name'), "email" => $this->input->post('email'), "password" => $encrypted_password, "salt" => $salt);
		$add_user = $this->user->add_user($user_details);
		if($add_user) {
			redirect("/");
		}
	}


	public function show($id)
	{
		$this->load->model("user");
		$data['user'] = $this->user->get_user_by_id($id);
		if($data['user'])
		{
			$this->load->view('show',$data);
		}else{
			redirect("/");
		}
	}

	public function edit_user($id)
	{
		$this->load->model("user");
		$data['user'] = $this->user->get_user_by_id($id);
		if($data['user'])
		{
			$this->load->view('edit',$data);
		}else{
			redirect("/");
		}
	}

	public function edit($id)
	{
		$this->load->model("user");
		$user_details = array("lastname" => $this->input->post('last_name'),"firstname" =>$this->input->post('first_name'),"middlename" =>$this->input->post('middle_name'),"email" =>$this->input->post('email'),'id'=>$id);
		$edit_user = $this->user->edit_user($user_details);
		if($edit_user) {
			redirect("/");
		}else{
			"FAILED";
		}
	}

	public function remove($id)
        {
            $this->load->model("user");
            $deleteUser = $this->user->delete_user($id);
            if($deleteUser)
            {
                redirect('/');
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
