<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_collections extends CI_Model {

	function getAllCollections()
	{
		return $this->db->query("
			SELECT *
			FROM koleksi_museum km, kategori_koleksi kk, profil_museum pm
			WHERE
				km.id_kategori_koleksi = kk.id_kategori_koleksi AND
				km.id_museum = pm.id_museum
		")->result();
	}

	function getMuseumCollections( $id )
	{
		return $this->db->get_where('koleksi_museum', array('id_museum' => $id))->result();
	}

	function getCollectionClassifications()
	{
		return $this->db->get('kategori_koleksi')->result();
	}

	function insertCollection( $data )
	{
		$this->db->insert('koleksi_museum', $data);
	}

}

/* End of file m_collections.php */
/* Location: ./application/models/m_collections.php */