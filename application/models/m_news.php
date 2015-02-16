<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_news extends CI_Model {

	function getAllNews()
	{
		//
	}

	function getAllMuseumNews( $id )
	{
		return $this->db->get_where('berita_museum', array('id_museum' => $id))->result();
	}

}

/* End of file m_news.php */
/* Location: ./application/models/m_news.php */