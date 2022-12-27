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
		$url = $_SERVER['REQUEST_URI'];
		$query = parse_url($url, PHP_URL_QUERY);
		$splited = preg_split("/[&]/", $query);
		$queryString = array();
		foreach ($splited as $index => $oneQuery) {
			if ($oneQuery !== "") {
				$oneQuerySplited = preg_split("/[=]/", $oneQuery);
				$queryString[$oneQuerySplited[0]] = preg_split("/[+]/", $oneQuerySplited[1]);
			}
		}

		foreach ($queryString as $i => $arrayValues) {
			$newArray = array();
			foreach ($arrayValues as $index => $value) {
				if ($value !== "") {
					array_push($newArray, $value);
				}
			}
			$queryString[$i] = $newArray;
		}


		if ($queryString && array_key_exists("categoryRel",$queryString)) {
			$estateSubtypes = $this->Estate_model->getEstateSubtypes($queryString["categoryRel"]);
		} else {
			$estateSubtypes = $this->Estate_model->getEstateSubtypes(0);
		}
		$subtypes = array();
		foreach ($estateSubtypes as $index => $subcategorie) {
			$category = $this->Estate_model->getSingleEstateType($subcategorie->categoryRel);
			$subcategorie->categoryName = $category->name;
			if (array_key_exists($subcategorie->categoryName, $subtypes)) {
				array_push($subtypes[$subcategorie->categoryName], $subcategorie);
			} else {
				$subtypes[$subcategorie->categoryName] = [];
			}
		}

		$estateTypes = $this->Estate_model->getEstateTypes();
		$filterEstates = $this->Estate_model->dinamicRequestFilter($queryString);
		$filterEstatesComplet = "";
		foreach ($filterEstates as $index => $estate) {
			$photos = $this->Estate_model->getPhotosFromEstateLimited($estate->rel, 4);
			$extraIcons = $this->Estate_model->getExtrasFromEstateLimited($estate->rel, 4);
			$estate->images = $photos;
			$estate->extraIcons = $extraIcons;
			
			$filterEstatesComplet .=  $this->load->view('components/card', ["cardId" => $index, "estate" => $estate ], true);
		}
		
		$this->load->view('head');
		$this->load->view('components/navbar');
		$this->load->view('filterSystem', ["estateTypes" => $estateTypes, "estateSubtypes" => $subtypes, "filterEstates" => $filterEstatesComplet]);
		$this->load->view('components/footer');
	}
}
