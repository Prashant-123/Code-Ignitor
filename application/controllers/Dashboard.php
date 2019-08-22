<?php

class Dashboard extends CI_controller {

    public function index() {

        if(get_cookie('email') && get_cookie('pass')) {
            $data['email'] = get_cookie('email');
            $data['password'] = get_cookie('pass');

            $this->load->view('pages/dashboard', $data);

        } else {
            redirect(base_url() . "login");
        }        
    }
}

?>