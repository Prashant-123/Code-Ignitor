<?php


class MY_Controller extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}

	function _view($view = 'login', $data = false) {
		$this->load->view($view, $data);
	}

	function _model($model) {
		$this->load->model($model);
	}
}
?>
