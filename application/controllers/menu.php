<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Menu extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('berita_m');
		// $this->load->model('info_m');

	}

	function index()
	{

		$data['title'] = 'Menu';
		$data['main_view'] = 'menu_v';
		$this->load->view('templatemenu_v', $data);
	}

	function view()
	{
		$data['title'] = 'Menu';
		$data['main_view'] = 'menu_v';
		$this->load->view('templatemenu_v', $data);
	}
	
}