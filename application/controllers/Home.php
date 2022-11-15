<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$cards =  "";
		 for($i = 1; $i<=8 ; $i++) { 
			$cards .=  $this->load->view('components/card', ["cardId" => $i ], true);
		 }
		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('home', ["cards" => $cards]);
		$this->load->view('footer');
	}
}
