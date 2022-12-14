<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndividualDev extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Estate_model');
	}
	
	public function index()
	{
		$estatesInRent = $this->Estate_model->getActiveEstatesInRentLimited(3);
		$estatesForSale = array();
		if(count($estatesInRent) < 3) {
			$estatesForSale = $this->Estate_model->getActiveEstatesForSaleLimited(3-count($estatesInRent));
		}
		$cardsEstates = array_merge($estatesInRent, $estatesForSale);
		$smallcards = "";
	
		foreach ($cardsEstates as $index => $estate) {
			$photos = $this->Estate_model->getPhotosFromEstateLimited($estate->rel, 4);
			$extraIcons = $this->Estate_model->getExtrasFromEstateLimited($estate->rel, 2);
			$estate->images = $photos;
			$estate->extraIcons = $extraIcons;
			$smallcards .=  $this->load->view('components/smallcard', ["cardId" => $index, "estate" => $estate ], true);
		}
		$this->load->view('head');
		$this->load->view('components/navbar');
        $this->load->view('individualDev', ["smallCards" => $smallcards]);
        $this->load->view('components/footer');
	}
}
