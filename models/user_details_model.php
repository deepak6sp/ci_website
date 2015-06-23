<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_details_model extends CI_Controller {

	function insert(){
		$data=array(
			'email' => '$this->input->post('email')',
			'uname' => '$this->input->post('uname')',
			'password' => '$this->input->post('password')'
			);
		$this->db->insert('user_details', $data); 

	}
	
}