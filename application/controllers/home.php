<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		
		// $this->load->model('berita_m');
		// $this->load->model('info_m');

	}

	function index()
	{
		$data['title'] = 'Home';
		$data['main_view'] = 'isi_v';
		$this->load->view('template_v', $data);
	}

	function view()
	{
		$data['title'] = 'Home';
		$data['main_view'] = 'isi_v';
		$this->load->view('home_v');
	}
	
}