<?php 
class Login extends CI_controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('login_model');
	}

	public function index() {
		if(get_cookie('email') && get_cookie('pass')) redirect(base_url() . "dashboard");
		$this->load->view('pages/login');
	}

	public function Authenticate() {
		if($this->input->post('submit')) { //
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($this->login_model->login($email, $password)) {
				$this->input->set_cookie('email', $email, 86400);
				$this->input->set_cookie('pass', $password, 86400);

				redirect(base_url() . "dashboard");	
				
			} else echo "WRONG PASSWORD";
		} else "Invalid Form";
	}

	public function logout() {
		delete_cookie('email'); delete_cookie('pass');
		redirect(base_url());
	}
}