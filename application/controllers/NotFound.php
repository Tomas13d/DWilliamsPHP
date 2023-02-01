<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {
    public function __construct() 
    {
       parent::__construct(); 
    } 
    
	public function index()
	{
        $navColor = true;
        $baseURL = base_url("/");
        $this->output->set_status_header('404'); 
		$this->load->view('head');
		$this->load->view('components/navbar', ["navColor" => $navColor]);
        $this->load->view('notFound');
        $this->load->view('components/footer');
	}
}
