<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ( ! $this->session->userdata('id_museum') )
			$this->load->view('admin/login');
		else
			redirect('admin/dashboard');
	}

	/**
	 * Administrator Authentication
	 * 
	 * Fungsi ini digunakan untuk mengecek
	 * apakah akses user sebgai admin
	 */
	function auth_admin()
	{
		if ( ! $this->session->userdata('id_museum') )
		{
			redirect('admin');
		}
	}
	
	function log_in()
	{
		$this->load->model('m_admin');

		$username = $this->input->post('username');
		$password = md5( $this->input->post('password') );

		if ( $this->m_admin->login($username, $password) )
		{
			// Masuk ke laman maintanance
			redirect('admin/dashboard');
		}
		else
		{
			redirect('admin');
		}
	}

	function dashboard()
	{
		$this->auth_admin();

		$this->load->model('m_museum');
		$this->load->model('m_collections');
		$this->load->model('m_events');

		$id = $this->session->userdata('id_museum');;

		$data['profile'] = $this->m_museum->getMuseumProfile( $id );
		$data['collections'] = $this->m_collections->getMuseumCollections( $id );
		$data['events'] = $this->m_events->getMuseumEvents( $id );
		$data['page'] = 'dashboard';

		// Render
		$dataafter['content'] = $this->load->view('admin/dashboard', $data, true);
		$this->load->view('admin/template', $dataafter);
	}

	function events()
	{
		$this->auth_admin();

		$this->load->model('m_museum');
		$this->load->model('m_events');

		$id = $this->session->userdata('id_museum');

		$data['events']			= $this->m_events->getMuseumEventsByCategory( $id, 1);
		$data['exhibitions']	= $this->m_events->getMuseumEventsByCategory( $id, 2);
		$data['lectures']		= $this->m_events->getMuseumEventsByCategory( $id, 3);
		$data['games']			= $this->m_events->getMuseumEventsByCategory( $id, 4);
		$data['categories']		= $this->m_events->getEventCategories();
		$data['page']			= 'events';

		// Render
		$dataafter['content'] = $this->load->view('admin/events', $data, true);
		$this->load->view('admin/template', $dataafter);
	}

	function add_event()
	{
		$this->auth_admin();

		$this->load->model('m_events');

		$data = array( 
			'id_museum'			=> $this->session->userdata('id_museum'),
			'id_kategori_event'	=> $this->input->post('id_kategori_event'),
			'nama_event'		=> $this->input->post('nama_event'),
			'deskripsi_event'	=> $this->input->post('deskripsi_event'),
			'tgl_mulai_event'	=> $this->input->post('tgl_mulai_event'),
			'tgl_selesai_event'	=> $this->input->post('tgl_selesai_event')
		);

		$this->m_events->insertEvent( $data );
	}

	function collections()
	{
		$this->auth_admin();

		$this->load->model('m_museum');
		$this->load->model('m_collections');

		$id = $this->session->userdata('id_museum');

		$data['collections']	= $this->m_collections->getMuseumCollections( $id );
		$data['categories']		= $this->m_collections->getCollectionClassifications();
		$data['page']			= 'collections';

		// Render
		$dataafter['content'] = $this->load->view('admin/collections', $data, true);
		$this->load->view('admin/template', $dataafter);
	}

	function add_collection()
	{
		$this->load->model('m_collections');
		
		// Upload photo
		$config['upload_path']		= './img/collection/';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['file_name']		= $this->input->post('nama_koleksi');
		$config['max_size']			= '500';
		$config['max_width']		= '1024';
		$config['max_height']		= '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			print_r( $this->upload->display_errors() );

			//$this->load->view('upload_form', $error);
		}

		// Insert to database !!!
		else
		{
			$data_upload = $this->upload->data();

			$data = array( 
				'id_museum'					=> $this->session->userdata('id_museum'),
				'id_kategori_koleksi'		=> $this->input->post('id_kategori_koleksi'),
				'nama_koleksi'				=> $this->input->post('nama_koleksi'),
				'deskripsi_koleksi'			=> $this->input->post('deskripsi_koleksi'),
				'tempat_asal_koleksi'		=> $this->input->post('tempat_asal_koleksi'),
				'tempat_temuan_koleksi'		=> $this->input->post('tempat_temuan_koleksi'),
				'tahun_pemakaian_koleksi'	=> $this->input->post('tahun_pemakaian_koleksi'),
				'foto_koleksi'				=> $data_upload['file_name']
			);

			$this->m_collections->insertCollection( $data );
		}

		redirect('admin/collections');
	}

	function news()
	{
		$this->load->model('m_news');

		$id = $this->session->userdata('id_museum');

		$data['news'] = $this->m_news->getAllMuseumNews( $id );
		$data['page'] = 'news';

		// Render
		$dataafter['content'] = $this->load->view('admin/news', $data, true);
		$this->load->view('admin/template', $dataafter);
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */