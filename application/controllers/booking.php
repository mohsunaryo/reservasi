<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Booking extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('penyewa_m');
		$this->load->model('gedung_m');
		$this->load->model('transaksi_m');
		$this->load->model('tipe_sewa_m');

	}

	function index()
	{

		$data['title'] = 'Booking';
		$data['main_view'] = 'booking_v';
		$this->load->view('templatemenu_v', $data);
	}

	function view()
	{
		$id = $this->uri->segment(3);
		$penyewa = $this->penyewa_m->selectBy('kd_data_penyewa', $id)->result();
		foreach ($penyewa as $row)
		{
			$data['kd_data_penyewa'] = $row->kd_data_penyewa;
			$data['nama_penyewa'] = $row->nama_penyewa;
			$data['alamat'] = $row->alamat;
			$data['no_telp'] = $row->no_telp;
			// $alumni = $this->alumni_m->selectBy('id_alumni', $row->id_alumni)->row();
			// $data['nama'] = $alumni->nama;
			// $data['judul'] = $row->judul;
			// $data['isi_info'] = $row->isi_info;
        }
		$data['title'] = 'Booking';
		$data['main_view'] = 'booking_v';
		$this->load->view('templatemenu_v', $data);
	}
	
}