<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data=[]; 
		$data["menu"]="about";
		$data['view_file'] = 'home_view';
        view($data);
	}
}
