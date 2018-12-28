<?php 
class Datadokter extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_dokter');
        
	}
	function index(){
        $data['kode_dokter'] = $this->m_dokter->getkodedokter();
        $data['data_poli'] = $this->m_dokter->getDataPoli();

		$this->load->view('dokter_page',$data);
	}
    function data_dokter(){
        $data = $this->m_dokter->dokter_list();
        echo json_encode($data);
    }
    function get_dokter(){
        $Kddok = $this->input->get('kdDok');
        $data = $this->m_dokter->get_dokter_by_kddok($Kddok);
        echo json_encode($data);
    }
	    function simpan_dokter(){
            $kdDok = $this->input->post('kddok');
            $NmDok =$this->input->post('nama_dokter');
            $AlmtDok = $this->input->post('alamat');
            $TlpnDok = $this->input->post('no_telp');
            $TglLhrDok = $this->input->post('tanggal_lahir');
            $kdPoli = $this->input->post('kdPoli');


            $data = $this->m_dokter->simpan_dokter($kdDok, $NmDok, $AlmtDok, $TlpnDok, $TglLhrDok, $kdPoli);
            echo json_encode($data);
}

 function update_dokter(){
            $kdDok = $this->input->post('kddok_edit');
            $NmDok =$this->input->post('nama_dokter_edit');
            $AlmtDok = $this->input->post('alamat_edit');
            $TlpnDok = $this->input->post('no_telp_edit');
            $TglLhrDok = $this->input->post('tanggal_lahir_edit');
            $kdPoli = $this->input->post('kdPoli_edit');

            $data = $this->m_dokter->update_dokter($kdDok, $NmDok, $AlmtDok, $TlpnDok, $TglLhrDok, $kdPoli);
            echo json_encode($data);
}
            function hapus_dokter(){
            $kdDok = $this->input->post('kode');
            $data = $this->m_dokter->hapus_dokter($kdDok);
            echo json_encode($kdDok);


}
}
?>