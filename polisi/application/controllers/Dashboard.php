<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('dashboard/index');
		$this->load->view('layouts/footer');
	// }
	//
	// public function cari_pelanggar()
	// {
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('dashboard/cari_pelanggar');
	// 	$this->load->view('layouts/footer');
	// 	}
	// public function chika()
	// {
	// 	$data['data_pelanggar']=[
	// 	["nama_pelanggar"=>"Chika Restu","no_polisi"=>"13132","alamat"=>"Jl. Buah Batu","profesi"=>"Mahasiswi","tanggal_tilang"=>"10/08/2019","tempat_pelanggaran"=>"Jl.Soekarno Hatta","pasal_pelanggaran"=>"Pasal 298 : Tidak memakai helm","barang_yang_disita"=>"STNK","nohp"=>"0987654356","email"=>"chikaraldita@gmail.com"]
	// ];
	//
	// $this->load->view('layouts/header');
	// $this->load->view('dashboard/index');
	// $this->load->view('layouts/footer');
	}
}
 ?>
