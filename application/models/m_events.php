<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_events extends CI_Model {

	function getAllEvents()
	{
		return $this->db->get('event_museum')->result();
	}

	function getMuseumEvents( $id )
	{
		return $this->db->get_where('event_museum', array('id_museum' => $id));
	}

	function getMuseumEventsByCategory($id_museum, $id_kategori_event)
	{
		$res = $this->db->query("
			SELECT *
			FROM
				event_museum e, kategori_event k
			WHERE
				e.id_museum = $id_museum AND
				e.id_kategori_event = k.id_kategori_event AND
				e.id_kategori_event = $id_kategori_event
		");

		return $res->result();
	}

	function getEventCategories()
	{
		return $this->db->get('kategori_event')->result();
	}

	function insertEvent($data)
	{
		$this->db->insert('event_museum', $data);
	}

}

/* End of file m_events.php */
/* Location: ./application/models/m_events.php */