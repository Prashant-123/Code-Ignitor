<?php 
class Login extends MY_Controller {

	public function __construct() {
		parent:: __construct();
		$this->_model('login_model');
	}

	public function index() {
		if(get_cookie('is_logged_in') == TRUE) redirect(base_url() . "dashboard");
		else $this->_view('pages/login');
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

