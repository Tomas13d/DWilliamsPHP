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
		
		/* handle the url query string */
		$url = $_SERVER['REQUEST_URI'];
		$query = parse_url($url, PHP_URL_QUERY);
		$perPageLimit = array();
		$splited = preg_split("/[&]/", $query);
		$queryString = array();
		foreach ($splited as $index => $oneQuery) {
			if( !(strpos($oneQuery,"_page="))){
				if ($oneQuery !== "") {
					$oneQuerySplited = preg_split("/[=]/", $oneQuery);
					$queryString[$oneQuerySplited[0]] = preg_split("/[+]/", $oneQuerySplited[1]);
				}
			} else {
				$perPageLimit = preg_split("/[=]/", $oneQuery);
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

		/* handle the subcategories depends of the category */
		if ($queryString && array_key_exists("categoryRel",$queryString)) {
			$estateSubtypes = $this->Estate_model->getEstateSubtypes($queryString["categoryRel"]);
		} else {
			$estateSubtypes = $this->Estate_model->getEstateSubtypes(0);
		}
		$subtypes = array();

		/* creating an array with the category,subcategory and options */
		foreach ($estateSubtypes as $index => $subcategorie) {
			$category = $this->Estate_model->getSingleEstateType($subcategorie->categoryRel);
			$subcategorie->categoryName = $category->name;
			if (array_key_exists($subcategorie->categoryName, $subtypes)) {
				array_push($subtypes[$subcategorie->categoryName], $subcategorie);
			} else {
				$subtypes[$subcategorie->categoryName] = [];
			}
		}

		/* requests categories and filtered Estates */
		
		$estateTypes = $this->Estate_model->getEstateTypes();
		$filterEstates = $this->Estate_model->dinamicRequestFilter($queryString);

	/* handle pagination, results amount */
	$limit = 15;
	$filterEstatesCount = count($filterEstates);
	$this->load->library('pagination');

	$config['base_url'] = base_url("/filterSystem");
	$config['total_rows'] = $filterEstatesCount;
	$config['per_page'] = $limit;
	$config['page_query_string'] = TRUE;
	$config['enable_query_strings'] = TRUE;
	$config['reuse_query_string'] = TRUE;
	$config['cur_tag_open'] = '<b class="current">';
	$config['cur_tag_close'] = '</b>';
	$config['num_tag_open'] = '<div class="digit">';
	$config['num_tag_close'] = '</div>';
	$config['next_tag_open'] = '<div class="digit">';
	$config['next_tag_close'] = '</div>';
	$config['prev_tag_open'] = '<div class="digit">';
	$config['prev_tag_close'] = '</div>';
	$config['last_tag_open'] = '<div class="digit">';
	$config['last_tag_close'] = '</div>';
	$config['first_tag_open'] = '<div class="digit">';
	$config['first_tag_close'] = '</div>';

	$this->pagination->initialize($config);

	$paginationLinks = $this->pagination->create_links();
		
	$perPageEstates= array();
		if($perPageLimit && $perPageLimit[1]){
			$perPageEstates = array_slice($filterEstates,$perPageLimit[1]-15,$perPageLimit[1]+15);
		} else {
			$perPageEstates = array_slice($filterEstates,0,15);
		}
		


		/* complet view estate cards */
		$filterEstatesComplet = "";
		foreach ($perPageEstates as $index => $estate) {
			$photos = $this->Estate_model->getPhotosFromEstateLimited($estate->rel, 4);
			$extraIcons = $this->Estate_model->getExtrasFromEstateLimited($estate->rel, 4);
			$haveDef= true;
			foreach($photos as $index => $photo){
				if($photo->def  === "1"){
					$haveDef = false;
				}
			}
			if($haveDef && $photos[0]){
				$photos[0]->def = "1";
			}
			$estate->images = $photos;
			$estate->extraIcons = $extraIcons;
			$filterEstatesComplet .=  $this->load->view('components/card', ["cardId" => $index, "estate" => $estate ], true);
		}
	
		
		$this->load->view('head');
		$this->load->view('components/navbar');
		$this->load->view('filterSystem', ["estateTypes" => $estateTypes, "estateSubtypes" => $subtypes, "filterEstates" => $filterEstatesComplet, "estatesResult" => $filterEstatesCount , "pagination" => $paginationLinks]);
		$this->load->view('components/footer');
	}
}
