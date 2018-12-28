<?php 
class Datajadwal extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_jadwal');
        
	}
	function index(){
        $data['kode_jadwal'] = $this->m_jadwal->getkodejadwal();
        $data['data_dokter_poli'] = $this->m_jadwal->getDataDokter();        

		$this->load->view('jadwal_page',$data);
	}
    function data_jadwal(){
        $data = $this->m_jadwal->jadwal_list();
        echo json_encode($data);
    }
    function get_jadwal(){
        $Kdjpraktek = $this->input->get('kdJPraktek');
        $data = $this->m_jadwal->get_jadwal_by_kdjpraktek($Kdjpraktek);
        echo json_encode($data);
    }
	    function simpan_jadwal(){
            $hari =$this->input->post('hari');
            $jamMulai = $this->input->post('jam_mulai');
            $jamSelesai = $this->input->post('jam_selesai');
            $kdDok = $this->input->post('kddok');

            $data = $this->m_jadwal->simpan_jadwal($hari, $jamMulai, $jamSelesai, $kdDok);
            echo json_encode($data);
}

 function update_jadwal(){
            $kdJPraktek = $this->input->post('kdjpraktek_edit');
            $hari =$this->input->post('hari_edit');
            $jamMulai = $this->input->post('jam_mulai_edit');
            $jamSelesai = $this->input->post('jam_selesai_edit');
            $kdDok = $this->input->post('kddok_edit');

            $data = $this->m_jadwal->update_jadwal($kdJPraktek, $hari, $jamMulai, $jamSelesai, $kdDok);
            echo json_encode($data);
}
            function hapus_jadwal(){
            $kdJPraktek = $this->input->post('kode');
            $data = $this->m_jadwal->hapus_jadwal($kdJPraktek);
            echo json_encode($kdJPraktek);


}
}
?>