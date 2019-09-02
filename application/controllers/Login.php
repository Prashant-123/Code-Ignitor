<?php

class Login extends MY_Controller
{

	public function __construct()
	{
		parent:: __construct();
		$this->_model('login_model');
	}

	public function index()
	{
		if (get_cookie('is_logged_in') == TRUE) redirect(base_url() . "dashboard");
		else $this->_view('pages/login');
	}

	public function authenticate()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$response = $this->login_model->login($email, $password);

		$success = FALSE;
		$message = "";
		$url = "";

		if (sizeof($response) == 0) {
			$success = FALSE;
			$message = 'User doesn\'t exist';
		} else {
			if ($response[0]->password == $password) {
				$success = TRUE;
				$message = "User Exists";
				$url = "dashboard";

				$this->load->library('session');
				$this->session->set_userdata('user_id', $response[0]->id);

				set_cookie("email", $email, 3600);
				set_cookie("password", $password, 3600);
				set_cookie("is_logged_in", TRUE, 3600);

			} else {
				$success = FALSE;
				$message = "Authentication Failed";
			}
		}

		header("Content-type: application/json");

		print_r(json_encode(array(
			"success" => $success,
			"message" => $message,
			"url" => $url
		)));


	}

	public function logout()
	{
		delete_cookie('email');
		delete_cookie('password');
		delete_cookie("is_logged_in");

		$this->load->library('session');
		$this->session->sess_destroy();

		redirect(base_url());
	}
}

