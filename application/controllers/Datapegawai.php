<?php 
class Datapegawai extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_pegawai');
        
	}
	function index(){
		$this->load->view('pegawai_page');
	}
    function data_pegawai(){
        $data = $this->m_pegawai->pegawai_list();
        echo json_encode($data);
    }
    function get_pegawai(){
        $Nip = $this->input->get('NIP');
        $data = $this->m_pegawai->get_pegawai_by_nip($Nip);
        echo json_encode($data);
    }
	    function simpan_pegawai(){
            $NIP = $this->input->post('nip');
            $NmPeg =$this->input->post('nama_pegawai');
            $AlmtPeg = $this->input->post('alamat');
            $TlpnPeg = $this->input->post('no_telp');
            $TglLhrPeg = $this->input->post('tanggal_lahir');
            $JKPeg = $this->input->post('jenis_kelamin');

            $data = $this->m_pegawai->simpan_pegawai($NIP, $NmPeg, $AlmtPeg, $TlpnPeg, $TglLhrPeg, $JKPeg);
            echo json_encode($data);
}

 function update_pegawai(){
            $NIP = $this->input->post('nip_edit');
            $NmPeg =$this->input->post('nama_pegawai_edit');
            $AlmtPeg = $this->input->post('alamat_edit');
            $TlpnPeg = $this->input->post('no_telp_edit');
            $TglLhrPeg = $this->input->post('tanggal_lahir_edit');
            $JKPeg = $this->input->post('jenis_kelamin_edit');

            $data = $this->m_pegawai->update_pegawai($NIP, $NmPeg, $AlmtPeg, $TlpnPeg, $TglLhrPeg, $JKPeg);
            echo json_encode($data);
}
            function hapus_pegawai(){
            $NIP = $this->input->post('kode');
            $data = $this->m_pegawai->hapus_pegawai($NIP);
            echo json_encode($NIP);


}
}
?>