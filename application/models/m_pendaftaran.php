<?php 
class m_pendaftaran extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	function getJadwalDokter(){
            $query = $this->db->get('v_jpraktek'); 

            return $query->result_array();
        }

        function get_nopendaftaran(){
        	$tgl = date('Ymd');
        	$query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(noPendaftaran,9,3)),0) + 1 As no_urut FROM tb_pendaftaran
            WHERE SUBSTRING(noPendaftaran,1,8) = '".$tgl."'");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $no_pendaftaran = $tgl.sprintf("%03d",$no_urut);

        return $no_pendaftaran;

        }
        // function get_kode_detail(){
        // 	$tgl = date('Ymd');
        // 	$query = $this->db->query(
        //     "SELECT IFNULL(MAX(SUBSTRING(kode_det_biaya,8,3)),0) + 1 As no_urut FROM tb_detbiaya
        //     WHERE SUBSTRING(kode_det_biaya,1,8) = '".$tgl."'");

        // $data = $query->row_array();
        // $no_urut = $data['no_urut'];
        // $kode_detail = sprintf("%03d",$no_urut);

        // return $kode_detail;

        // }
          function prosespendaftaran(){
        $noPendaftaran = $this->get_nopendaftaran();
        $no_URUTS = $this->get_nourut();
        $NIP_input = $this->session->userdata('username');
    $data_daftar = array(
    'noPendaftaran' => $noPendaftaran,
    'TglPendaftaran' => date('Y-m-d'),
    'NoUrut' => $no_URUTS,
    'NIP' => $this->input->post('NIP'),
    'kdJPraktek' => $this->input->post('kdJPraktek_input'),
    'NoPasien' => $this->input->post('nama_pasien')
);
$this->db->insert('tb_pendaftaran',$data_daftar);

}
               function getDataBelumPeriksa(){
            $query = $this->db->get('v_belum_diperiksa'); 

            return $query->result_array();
        }
        function get_nourut(){
        	$tgl = date('Ymd');
        	$query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(NoUrut,1,3)),0) + 1 As no_urut FROM tb_pendaftaran
            WHERE SUBSTRING(noPendaftaran,1,8) = '".$tgl."'");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $no_urut_pendaftaran = sprintf("%03d",$no_urut);

        return $no_urut_pendaftaran;

        }
        function get_pegawai(){
        	$NIP = $this->session->userdata('username');
			$result = $this->db->select('NmPeg')->from('tb_pegawai')->where('NIP', $NIP)->limit(1)->get()->row();
		$nama_pegawai =  $result->NmPeg;

		return $nama_pegawai;
	        }
	function get_all()
	{
		return $this->db
			->select('NoPasien, NmPas, AlmtPas, TlpnPas, JKPas')
			->order_by('NmPas','asc')
			->get('tb_pasien');
	}
	function get_baris($NoPasien)
	{
		return $this->db
			->select('NoPasien, NmPas, AlmtPas, TlpnPas, JKPas')
			->where('NoPasien', $NoPasien)
			->limit(1)
			->get('tb_pasien');
	}
	
		

	}
?>