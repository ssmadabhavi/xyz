<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_m extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
	}
	
	public function insert_customer($data)
	{
		
		return $this->db->insert('customer', $data);
		
	}
	
}

?>
