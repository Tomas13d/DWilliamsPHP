<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Estate_model');
	}

	public function index()
	{
		$estatesInRent = $this->Estate_model->getActiveEstatesInRentLimited(8);
		$estatesForSale = array();
		if(count($estatesInRent) < 8) {
			$estatesForSale = $this->Estate_model->getActiveEstatesForSaleLimited(8-count($estatesInRent));
		}
		$cardsEstates = array_merge($estatesInRent, $estatesForSale);
		$cards = "";
	
		foreach ($cardsEstates as $index => $estate) {
			$photos = $this->Estate_model->getPhotosFromEstateLimited($estate->rel, 4);
			$extraIcons = $this->Estate_model->getExtrasFromEstateLimited($estate->rel, 4);
			$estate->images = $photos;
			$estate->extraIcons = $extraIcons;
			$cards .=  $this->load->view('components/card', ["cardId" => $index, "estate" => $estate ], true);
		}
		$this->load->view('head');
		$this->load->view('components/navbar');
		$this->load->view('home', ["cards" => $cards]);
		$this->load->view('components/footer');
	}
}
