<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_museum extends CI_Model {

	function getAllMuseumNames()
	{
		return $this->db->select('id_museum, nama_museum')
						->get('profil_museum')->result();
	}

	function getAllMuseumProfiles()
	{
		return;
	}

	function getMuseumProfile($id)
	{
		return $this->db->get_where('profil_museum', array('id_museum' => $id))->row();
	}

}

/* End of file m_museum.php */
/* Location: ./application/models/m_museum.php */