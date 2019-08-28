<?php 
class Login extends CI_controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('login_model');
	}

	public function index() {
		if(get_cookie('is_logged_in')) redirect(base_url() . "dashboard");
		else $this->load->view('pages/login');
	}	

	public function Authenticate() {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			echo ($this->login_model->login($email, $password));
	}

	public function logout() {
		delete_cookie('email'); delete_cookie('password'); delete_cookie("is_logged_in");
		redirect(base_url());
	}
}