<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndividualProp extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Estate_model');
	}
	

	public function index()
	{
		$url = $_SERVER['REQUEST_URI'];
		$estateRel = number_format(substr(parse_url($url, PHP_URL_QUERY), 7, 3));

		$individualEstate = $this->Estate_model->getSingleEstateActive($estateRel);
		$contactInfo = $this->Estate_model-> getAboutInfo();
		$estatesInRent = $this->Estate_model->getActiveEstatesInRentLimited(3);
		$estatesForSale = array();
		if(count($estatesInRent) < 3) {
			$estatesForSale = $this->Estate_model->getActiveEstatesForSaleLimited(3-count($estatesInRent));
		}
		$cardsEstates = array_merge($estatesInRent, $estatesForSale);
		$smallcards = "";
		foreach ($cardsEstates as $index => $estate) {
			$photos = $this->Estate_model->getPhotosFromEstateLimited($estate->rel, 1);
			$extraIcons = $this->Estate_model->getExtrasFromEstateLimited($estate->rel, 1);
			$estate->images = $photos;
			$estate->extraIcons = $extraIcons;
			$smallcards .=  $this->load->view('components/smallcard', ["cardId" => $index, "estate" => $estate ], true);
		}
		$navColor = false;
		$this->load->view('head');
		$this->load->view('components/navbar', ["navColor" => $navColor]);
        $this->load->view('individualProp', ["smallCards" => $smallcards, "individualEstate" => $individualEstate, "contactInfo" => $contactInfo]);
        $this->load->view('components/footer');
	}
}