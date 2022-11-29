<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndividualProp extends CI_Controller {
	public function index()
	{
		$smallCards =  "";
		 for($i = 1; $i<=3 ; $i++) { 
			$smallCards .=  $this->load->view('components/smallcard', ["cardId" => $i ], true);
		 }
		$this->load->view('head');
		$this->load->view('components/navbar');
        $this->load->view('individualProp', ["smallCards" => $smallCards]);
        $this->load->view('components/footer');
	}
}
