<?php

class User_signup extends CI_Model
{

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->helper('json_helper');
	}

	public function insert_student($data)
	{

		$this->db->insert('students', $data);

		return ($this->db->affected_rows() > 0);
	}
}


