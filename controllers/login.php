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
	public function login_page()
	{
		$this->load->view('include/header_view');
		$this->load->view('include/login_view');
		$this->load->view('include/footer_view');
	}
	public function create_page()
	{
		$this->load->view('include/header_view');
		$this->load->view('include/create_view');
		$this->load->view('include/footer_view');
	}
	public function content_page()
	{
		$this->load->view('include/header_view');
		$this->load->view('include/content_view');
		$this->load->view('include/footer_view');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */