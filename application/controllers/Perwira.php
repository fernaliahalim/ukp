<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perwira extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('perwira_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/perwira/index.php');
		$this->load->view('footer');
	}

	public function iptu()
	{
		$idkp  	  = array();
		$namakp   = array();
		$detailkp = array();
		$mdp      = array();
		$mddp 	  = array();

		$rs_jeniskp = $this->perwira_model->get_jeniskp_by_pangkat(5);
		foreach ($rs_jeniskp->result_array() as $row) {
			$idkp[]		= $row['id'];
			$namakp[]   = $row['nama_kp'];
			$detailkp[] = $row['detail_kp'];
			$mdp[]      = $row['mdp'];
			$mddp[]		= $row['mddp'];
		}

		$data = array(
			'header'   => "IPDA KE IPTU",
			'method'   => 'iptu',
			'idkp'	   => $idkp,
			'namakp'   => $namakp,
			'detailkp' => $detailkp,
			'mdp'	   => $mdp,
			'mddp'	   => $mddp
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/perwira/detail.php', $data);
		$this->load->view('footer');
	}

	public function akp()
	{
		$idkp  	  = array();
		$namakp   = array();
		$detailkp = array();
		$mdp      = array();
		$mddp 	  = array();

		$rs_jeniskp = $this->perwira_model->get_jeniskp_by_pangkat(4);
		foreach ($rs_jeniskp->result_array() as $row) {
			$idkp[]		= $row['id'];
			$namakp[]   = $row['nama_kp'];
			$detailkp[] = $row['detail_kp'];
			$mdp[]      = $row['mdp'];
			$mddp[]		= $row['mddp'];
		}

		$data = array(
			'header'   => "IPTU KE AKP",
			'method'   => 'akp',
			'idkp'	   => $idkp,
			'namakp'   => $namakp,
			'detailkp' => $detailkp,
			'mdp'	   => $mdp,
			'mddp'	   => $mddp
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/perwira/detail.php', $data);
		$this->load->view('footer');
	}

	public function kompol()
	{
		$idkp  	  = array();
		$namakp   = array();
		$detailkp = array();
		$mdp      = array();
		$mddp 	  = array();

		$rs_jeniskp = $this->perwira_model->get_jeniskp_by_pangkat(3);
		foreach ($rs_jeniskp->result_array() as $row) {
			$idkp[] 	= $row['id'];
			$namakp[]   = $row['nama_kp'];
			$detailkp[] = $row['detail_kp'];
			$mdp[]      = $row['mdp'];
			$mddp[]		= $row['mddp'];
		}

		$data = array(
			'header'   => "AKP KE KOMPOL",
			'method'   => 'kompol',
			'idkp'	   => $idkp,
			'namakp'   => $namakp,
			'detailkp' => $detailkp,
			'mdp'	   => $mdp,
			'mddp'	   => $mddp
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/perwira/detail.php', $data);
		$this->load->view('footer');
	}

	public function akbp()
	{
		$idkp  	  = array();
		$namakp   = array();
		$detailkp = array();
		$mdp      = array();
		$mddp 	  = array();

		$rs_jeniskp = $this->perwira_model->get_jeniskp_by_pangkat(2);
		foreach ($rs_jeniskp->result_array() as $row) {
			$idkp[] 	= $row['id'];
			$namakp[]   = $row['nama_kp'];
			$detailkp[] = $row['detail_kp'];
			$mdp[]      = $row['mdp'];
			$mddp[]		= $row['mddp'];
		}

		$data = array(
			'header'   => "KOMPOL KE AKBP",
			'method'   => 'akbp',
			'idkp'	   => $idkp,
			'namakp'   => $namakp,
			'detailkp' => $detailkp,
			'mdp'	   => $mdp,
			'mddp'	   => $mddp
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/perwira/detail.php', $data);
		$this->load->view('footer');
	}

	public function kombespol()
	{
		$idkp  	  = array();
		$namakp   = array();
		$detailkp = array();
		$mdp      = array();
		$mddp 	  = array();

		$rs_jeniskp = $this->perwira_model->get_jeniskp_by_pangkat(1);
		foreach ($rs_jeniskp->result_array() as $row) {
			$idkp[] 	= $row['id'];
			$namakp[]   = $row['nama_kp'];
			$detailkp[] = $row['detail_kp'];
			$mdp[]      = $row['mdp'];
			$mddp[]		= $row['mddp'];
		}

		$data = array(
			'header'   => "AKBP KE KOMBESPOL",
			'method'   => 'kombespol',
			'idkp'	   => $idkp,
			'namakp'   => $namakp,
			'detailkp' => $detailkp,
			'mdp'	   => $mdp,
			'mddp'	   => $mddp
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/perwira/detail.php', $data);
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
		$header 	 = $this->input->post('header');
		$method 	 = $this->input->post('method');
		$tmt_perwira = $this->input->post('tmt_perwira');
		$tmt 		 = $this->input->post('tmt');
		$jenis_kp    = $this->input->post('jenis_kp');
		$ketjeniskp  = $this->input->post('ketjeniskp');
		$mdp    	 = $this->input->post('mdp');
		$mddp    	 = $this->input->post('mddp');
		$now		 = date('Y-m-d');

		//menghitung mdp
		$tgl1      = date("Y", strtotime($now));
		$tgl2      = date("Y", strtotime($tmt_perwira));
		$mdp_count = $tgl1 - $tgl2;

		if ($mdp_count >= $mdp) {
			$ket_mdp = "Memenuhi MDP";
		} else {
			$ket_mdp = "Belum memenuhi MDP";
		}

		$tmtperwiraconvert = $this->convert_tmt($tmt_perwira);
		$tmt_mdp = date('d-m-Y', strtotime('+' . $mdp . ' years', strtotime($tmtperwiraconvert)));

		//cek mddp
		$tmtconvert = $this->convert_tmt($tmt);
		$tmt_mddp = date('d-m-Y', strtotime('+' . $mddp . ' years', strtotime($tmtconvert)));

		if ($tmt_mdp >= $tmt_mddp) {
			$tmtkp = $tmt_mdp;
		} else {
			$tmtkp =  $tmt_mddp;
		}

		//hitung masa kp sesuai tmt
		$tgl1       = new DateTime($now);
		$tgl2       = new DateTime($tmtkp);
		$sisa_tmtkp = $tgl2->diff($tgl1);

		$data = array(
			'header'     => $header,
			'method'     => $method,
			'tmtperwira' => date("d-m-Y", strtotime($tmt_perwira)),
			'tmt'        => date("d-m-Y", strtotime($tmt)),
			'now'        => date("d-m-Y", strtotime($now)),
			'jeniskp'    => $jenis_kp,
			'ketjeniskp' => $ketjeniskp,
			'mdp'		 => $mdp,
			'mdpcount'	 => $mdp_count,
			'ketmdp'	 => $ket_mdp,
			'mddp'  	 => $mddp,
			'tmtkp'      => $tmtkp,
			'sisa_tmtkp' => $sisa_tmtkp->y . " Tahun " . $sisa_tmtkp->m . " Bulan " . $sisa_tmtkp->d . " Hari"
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cek_ukp/perwira/calculated.php', $data);
		$this->load->view('footer');
	}
}
