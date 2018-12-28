<?php 
class m_dokter extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function dokter_list(){
			$query = $this->db->query("SELECT tb_dokter.kdDok, tb_dokter.NmDok, tb_dokter.AlmtDok, tb_dokter.TlpnDok, tb_dokter.TglLhrDok, tb_poliklinik.NmPoli from tb_poliklinik inner join tb_dokter on tb_poliklinik.kdPoli = tb_dokter.kdPoli group by tb_dokter.kdDok, tb_dokter.NmDok, tb_dokter.AlmtDok, tb_dokter.TlpnDok, tb_dokter.TglLhrDok, tb_poliklinik.NmPoli");
			return $query->result();
		}
                function getDataPoli(){
            $query = $this->db->get('tb_poliklinik'); 

            return $query->result_array();
        }

        function getkodedokter(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(kdDok,2,4)),0) + 1 As no_urut FROM tb_dokter");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_dokter = 'D'.sprintf("%04s",$no_urut);

        return $id_dokter;
    }
	function simpan_dokter($kdDok, $NmDok, $AlmtDok, $TlpnDok, $TglLhrDok, $kdPoli){
		$hasil = $this->db->query("INSERT into tb_dokter (kdDok, NmDok, AlmtDok, TlpnDok, TglLhrDok, kdPoli)Values('$kdDok', '$NmDok', '$AlmtDok', '$TlpnDok', '$TglLhrDok', '$kdPoli')");
		return $hasil;
		}

		function get_dokter_by_kddok($Kddok){
        $hsl=$this->db->query("SELECT * FROM tb_dokter WHERE kdDok='$Kddok'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'kdDok'=> $data->kdDok,
            		'NmDok'=>$data->NmDok,
            		'AlmtDok'=>$data->AlmtDok,
            		'TlpnDok'=>$data->TlpnDok,
           		 	'TglLhrDok'=>$data->TglLhrDok,
            		'kdPoli'=>$data->kdPoli
            );
            }
        }
        return $hasil;
    }

    function update_dokter($kdDok, $NmDok, $AlmtDok, $TlpnDok, $TglLhrDok, $kdPoli){
		$hasil = $this->db->query("UPDATE tb_dokter SET NmDok = '$NmDok', AlmtDok = '$AlmtDok', TlpnDok =  '$TlpnDok',  TglLhrDok = '$TglLhrDok', kdPoli =  '$kdPoli' WHERE kdDok = '$kdDok'");
		return $hasil;
		}

	function hapus_dokter($kdDok){
        $hasil=$this->db->query("DELETE FROM tb_dokter WHERE kdDok='$kdDok'");
        return $hasil;
    }

	}
?>