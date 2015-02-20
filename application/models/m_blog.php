<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_blog extends CI_Model {

	function getBlogTags()
	{
		return $this->db->get('tag_blog')->result();
	}

}

/* End of file m_blog.php */
/* Location: ./application/models/m_blog.php */