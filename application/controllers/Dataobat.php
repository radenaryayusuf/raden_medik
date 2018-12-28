<?php 
class Dataobat extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_obat');
        
	}
	function index(){
        $data['kode_obat'] = $this->m_obat->getkodeobat();
        
		$this->load->view('obat_page',$data);
	}
    function data_obat(){
        $data = $this->m_obat->obat_list();
        echo json_encode($data);
    }
    function get_obat(){
        $Kdobat = $this->input->get('kdObat');
        $data = $this->m_obat->get_obat_by_kdobat($Kdobat);
        echo json_encode($data);
    }
	    function simpan_obat(){
            $NmObat =$this->input->post('nama_obat');
            $Merk = $this->input->post('merk');
            $Satuan = $this->input->post('satuan');
            $HargaJualObat = $this->input->post('harga_jual');


            $data = $this->m_obat->simpan_obat($NmObat, $Merk, $Satuan, $HargaJualObat);
            echo json_encode($data);
}

 function update_obat(){
            $kdObat = $this->input->post('kdobat_edit');
            $NmObat =$this->input->post('nama_obat_edit');
            $Merk = $this->input->post('merk_edit');
            $Satuan = $this->input->post('satuan_edit');
            $HargaJualObat = $this->input->post('harga_jual_edit');


            $data = $this->m_obat->update_obat($kdObat, $NmObat, $Merk, $Satuan, $HargaJualObat);
            echo json_encode($data);
}
            function hapus_obat(){
            $kdObat = $this->input->post('kode');
            $data = $this->m_obat->hapus_obat($kdObat);
            echo json_encode($kdObat);


}
}
?>