<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome3 extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct()
	 {
		 parent::__construct();
		// $this->load->helper('html');
		 echo "Hello Construct";
	 }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function hello3(){
		$this->load->view('Showhello3');
	}
	public function getform(){
		$this->load->view('viewform');
	}
	public function send(){
		$data ['uname']= $this->input->post('username');
		$data ['uemail'] = $this->input->post('myemail');
		$this->load->view('displayview',$data);
	}
}
