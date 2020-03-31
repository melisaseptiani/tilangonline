<?php

class Cari extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_cari');
	}
	public function index()
	{
		$this->load->view('cari');
	}

	public function hasil(){
		if ($this->input->get('kode')== '') {
			$this->session->set_flashdata('eror','Nomor Blanko harus diisi!');
			redirect(base_url().'Cari');
		}
		$data2['hasil'] = $this->M_cari->search_pelanggaran($this->input->get('kode'))->result();
		$this->load->view('pelanggar/v_cari', $data2);
	}
	public function detail($idpelanggaran)
	{
		$data2['hasil'] = $this->M_cari->view_where('pelanggaran',array('idpelanggaran'=>$idpelanggaran))->result();
		$this->load->view('pelanggar/detail_tilang', $data2);
	}
	public function bayar($idpelanggaran)
	{
		$data['idpelanggaran']=$idpelanggaran;
		$cek= $this->M_cari->view_where('pelanggaran',array('idpelanggaran'=>$idpelanggaran))->result_array();
		$data['status']=$cek[0]['status'];
		$this->load->view('pelanggar/bayar',$data);
		# code...
	}
	public function save_bayar()
	{
		$this->load->helper('file'); 
		
		$config['upload_path']          = '.bukti/';
		$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg|pdf';
		
		print_r($config);
		$this->load->library('upload');
		$this->upload->initialize($config);
		echo $config['upload_path'];

		if ( ! $this->upload->do_upload('bukti')) {
			$error = array('error' => 'Format file harus gif|jpg|png|JPG|jpeg');
			$this->session->set_flashdata($error);
			//redirect(base_url().'Cari/bayar/'.$this->input->post('idpelanggaran'));
		}

		$this->upload->do_upload('bukti');
		$file1 = $this->upload->data();

		$data=array(
			'idpelanggaran'=>$this->input->post('idpelanggaran'),
			'buktibayar'=>$file1['file_name']
		);
		//print_r($data);
		$this->M_cari->insert($data,'pembayaran');
		$this->M_cari->update(array('status'=>1),array('idpelanggaran'=>$this->input->post('idpelanggaran')),'pelanggaran');
		redirect(base_url().'Cari/detail/'.$this->input->post('idpelanggaran'));
	}
	public function surat_tilang($idpelanggaran)
    {
		$this->load->library('Pdf');
		$data['d']=$this->M_cari->view_where('pelanggaran',array('idpelanggaran'=>$idpelanggaran))->result();
		//$this->load->view('cek_pdf',$data);

		// $tabel = '';
		// foreach ($data as $u) {
		// $tabel='
		// 	<h3 align="center">Bukti Pelanggaran Lalu Lintas</h3>
		// 	<table align="center" style="width:80%;" border="1px">
		// 	   <tr>
		// 	   	<td style="width:6	0%;"><h5>Kesatuan : Polsek Lekong, Bandung</h5></td>
		// 	    <td>ID Pelanggaran: <b>'.$u->idpelanggaran.'</b></td>
		// 	   </tr>
		// 	   <tr>
		// 	    <td>Nama : '.$u->namapelanggar.'</td>
		// 	    <td>Email : '.$u->email.'</td>
			    
		// 	   </tr>
		// 	   <tr>
		// 	    <td>Alamat : '.$u->alamat.'</td>
		// 	    <td>No HP : '.$u->nohp.'</td>
		// 	   </tr>
		// 	   <tr>
		// 	    <td>Tanggal Lahir : '.$u->ttl.'</td>
		// 	    <td>Jenis SIM : '.$u->jenissim.'</td>
		// 	   </tr>
		// 	   <tr>
		// 	    <td>Profesi : '.$u->profesi.'</td>
		// 	    <td>Barang yang Disita : '.$u->barangtilang.'</td>
		// 	   </tr>
		// 	   </tr>
		// 	   <tr>
		// 	    <td align="justify">
		// 	    Pada tanggal '.$u->tdt.' bertempatkan di '.$u->tempattilang.' telah melanggar aturan tertib kendaraan lalu lintas dan dikenakan pasal. Pasal yang dilanggar : <br>'.str_replace(", ", "<br>", $u->pasal).'
		// 	    </td>
		// 	    <td align="center">Plat/STNK <br><img src="'.base_url().'gambar/'.$u->plat.'" width="100" height="auto"></td>
		// 	   </tr>
		// 	   <tr>
		// 	   	<td>Tanggal Sidang '.$u->tdt.' di Pengadilan Negeri Kabupaten Bandung. Pastikan anda telah melakukan pembayaran terlebih dahulu sebelum sidang.</td>
		// 	   	<td>Silahkan lakukan pembayaran melalui Bank BRI dengan menunjukkan atau menggunaan ID Pelanggaran anda <b>'.$u->idpelanggaran.'</b> untuk melakukan pembayaran denda tilang anda.
		// 	   	</td>
		// 	   </tr>
		// 	</table>
		// 	    ';
  //  }
        //echo $tabel;
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setPrintFooter(false);
        $pdf->setPrintHeader(false);
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->AddPage('');
        $pdf->Write(0, 'Surat Tilang', '', 0, 'L', true, 0, false, false, 0);
        $pdf->SetFont('');
 		ob_start();
        $pdf->writeHTML($this->load->view('cek_pdf',$data,true), true, false, true, false, '');
        //$pdf->lastPage();
        ob_end_clean();
        $pdf->Output('$idpelanggaran.pdf', 'I');
    }
}

// RULE STATUS pembayaran
// 0 = Menunggu upload bukti bayar
// 1 = bukti bayar sudah diupload, menunggu validasi pembayaran
// 2 = pembayaran valid
// 3 = pembayaran tidak valid
