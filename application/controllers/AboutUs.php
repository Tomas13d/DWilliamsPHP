<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {
	public function index()
	{
		$this->load->view('head');
		$this->load->view('navbar');
        $this->load->view('aboutUs');
        $this->load->view('footer');
	}
}
