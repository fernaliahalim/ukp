<?php

class Perwira_model extends CI_Model
{
	public function get_jeniskp_by_pangkat($pangkat)
	{
		$sql = "SELECT * FROM jenis_kp WHERE ke_pangkat=?;";
		return $this->db->query($sql, $pangkat);
	}
}
