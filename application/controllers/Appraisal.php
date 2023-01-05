<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appraisal extends CI_Controller {
	public function index()
	{
		$navColor = false;
		$this->load->view('head');
		$this->load->view('components/navbar', ["navColor" => $navColor]);
        $this->load->view('appraisal');
        $this->load->view('components/footer');
	}
}
