<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->login_system();
	}
	public function login_system()
	{
		$this->load->view('include/header_view');
		$this->load->view('include/main_view');
		$this->load->view('include/footer_view');
	}
	public function echo_text(){
		echo "i am here";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */