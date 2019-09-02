<?php

class Login_model extends CI_Model
{

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	public function login($email, $password)
	{
		$sql = "SELECT * FROM students WHERE email = ? AND password = ?";

		$result = $this->db->query($sql, array($email, $password))->result();

		return $result;
	}
}
