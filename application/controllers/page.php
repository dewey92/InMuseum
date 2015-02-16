<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	private $data = array();
	/*private $data['kategori_event'] = array();
	private $data['kategori_koleksi'] = array();*/

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_events');
		$this->load->model('m_collections');
		$this->load->model('m_museum');

		$this->data['kategori_event'] = $this->m_events->getEventCategories();
		$this->data['kategori_koleksi'] = $this->m_collections->getCollectionClassifications();
		$this->data['daftar_museum'] = $this->m_museum->getAllMuseumNames();
	}

	function index()
	{
		//$this->load->model('m_news');

		$data = $this->data;

		$data['collections']	= $this->m_collections->getAllCollections();
		$data['events']			= $this->m_events->getAllEvents();
		$data['page']			= 'index';

		$dataafter['content']	= $this->load->view('index', $data, true);

		$this->load->view('template', $dataafter);
	}

	function log_in()
	{
		// Set session
		$array = array(
			'id_user' => '1'
		);
		$this->session->set_userdata( $array );

		redirect('page/user_profile');
	}

	function user_profile()
	{
		$data = $this->data;

		$data['page']			= 'user_profile';

		$dataafter['content']	= $this->load->view('user_profile', $data, true);

		$this->load->view('template', $dataafter);
	}

	function log_out() {
		$this->session->sess_destroy();

		redirect('');
	}

	function events( $id = null )
	{
		$this->load->model('m_kota');

		$data = $this->data;

		$data['events']			= ($id == null) ? $this->m_events->getAllEvents() : $this->m_events->getMuseumEvents($id);
		$data['kota']			= $this->m_kota->getAllKota();
		$data['page']			= 'events';
		$dataafter['content']	= $this->load->view( ($id == null) ? 'events' : 'event_detail', $data, true);

		$this->load->view('template', $dataafter);
	}

	function collections( $id = null )
	{
		$data = $this->data;

		$data['collections']	= $this->m_collections->getAllCollections();
		$data['classifications']= $this->m_collections->getCollectionClassifications();
		$data['page']			= 'collections';
		$dataafter['content']	= $this->load->view( ($id == null) ? 'collections' : 'collections_museum', $data, true);

		$this->load->view('template', $dataafter);
	}

	function news( $id = null )
	{		
		$data = $this->data;

		$data['page']			= 'news';
		$dataafter['content']	= $this->load->view( ($id == null) ? 'news' : 'news_detail', $data, true);

		$this->load->view('template', $dataafter);
	}

	function blogs( $id = null )
	{
		$data = $this->data;

		$data['page']			= 'blogs';
		$dataafter['content']	= $this->load->view( ($id == null) ? 'blogs' : 'blog_detail', $data, true);

		$this->load->view('template', $dataafter);
	}

	function participants( $id = null )
	{
		$this->load->model('m_museum');
		$this->load->model('m_kota');

		$data = $this->data;

		$kota = $this->m_kota->getAllKota();
		foreach ($kota as $row)
		{
			$json[] = $row->nama_kota . ' (' . rand(0,50) . ')';
		}

		$data['participants']	= $this->m_museum->getAllMuseumNames();
		$data['page']			= 'participants';
		$data['kota']			= json_encode($json);
		$dataafter['content']	= $this->load->view('participants', $data, true);

		$this->load->view('template', $dataafter);
	}

	function profile( $id = null )
	{
		$this->load->model('m_museum');

		$data = $this->data;

		$data['profile']		= $this->m_museum->getMuseumProfile( $id );
		$data['events']			= $this->m_events->getAllEvents();
		$data['collections']	= $this->m_collections->getAllCollections();
		$data['page']			= 'participants';
		$dataafter['content']	= $this->load->view('museum_profile', $data, true);

		$this->load->view('template', $dataafter);
	}

	function search()
	{
		$data = $this->data;
		
		$categories = $this->input->post('categorySearch');
		$query 		= $this->input->post('querySearch');

		/*switch ($categories)
		{
			case 'events':
				redirect('page/events');
				break;

			case 'collections':
				redirect('page/collections');
				break;
			
			case 'news':
				redirect('page/news');
				break;

			case 'participants':
				redirect('page/participants');
				break;
			
			default:
				# code...
				break;
		}*/

		$data['result'] = $query;
		$data['page'] = 'search';
		$dataafter['content'] = $this->load->view('search', $data, true);

		$this->load->view('template', $dataafter);
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */