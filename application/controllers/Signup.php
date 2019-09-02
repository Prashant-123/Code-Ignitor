<?php

class Signup extends CI_Controller
{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('user_signup');
	}

	public function index()
	{
		$this->load->view('pages/signup');
	}

	public function submit()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			"email" => $email,
			"password" => $password,
			"name" => $name
		);

		$response = $this->user_signup->insert_student($data);

		print_r($response);

	}
}
