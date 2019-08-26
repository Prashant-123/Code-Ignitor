<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();        
    }

    public function login($email, $password) {
        $this->db->select('password');
        $this->db->from('students');
        $this->db->where('email', $email);
        return $this->db->get()->row('password') == $password;
    }

    public function test() {
        echo json_encode($this->db->query('SELECT * FROM students')->result_array());
    }
}

?>