<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {

	function login($username, $password)
	{
		$login = $this->db
			->select('id_museum, username_museum, pass_museum')
			->from('partisipan_museum')
			->where(
				array(
					'username_museum'  => $username,
					'pass_museum'  => $password
					)
				)
			->get();
		
		// Jika username dan password cocok
		if ($login->num_rows() == 1)
		{
			$partisipan = $login->row();
			
			// Masukkan ke session
			$session = array(
				'id_museum' => $partisipan->id_museum
			);
				
			$this->session->set_userdata($session);

			return true;
		}
		else
		{
			$this->session->set_flashdata('notification', 'Username dan Password tidak cocok');
			
			return false;
		}
	}

}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */