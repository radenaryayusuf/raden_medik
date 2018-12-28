<?php 
class Datapasien extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_pasien');
        
	}
	function index(){
        $data['kode_pasien'] = $this->m_pasien->getkodepasien();
		$this->load->view('pasien_page',$data);
	}
    function data_pasien(){
        $data = $this->m_pasien->pasien_list();
        echo json_encode($data);
    }
    function get_pasien(){
        $Nopasien = $this->input->get('NoPasien');
        $data = $this->m_pasien->get_pasien_by_nopasien($Nopasien);
        echo json_encode($data);
    }
	    function simpan_pasien(){
            $NoPasien = $this->input->post('nopasien');
            $NmPas =$this->input->post('nama_pasien');
            $AlmtPas = $this->input->post('alamat');
            $TlpnPas = $this->input->post('no_telp');
            $TglLhrPas = $this->input->post('tanggal_lahir');
            $JKPas = $this->input->post('jenis_kelamin');

            $data = $this->m_pasien->simpan_pasien($NoPasien, $NmPas, $AlmtPas, $TlpnPas, $TglLhrPas, $JKPas);
            echo json_encode($data);
}

 function update_pasien(){
            $NoPasien = $this->input->post('nopasien_edit');
            $NmPas =$this->input->post('nama_pasien_edit');
            $AlmtPas = $this->input->post('alamat_edit');
            $TlpnPas = $this->input->post('no_telp_edit');
            $TglLhrPas = $this->input->post('tanggal_lahir_edit');
            $JKPas = $this->input->post('jenis_kelamin_edit');

            $data = $this->m_pasien->update_pasien($NoPasien, $NmPas, $AlmtPas, $TlpnPas, $TglLhrPas, $JKPas);
            echo json_encode($data);
}
            function hapus_pasien(){
            $NoPasien = $this->input->post('kode');
            $data = $this->m_pasien->hapus_pasien($NoPasien);
            echo json_encode($NoPasien);


}
}
?>