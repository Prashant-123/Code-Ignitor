<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();        
    }

    public function login($email, $password) {

        $success = FALSE;
        $message = "";
        $url = "";

        header('Content-type: application/json');

        $sql = "SELECT password FROM students WHERE email = ?";
        $result = $this->db->query($sql, array($email))->result();

        if(sizeof($result) == 0) {
            $success = FALSE;
            $message = 'User doesn\'t exist';
        } else {
            if($result[0]->password == $password) {
                $success = TRUE;
                $message = "User Exists";
                $url = "dashboard";

                set_cookie("email", $email, 3600);
                set_cookie("password", $password, 3600);
                set_cookie("is_logged_in", TRUE, 3600);
                
            } else {
                $success = FALSE;   
                $message = "Authentication Failed";
                }
        }
        return json_encode([
            "success" => $success,
            "message" => $message,
            "url" => $url
        ]);
    }
}

?>