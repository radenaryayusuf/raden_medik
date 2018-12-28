<?php 
class Resep extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_resep');
        
	}
	function index(){
		// $dt['no_urut'] =$this->m_resep->get_nourut();
		$dt['data_periksa'] =$this->m_resep->get_periksa();
		// $dt['data_belum_periksa'] = $this->m_resep->getDataBelumPeriksa();
		// // $dt['data_pasien'] = $this->m_resep->get_all();    
		// $dt['data_jadwal_dokter'] = $this->m_resep->getJadwalDokter();    
		$dt['tglsekarang'] = date("Y-m-d");
		$this->load->view('resep_page',$dt);
	}

	public function munculdata_pasien()
	{
		if($this->input->is_ajax_request())
		{
			$NoPasien = $this->input->post('NoPasien');
			$this->load->model('m_resep');
			$data = $this->m_resep->get_baris($NoPasien)->row();
			$json['AlmtPas']			= ( ! empty($data->AlmtPas)) ? preg_replace("/\r\n|\r|\n/",'<br />', $data->AlmtPas) : "<small><i>Tidak ada</i></small>";
			$json['TlpnPas']			= ( ! empty($data->TlpnPas)) ? $data->TlpnPas : "<small><i>Tidak ada</i></small>";
			
			$json['JKPas']	= ( ! empty($data->JKPas)) ? preg_replace("/\r\n|\r|\n/",'<br />', $data->JKPas) : "<small><i>Tidak ada</i></small>";
			echo json_encode($json);
		}
	}
	function proses(){
      if($this->input->post()){
  $this->m_resep->prosesresep();
  echo "Input Berhasil";
}else{
echo "denied";
}
      }
    
}
?>