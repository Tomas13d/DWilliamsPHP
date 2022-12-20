<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FilterSystem extends CI_Controller {
	public function index()
	{
		$this->load->view('head');
		$this->load->view('components/navbar');
        $this->load->view('filterSystem');
        $this->load->view('components/footer');
	}
}
