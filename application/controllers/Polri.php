<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/index');
		$this->load->view('footer');
	}
}
