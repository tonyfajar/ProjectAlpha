<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		echo 'controller User';
		//$this->load->view('templates/header');
		//$this->load->view('templates/sidebar');
		//$this->load->view('templates/topbar');
		//$this->load->view('templates/footer');
	}
}