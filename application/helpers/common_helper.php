<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


if (!function_exists('view')) {

    function view($data = '') {
      	$CI = & get_instance();
		$data["header"]=$CI->load->view("header",$data,TRUE);
		$data["footer"]=$CI->load->view("footer",$data,TRUE);
		if(isset($data["view_file"])){
			$data["content"]=$CI->load->view($data["view_file"],$data,TRUE);
		}
		$CI->load->view( "layout", $data);
    }

}

if (!function_exists('customview')) {

    function customview($data = '') {
      	$CI = & get_instance();
		if(isset($data["view_file"])){
			$data["content"]=$CI->load->view($data["view_file"],$data,TRUE);
		}
		$CI->load->view( "layout", $data);
    }

}

if (!function_exists('adminview')) {

    function adminview($data = '') {
      	$CI = & get_instance();
		$data["header"]=$CI->load->view("admin_header",$data,TRUE);
		$data["footer"]=$CI->load->view("admin_footer",$data,TRUE);
		if(isset($data["view_file"])){
			$data["content"]=$CI->load->view($data["view_file"],$data,TRUE);
		}
		$CI->load->view( "admin_layout", $data);
    }

}