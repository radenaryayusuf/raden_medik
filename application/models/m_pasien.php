<?php 
class m_pasien extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function pasien_list(){
			$query = $this->db->query("SELECT * from tb_pasien");
			return $query->result();
		}
        function getkodepasien(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(NoPasien,2,4)),0) + 1 As no_urut FROM tb_pasien");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_pasien = 'P'.sprintf("%04s",$no_urut);

        return $id_pasien;
    }
	function simpan_pasien($NoPasien, $NmPas, $AlmtPas, $TlpnPas, $TglLhrPas, $JKPas){
        $tglsekarang = date('Y:m:d');
		$hasil = $this->db->query("INSERT into tb_pasien (NoPasien, NmPas, AlmtPas, TlpnPas, TglLhrPas, JKPas,TglReg)Values('$NoPasien', '$NmPas', '$AlmtPas', '$TlpnPas', '$TglLhrPas', '$JKPas', '$tglsekarang')");
		return $hasil;
		}

		function get_pasien_by_nopasien($Nopasien){
        $hsl=$this->db->query("SELECT * FROM tb_pasien WHERE NoPasien='$Nopasien'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'NoPasien'=> $data->NoPasien,
            		'NmPas'=>$data->NmPas,
            		'AlmtPas'=>$data->AlmtPas,
            		'TlpnPas'=>$data->TlpnPas,
           		 	'TglLhrPas'=>$data->TglLhrPas,
            		'JKPas'=>$data->JKPas
            );
            }
        }
        return $hasil;
    }

    function update_pasien($NoPasien, $NmPas, $AlmtPas, $TlpnPas, $TglLhrPas, $JKPas){
		$hasil = $this->db->query("UPDATE tb_pasien SET NmPas = '$NmPas', AlmtPas = '$AlmtPas', TlpnPas =  '$TlpnPas',  TglLhrPas = '$TglLhrPas', JKPas =  '$JKPas' WHERE NoPasien = '$NoPasien'");
		return $hasil;
		}

	function hapus_pasien($NoPasien){
        $hasil=$this->db->query("DELETE FROM tb_pasien WHERE NoPasien='$NoPasien'");
        return $hasil;
    }

	}
?>