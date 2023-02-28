<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persyaratan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('persyaratan/index');
		$this->load->view('footer');
	}

	public function knp()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('persyaratan/knp');
		$this->load->view('footer');
	}

	public function perwira()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('persyaratan/perwira');
		$this->load->view('footer');
	}

	public function bintara()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('persyaratan/bintara');
		$this->load->view('footer');
	}

	public function pengabdian()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('persyaratan/pengabdian');
		$this->load->view('footer');
	}

	public function pns()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('persyaratan/pns');
		$this->load->view('footer');
	}
}
