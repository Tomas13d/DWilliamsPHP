<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Estate_model');
	}

	public function index()
	{
		$result = $this->Estate_model->get_active_estate_rent();
		$cards =  "";
		foreach ($result as $index => $estate) {

			$cards .=  $this->load->view('components/card', ["cardId" => $index, "estate" => $estate ], true);
		}

		$this->load->view('head');
		$this->load->view('components/navbar');
		$this->load->view('home', ["cards" => $cards]);
		$this->load->view('components/footer');
	}
}
