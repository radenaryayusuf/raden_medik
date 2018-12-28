<?php 
class Pendaftaran extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_pendaftaran');
        
	}
	function index(){
		$dt['no_urut'] =$this->m_pendaftaran->get_nourut();
		$dt['nama_pegawai'] =$this->m_pendaftaran->get_pegawai();
		$dt['data_belum_periksa'] = $this->m_pendaftaran->getDataBelumPeriksa();
		$dt['data_pasien'] = $this->m_pendaftaran->get_all();    
		$dt['data_jadwal_dokter'] = $this->m_pendaftaran->getJadwalDokter();    
		$dt['tglsekarang'] = date("Y-m-d");
		$this->load->view('pendaftaran_page',$dt);
	}

	public function munculdata_pasien()
	{
		if($this->input->is_ajax_request())
		{
			$NoPasien = $this->input->post('NoPasien');
			$this->load->model('m_pendaftaran');
			$data = $this->m_pendaftaran->get_baris($NoPasien)->row();
			$json['AlmtPas']			= ( ! empty($data->AlmtPas)) ? preg_replace("/\r\n|\r|\n/",'<br />', $data->AlmtPas) : "<small><i>Tidak ada</i></small>";
			$json['TlpnPas']			= ( ! empty($data->TlpnPas)) ? $data->TlpnPas : "<small><i>Tidak ada</i></small>";
			
			$json['JKPas']	= ( ! empty($data->JKPas)) ? preg_replace("/\r\n|\r|\n/",'<br />', $data->JKPas) : "<small><i>Tidak ada</i></small>";
			echo json_encode($json);
		}
	}
	function proses(){
      if($this->input->post()){
  $this->m_pendaftaran->prosespendaftaran();
  echo "Input Berhasil";
}else{
echo "denied";
}
      }
    
}
?>