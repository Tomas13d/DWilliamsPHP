<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {
	public function index()
	{
		$navColor = false;
		$this->load->view('head');
		$this->load->view('components/navbar', ["navColor" => $navColor]);
        $this->load->view('aboutUs');
        $this->load->view('components/footer');
	}
}
