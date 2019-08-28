<?php

class Dashboard extends CI_controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('dashboard_model');
    }

    public function index() {

        if(get_cookie('is_logged_in') && get_cookie('email') && get_cookie('password')) {

            $this->load->view('pages/dashboard');

        } else {
            redirect(base_url() . "login");
        }        
    }

    public function get_data() {

        $email = get_cookie('email');
        $password = get_cookie('password');

        $response = $this->dashboard_model->get_data($email, $password);

        echo $response;
    }
}

?>