<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndividualDev extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Estate_model');
		$this->load->helper('especialcharacters');
	}
	
	public function index()
	{
		$url = $_SERVER['REQUEST_URI'];
		$development = substr(parse_url($url, PHP_URL_QUERY), 11);

		// altos del cerro
		$altosDelCerro = (object)[
			"title" => "Altos del Cerro",
			"description" => "A solo 5 minutos de la ciudad con ágil acceso por
			autopistas y vista panorámica a las sierras.
			Actualmente este desarrollo de 35 lotes se a convertido en una avanzada zona residencial y
			foco urbanístico.",
			"images" => array("Altos1", "Altos2", "Altos3", "Altos4","Altos5","Altos6","Altos7"),
			'details' => array(
				(object)["name" => "35 Lotes", "icon" => "fa-solid fa-sign-hanging"],
				(object)["name" => "Facil Acceso", "icon" => "fa-solid fa-car-on"],
				(object)["name" => "Agua", "icon" => "fa-solid fa-faucet-drip"],
				(object)["name" => "Gas Natural", "icon" => "fa-solid fa-fire-burner"],
				(object)["name" => "Luz", "icon" => "fa-solid fa-plug-circle-check"],
				(object)["name" => "Barrio Semicerrado", "icon" => "fa-solid fa-building-shield"],
				(object)["name" => "Vista Panoramica", "icon" => "fa-solid fa-panorama"],
			),
			'direction' => "Dr. Bernardo Houssay 430",
			"city" => "San Luis",
			'zone' => "Al lado de B. Los Quebrachos y de B. Cerros del Sol",
			"coordinates" => "-33.2823662,-66.2955979"
		];
		

		// Villa magdalena
		$villaMagdalena = (object)[
			"title" => "Villa Magdalena",
			"description" => "A solo 5 minutos de la ciudad con ágil acceso por
			autopistas y vista panorámica a las sierras.
			Actualmente este desarrollo de 35 lotes se a convertido en una avanzada zona residencial y
			foco urbanístico.",
			"images" => array("villa1", "villa2", "villa3", "villa4","villa5","villa6","villa7","villa8","villa9","villa10"),
			'details' => array(
				(object)["name" => "Facil Acceso", "icon" => "fa-solid fa-car-on"],
				(object)["name" => "Agua", "icon" => "fa-solid fa-faucet-drip"],
				(object)["name" => "Gas Natural", "icon" => "fa-solid fa-fire-burner"],
				(object)["name" => "Luz", "icon" => "fa-solid fa-plug-circle-check"],
				(object)["name" => "Zona Residencial", "icon" => "fa-solid fa-house-user"],
				(object)["name" => "Vista Panoramica", "icon" => "fa-solid fa-panorama"],
				(object)["name" => "Espacios Verdes", "icon" => "fa-solid fa-sun-plant-wilt"],
			),
			'direction' => "Los Paraísos",
			"city" => "San Luis",
			'zone' => "Potrero de Los Funes",
			"coordinates" => "-33.2167693,-66.2335363"
		];
		
		// small card advertaising
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
		$navColor = false;
		$this->load->view('head');
		$this->load->view('components/navbar', ["navColor" => $navColor]);
        $this->load->view('individualDev', ["smallCards" => $smallcards, "singleDevelopment" => $development === "altos-del-cerro" ? $altosDelCerro : $villaMagdalena ]);
        $this->load->view('components/footer');
	}
}