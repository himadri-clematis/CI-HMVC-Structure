<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('dashboard_view');

		$data=[]; 
		$data["menu"]="about";
		$data['view_file'] = 'dashboard_view';
        adminview($data);
	}

	public function details()
	{
		$this->load->view('dashboard_view');
	}
}
