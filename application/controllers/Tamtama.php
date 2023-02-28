<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tamtama extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/tamtama/index.php');
		$this->load->view('footer');
	}

	public function bharatu()
	{
		$data = array(
			'header'    => "BHARADA KE BHARATU",
			'method'	=> 'bharatu',
			'mddp'      => 5,
			'golpngkat' => 'BHARADA'
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/tamtama/detail.php', $data);
		$this->load->view('footer');
	}

	public function bharaka()
	{
		$data = array(
			'header'    => "BHARATU KE BHARAKA",
			'method'	=> 'bharaka',
			'mddp'      => 5,
			'golpngkat' => 'BHARATU'
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/tamtama/detail.php', $data);
		$this->load->view('footer');
	}

	public function abripda()
	{
		$data = array(
			'header'    => "BHARAKA KE ABRIPDA",
			'method'	=> 'abripda',
			'mddp'      => 5,
			'golpngkat' => 'BHARAKA'
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/tamtama/detail.php', $data);
		$this->load->view('footer');
	}

	public function abriptu()
	{
		$data = array(
			'header'    => "ABRIPDA KE ABRIPTU",
			'method'	=> 'abriptu',
			'mddp'      => 5,
			'golpngkat' => 'ABRIPDA'
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/tamtama/detail.php', $data);
		$this->load->view('footer');
	}

	public function abrip()
	{
		$data = array(
			'header'    => "ABRIPTU KE ABRIP",
			'method'	=> 'abrip',
			'mddp'      => 4,
			'golpngkat' => 'ABRIPTU'
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/tamtama/detail.php', $data);
		$this->load->view('footer');
	}

	public function convert_tmt($tmt)
	{
		$tmtmonth = date('m', strtotime($tmt));
		$tmtyear  = date('Y', strtotime($tmt));
		if ($tmtmonth >= "09" && $tmtmonth <= "12" || $tmtmonth >= "01" && $tmtmonth <= "02") {
			if ($tmtmonth >= "09" && $tmtmonth <= "12") {
				$tmt = $tmtyear + 1 . "-01-01";
			} else {
				$tmt = $tmtyear . "-01-01";
			}
		} else {
			$tmt = $tmtyear . "-07-01";
		}

		return $tmt;
	}

	public function calculate()
	{
		$mddp   = $this->input->post('mddp') * 12;
		$header = $this->input->post('header');
		$method = $this->input->post('method');

		$tmt         = $this->input->post('tmt');
		$tmtpangkat	 = $tmt;

		$pengurangan = $this->input->post('jenis_kp');
		$ketjeniskp  = $this->input->post('ketjeniskp');

		$tmt = $this->convert_tmt($tmt);

		$mddpkp = $mddp - $pengurangan;
		$tmtkp  = date('d-m-Y', strtotime('+' . $mddpkp . ' months', strtotime($tmt)));

		//hitung masa kp sesuai tmt
		$now		= date('Y-m-d');
		$tgl1       = new DateTime($now);
		$tgl2       = new DateTime($tmtkp);
		$sisa_tmtkp = $tgl2->diff($tgl1);

		$data = array(
			'header'	 => $header,
			'method'	 => $method,
			'tmt' 		 => date("d-m-Y", strtotime($tmtpangkat)),
			'now' 		 => date('d-m-Y'),
			'ketjeniskp' => $ketjeniskp,
			'tmtkp' 	 => $tmtkp,
			'sisa_tmtkp' => $sisa_tmtkp->y . " Tahun " . $sisa_tmtkp->m . " Bulan " . $sisa_tmtkp->d . " Hari"
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/tamtama/calculated.php', $data);
		$this->load->view('footer');
	}
}
