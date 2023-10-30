<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reders extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Reders/RedersModel');
	}

	public function index()
	{	
		$list['get_data'] = $this->RedersModel->get_list();

		$this->load->view('reders', $list);

	}


}
