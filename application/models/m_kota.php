<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kota extends CI_Model {

	function getAllKota()
	{
		$this->db->order_by("nama_kota", "asc");
		return $this->db->get('daftar_kota')->result();
	}

}

/* End of file m_kota.php */
/* Location: ./application/models/m_kota.php */