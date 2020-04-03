<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fom extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
        // $this->load->library('form_validation');
	}
	public function index(){
		$this->load->view('layouts/header');
		$this->load->view('atas');
		$this->load->view('layouts/footer');
	}
	public function save_data()
	{
		$pasal=implode(', ',$this->input->post('pasal'));
		// echo "$pasal";
		if (empty($this->input->post('pasal'))) {
			$this->session->set_flashdata('error','isi data pasalnya');
			$data=array(
				//'idpelanggaran'=>$this->generateRandomString(),
				'namapelanggar'=>$this->input->post('nama'),
				'jenissim'=>$this->input->post('jenis_sim'),
				'ttl'=>$this->input->post('ttl'),
				'tdt'=>$this->input->post('tanggal'),
				'nohp'=>$this->input->post('no_hp'),
				'email'=>$this->input->post('email'),
				'alamat'=>$this->input->post('alamat'),
				'profesi'=>$this->input->post('profesi'),
				'tempattilang'=>$this->input->post('tempat'),
				'barangtilang'=>$this->input->post('barang_yang_disita'),
			);
			$this->session->set_flashdata($data);
			redirect(base_url().'Fom');
		}

		$this->load->helper('file'); 
		
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
		
		print_r($config);
		$this->load->library('upload');
		$this->upload->initialize($config);
		echo $config['upload_path'];

		if ( ! $this->upload->do_upload('plat')) {
			$error = array('error' => 'Format file STNK atau Plat yang di upload harus gif|jpg|png|JPG|jpeg');
			$this->session->set_flashdata($error);
			$data=array(
				//'idpelanggaran'=>$this->generateRandomString(),
				'namapelanggar'=>$this->input->post('nama'),
				'jenissim'=>$this->input->post('jenis_sim'),
				'ttl'=>$this->input->post('ttl'),
				'tdt'=>$this->input->post('tanggal'),
				'nohp'=>$this->input->post('no_hp'),
				'email'=>$this->input->post('email'),
				'alamat'=>$this->input->post('alamat'),
				'profesi'=>$this->input->post('profesi'),
				'tempattilang'=>$this->input->post('tempat'),
				'barangtilang'=>$this->input->post('barang_yang_disita'),
			);
			$this->session->set_flashdata($data);

			redirect(base_url().'Fom');
		}

		$this->upload->do_upload('plat');
		$file1 = $this->upload->data();

		$data=array(
			'idpelanggaran'=>$this->generateRandomString(),
			'namapelanggar'=>$this->input->post('nama'),
			'jenissim'=>$this->input->post('jenis_sim'),
			'ttl'=>$this->input->post('ttl'),
			'tdt'=>$this->input->post('tanggal'),
			'nohp'=>$this->input->post('no_hp'),
			'email'=>$this->input->post('email'),
			'alamat'=>$this->input->post('alamat'),
			'profesi'=>$this->input->post('profesi'),
			'pasal'=>$pasal,
			'tempattilang'=>$this->input->post('tempat'),
			'barangtilang'=>$this->input->post('barang_yang_disita'),
			'plat'=>$file1['file_name'],
			'tanggalsidang'=>date('Y-m-d', strtotime('+7 days', strtotime($this->input->post('tanggal')))),
			'status'=>0
		);
		echo "<pre>";
		print_r($data);	
		echo "</pre>";
		$this->M_login->insert($data,'pelanggaran');
		redirect(base_url().'Fom/data_pelanggaran');
	}
	public function data_pelanggaran(){
		$query = $this->M_login->view('pelanggaran')->result();
		$data['pelanggar'] = $query;
		$this->load->view('layouts/header');
		$this->load->view('dat_pelanggaran',$data);

	}
	public function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	public function edit($idpelanggaran){
		$data['edit']=$this->M_login->view_where('pelanggaran',array('idpelanggaran'=>$idpelanggaran))->result();
		
		$this->load->view('layouts/header');
		$this->load->view('edit_pelanggaran',$data);
		$this->load->view('layouts/footer');
	}
	public function hapus($idpelanggaran){
		$this->M_login->delete(array('idpelanggaran'=>$idpelanggaran),'pelanggaran');
		$this->session->set_flashdata('idhapus','ID Pelanggaran '.$idpelanggaran.' Berhasil Dihapus!');
		redirect(base_url().'Fom/data_pelanggaran');
	}
	public function save_update()
	{
		$pasal=implode(', ',$this->input->post('pasal'));
		// echo "$pasal";
		if (empty($this->input->post('pasal'))) {
			$this->session->set_flashdata('error','isi data pasalnya');
			$data=array(
				//'idpelanggaran'=>$this->generateRandomString(),
				'namapelanggar'=>$this->input->post('nama'),
				'jenissim'=>$this->input->post('jenis_sim'),
				'ttl'=>$this->input->post('ttl'),
				'tdt'=>$this->input->post('tanggal'),
				'nohp'=>$this->input->post('no_hp'),
				'email'=>$this->input->post('email'),
				'alamat'=>$this->input->post('alamat'),
				'profesi'=>$this->input->post('profesi'),
				'tempattilang'=>$this->input->post('tempat'),
				'barangtilang'=>$this->input->post('barang_yang_disita'),
			);
			$this->session->set_flashdata($data);
			redirect(base_url().'Fom/edit/'.$this->input->post('idpelanggaran'));
			
		}

		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
		
		print_r($config);
		$this->load->library('upload');
		$this->upload->initialize($config);
		echo $config['upload_path'];

		if ( ! $this->upload->do_upload('plat')) {
			$error = array('error' => 'Format file STNK atau Plat yang di upload harus gif|jpg|png|JPG|jpeg');
			$this->session->set_flashdata($error);
			print_r($error);
			echo $this->upload->display_errors();
			//redirect(base_url().'Fom/edit/'.$this->input->post('idpelanggaran'));
		}

		$this->upload->do_upload('plat');
		$file1 = $this->upload->data();

		$data=array(
			'namapelanggar'=>$this->input->post('nama'),
			'jenissim'=>$this->input->post('jenis_sim'),
			'ttl'=>$this->input->post('ttl'),
			'tdt'=>$this->input->post('tanggal'),
			'nohp'=>$this->input->post('no_hp'),
			'email'=>$this->input->post('email'),
			'alamat'=>$this->input->post('alamat'),
			'profesi'=>$this->input->post('profesi'),
			'pasal'=>$pasal,
			'tempattilang'=>$this->input->post('tempat'),
			'barangtilang'=>$this->input->post('barang_yang_disita'),
			'plat'=>$file1['file_name'],
			'tanggalsidang'=>date('Y-m-d', strtotime('+7 days', strtotime($this->input->post('tanggal'))))
		);
		echo "<pre>";
		print_r($data);	
		echo "</pre>";
		$this->M_login->update($data,array('idpelanggaran'=>$this->input->post('idpelanggaran')),'pelanggaran');
		 redirect(base_url().'Fom/data_pelanggaran');
	}
	public function surat_tilang($idpelanggaran)
    {
		$this->load->library('Pdf');
		$data=$this->M_login->view_where('pelanggaran',array('idpelanggaran'=>$idpelanggaran))->result();
		$tabel = '';
		foreach ($data as $u) {
			$tabel='
			<h3 align="center">Bukti Pelanggaran Lalu Lintas</h3>
			<table style="width:90%;" border="1px">
			   <tr>
			   	<td style="width:60%;"><h5>Kesatuan : Polsek Lekong, Bandung</h5></td>
			    <td>ID Pelanggaran: <b>'.$u->idpelanggaran.'</b></td>
			   </tr>
			   <tr>
			    <td>Nama : '.$u->namapelanggar.'</td>
			    <td>Email : '.$u->email.'</td>
			    
			   </tr>
			   <tr>
			    <td>Alamat : '.$u->alamat.'</td>
			    <td>No HP : '.$u->nohp.'</td>
			   </tr>
			   <tr>
			    <td>Tanggal Lahir : '.$u->ttl.'</td>
			    <td>Jenis SIM : '.$u->jenissim.'</td>
			   </tr>
			   <tr>
			    <td>Profesi : '.$u->profesi.'</td>
			    <td>Barang yang Disita : '.$u->barangtilang.'</td>
			   </tr>
			   <tr>
			    <td align="justify">
			    Pada tanggal '.$u->tdt.' bertempatkan di '.$u->tempattilang.' telah melanggar aturan tertib kendaraan lalu lintas dan dikenakan pasal. Pasal yang dilanggar : <br>'.str_replace(", ", "<br>", $u->pasal).'
			    </td>
			    <td align="center">Plat/STNK <br><img src="'.base_url().'gambar/'.$u->plat.'" width="100" height="auto"></td>
			   </tr>
			   <tr>
			   	<td>Tanggal Sidang '.$u->tdt.' di Pengadilan Negeri Kabupaten Bandung. Pastikan anda telah melakukan pembayaran terlebih dahulu sebelum sidang.</td>
			   	<td>Silahkan lakukan pembayaran melalui Bank BRI dengan menunjukkan atau menggunaan ID Pelanggaran anda <b>'.$u->idpelanggaran.'</b> untuk melakukan pembayaran denda tilang anda.
			   	</td>
			   </tr>
			</table>
			    ';
   		}
        // echo $tabel;
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setPrintFooter(false);
        $pdf->setPrintHeader(false);
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->AddPage('');
        $pdf->Write(0, 'Surat Tilang', '', 0, 'L', true, 0, false, false, 0);
        $pdf->SetFont('');
 		ob_start();
        $pdf->writeHTML($tabel);
        ob_end_clean();
        $pdf->Output($idpelanggaran.'.pdf', 'I');
    }
    // public function cek()
    // {
    // 	echo APPPATH.'/third_party/TCPDF-6.3.5/tcpdf.php';
    // 	# code...
    // }
    public function detail_pasal($idpelanggaran)
    {
		$data=$this->M_login->view_where('pelanggaran',array('idpelanggaran'=>$idpelanggaran))->result_array();
		echo "Pasal yang dilanggar $idpelanggaran : <br>";
		echo str_replace(', ', '<br>', $data[0]['pasal']);
    }
}
?>