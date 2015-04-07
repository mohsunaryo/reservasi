<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Transaksi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('berita_m');
		// $this->load->model('info_m');

	}

	function index()
	{

		$data['title'] = 'Transaksi';
		$data['main_view'] = 'transaksi_v';
		$this->load->view('templatemenu_v', $data);
	}

	function view()
	{
		$data['title'] = 'Transaksi';
		$data['main_view'] = 'transaksi_v';
		$this->load->view('templatemenu_v', $data);
	}
	
}