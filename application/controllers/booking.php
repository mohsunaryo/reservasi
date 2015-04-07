<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Booking extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('berita_m');
		// $this->load->model('info_m');

	}

	function index()
	{

		$data['title'] = 'Booking';
		$data['main_view'] = 'booking_v';
		$this->load->view('templatemenu_v', $data);
	}

	function view()
	{
		$data['title'] = 'Booking';
		$data['main_view'] = 'booking_v';
		$this->load->view('templatemenu_v', $data);
	}
	
}