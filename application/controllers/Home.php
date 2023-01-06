<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Estate_model');
		$this->load->helper('especialcharacters');
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
	
		foreach ($cardsEstates as $cardIndex => $estate) {
			$photos = $this->Estate_model->getPhotosFromEstateLimited($estate->rel, 4);
			$extraIcons = $this->Estate_model->getExtrasFromEstateLimited($estate->rel, 4);
			$haveDef= true;
			if(count($photos) > 0){
				foreach($photos as $index => $photo){
					if($photo->def  === "1"){
						$haveDef = false;
					}
				}
				if($haveDef && $photos[0]){
					$photos[0]->def = "1";
				}
			}
			$estate->images = $photos;
			$estate->extraIcons = $extraIcons;
			$cards .=  $this->load->view('components/card', ["cardId" => $cardIndex , "estate" => $estate ], true);
		}
		$navColor = false;
		$this->load->view('head');
		$this->load->view('components/navbar', ["navColor" => $navColor]);
		$this->load->view('home', ["cards" => $cards]);
		$this->load->view('components/footer');
	}
}
