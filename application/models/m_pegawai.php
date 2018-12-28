<?php 
class m_pegawai extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function pegawai_list(){
			$query = $this->db->query("SELECT * from tb_pegawai");
			return $query->result();
		}
	function simpan_pegawai($NIP, $NmPeg, $AlmtPeg, $TlpnPeg, $TglLhrPeg, $JKPeg){
		$hasil = $this->db->query("INSERT into tb_pegawai (NIP, NmPeg, AlmtPeg, TlpnPeg, TglLhrPeg, JKPeg)Values('$NIP', '$NmPeg', '$AlmtPeg', '$TlpnPeg', '$TglLhrPeg', '$JKPeg')");
		return $hasil;
		}

		function get_pegawai_by_nip($Nip){
        $hsl=$this->db->query("SELECT * FROM tb_pegawai WHERE NIP='$Nip'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'NIP'=> $data->NIP,
            		'NmPeg'=>$data->NmPeg,
            		'AlmtPeg'=>$data->AlmtPeg,
            		'TlpnPeg'=>$data->TlpnPeg,
           		 	'TglLhrPeg'=>$data->TglLhrPeg,
            		'JKPeg'=>$data->JKPeg
            );
            }
        }
        return $hasil;
    }

    function update_pegawai($NIP, $NmPeg, $AlmtPeg, $TlpnPeg, $TglLhrPeg, $JKPeg){
		$hasil = $this->db->query("UPDATE tb_pegawai SET NmPeg = '$NmPeg', AlmtPeg = '$AlmtPeg', TlpnPeg =  '$TlpnPeg',  TglLhrPeg = '$TglLhrPeg', JKPeg =  '$JKPeg' WHERE NIP = '$NIP'");
		return $hasil;
		}

	function hapus_pegawai($NIP){
        $hasil=$this->db->query("DELETE FROM tb_pegawai WHERE NIP='$NIP'");
        return $hasil;
    }

	}
?>