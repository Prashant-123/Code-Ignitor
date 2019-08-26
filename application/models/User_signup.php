<?php

class User_signup extends CI_Model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();        
    }

    public function insert_student($name, $email, $password) {

        $data = array(
            "email" => $email,
            "password" => $password,
            "name" => $name
        );

        $this->db->insert('students', $data);

        if ($this->db->affected_rows() > 0) {
            return "Success";
        } else
            return "SignUp Failed";
    }
}

?>