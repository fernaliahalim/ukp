<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pedoman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pedoman/index');
		$this->load->view('footer');
	}

	public function polri()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pedoman/polri');
		$this->load->view('footer');
	}

	public function pns()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pedoman/pns');
		$this->load->view('footer');
	}
}
