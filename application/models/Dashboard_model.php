<?php

class Dashboard_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    public function get_data($email, $password) {
        $query = $this->db->query('SELECT * FROM students WHERE email = ? AND password = ?', array($email, $password) );

        if($query->row() == null) {
			delete_cookie('email'); delete_cookie('password'); delete_cookie("is_logged_in");
		}
        header('Content-type: application/json');

        return json_encode($query->row());
    }

}

?>
