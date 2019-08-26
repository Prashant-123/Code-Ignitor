<?php 
class Login extends CI_controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('login_model');
	}

	public function index() {
		if(get_cookie('email') || get_cookie('password')) redirect(base_url() . "dashboard");
		$this->load->view('pages/login');
	}	

	public function Authenticate() {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			echo ($this->login_model->login($email, $password));
	}

	public function logout() {
		delete_cookie('email'); delete_cookie('pass');
		redirect(base_url());
	}
}