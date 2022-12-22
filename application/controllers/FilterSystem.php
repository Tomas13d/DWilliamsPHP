<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FilterSystem extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Estate_model');
	}




	public function index()
	{
		$estateTypes = $this->Estate_model->getEstateTypes();
		$estateSubtypes = $this->Estate_model->getEstateSubtypes(2);
		/*   echo json_encode($estateSubtypes, JSON_PRETTY_PRINT); exit; */  

		$this->load->view('head');
		$this->load->view('components/navbar');
		$this->load->view('filterSystem', ["estateTypes" => $estateTypes, "estateSubtypes" => $estateSubtypes ]);
		$this->load->view('components/footer');
	}
}
