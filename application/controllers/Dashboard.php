<?php

class Dashboard extends CI_controller
{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('dashboard_model');
	}

	public function index()
	{

		if (get_cookie('is_logged_in') && get_cookie('email') && get_cookie('password')) {

			$this->load->view('pages/dashboard');

		} else {
			redirect(base_url() . "login");
		}
	}

	public function get_data()
	{
		$this->load->helper('json_helper');

		$email = get_cookie('email');
		$password = get_cookie('password');

		if (isset($email) && isset($password)) {
			$response = $this->dashboard_model->get_data($email, $password);
			echo json_encode_response($response);
		} else {
			echo "Cookie Error, Login Again";
		}

	}
}
