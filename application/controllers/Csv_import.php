<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Csv_import extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('csv_import_model');
		$this->load->library('csvimport');
	}

	function load_data($workshop_id)
	{
		$result = $this->csv_import_model->select($workshop_id);
		$output = '
		 	<h3>Participants</h3>
        	<div class="table-responsive">
        	<table class="table table-bordered table-striped">
        		<tr>
        			<th>Sr. No</th>
        			<th>First Name</th>
        			<th>Last Name</th>
        			<th>Phone</th>
        			<th>Email Address</th>
        		</tr>
		';
		$count = 0;
		if($result->num_rows() > 0)
		{
			foreach($result->result() as $row)
			{
				$output .= '
				<tr>
					<td>'.$row->id.'</td>
					<td>'.$row->first_name.'</td>
					<td>'.$row->last_name.'</td>
					<td>'.$row->phone.'</td>
					<td>'.$row->email.'</td>
				</tr>
				';
			}
		}
		else
		{
			$output .= '
			<tr>
	    		<td colspan="5" align="center">Data not Available</td>
	    	</tr>
			';
		}
		$output .= '</table></div>';
		echo $output;
	}

	function import($workshop_id)
	{
		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		$insertid = 0;
		foreach($file_data as $row)
		{
			$size = "250x250";
			$color = str_replace('#','','black');
			$participant_code = uniqid($insertid++);
			$qr = base_url().'show_certificate/'.$participant_code;
			$qr_link = 'https://chart.googleapis.com/chart?cht=qr&chs='.$size.'&chl='.$qr.'&chco='.$color;
			$data[] = array(
				'first_name'	=>	$row["First Name"],
        		'last_name'		=>	$row["Last Name"],
        		'phone'			=>	$row["Phone"],
        		'email'			=>	$row["Email"],
				'workshop_id'	=>	$workshop_id,
				'participant_qr'=> 	$qr_link,
				'participant_code'=> 	$participant_code,
				'created_at' 	=> 	date("Y-m-d, H:i:s"),
				'updated_at'	=> 	date("Y-m-d, H:i:s")
			);
		}
		$this->csv_import_model->insert($data);
	}
	
		
}
