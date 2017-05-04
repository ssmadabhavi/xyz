<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
	}
	
	public function home_page()
	{		
		$this->load->view('add');
	}
	
	public function insert_cust()
	{	
		
		
		$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'address' => $this->input->post('address')
		);
		
		$this->load->model('Add_m');
		$result = $this->Add_m->insert_customer($data);
		
		$query = $this->db->get('customer');
		$res['customer'] = $query->result_array();
		
		if($result)
		{
			$this->load->view('show', $res);
		} 
		else
		{
			$this->load->view('add');
		}
	}
}
