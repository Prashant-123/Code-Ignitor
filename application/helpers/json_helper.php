<?php

function json_encode_response($response)
{
	return json_encode($response);
}

function logout()
{

	$CI =& get_instance();

	delete_cookie('email');
	delete_cookie('password');
	delete_cookie("is_logged_in");

	$CI->load->library('session');
	$CI->session->sess_destroy();

	redirect(base_url());
}

