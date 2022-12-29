<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {
    public function __construct() 
    {
       parent::__construct(); 
    } 
	public function index()
	{
        $baseURL = base_url("/");
        header("Refresh: 3; URL=$baseURL");
        $this->output->set_status_header('404'); 
		$this->load->view('head');
		$this->load->view('components/navbar');
        $this->load->view('notFound');
        $this->load->view('components/footer');
	}
}
