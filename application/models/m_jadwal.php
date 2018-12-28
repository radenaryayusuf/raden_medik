<?php 
class m_jadwal extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function jadwal_list(){
			$query = $this->db->query("SELECT tb_jpraktek.kdJPraktek , tb_jpraktek.hari , tb_jpraktek.jamMulai, tb_jpraktek.jamSelesai, tb_dokter.kdDok, tb_dokter.NmDok from tb_dokter inner join tb_jpraktek on tb_dokter.kdDok = tb_jpraktek.kdDok group by tb_jpraktek.kdJPraktek , tb_jpraktek.hari , tb_jpraktek.jamMulai, tb_jpraktek.jamSelesai, tb_dokter.kdDok, tb_dokter.NmDok");
			return $query->result();
		}
                function getDataDokter(){
             $query = $this->db->get('tb_dokter'); 

            return $query->result_array();
        }

        function getkodejadwal(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(kdJPraktek,2,4)),0) + 1 As no_urut FROM tb_jpraktek");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_jadwal = 'J'.sprintf("%04s",$no_urut);

        return $id_jadwal;
    }
	function simpan_jadwal($hari, $jamMulai, $jamSelesai, $kdDok){
        $kdJPraktek = $this->getkodejadwal();
		$hasil = $this->db->query("INSERT into tb_jpraktek (kdJPraktek, hari, jamMulai, jamSelesai, kdDok)Values('$kdJPraktek', '$hari', '$jamMulai', '$jamSelesai', '$kdDok')");
		return $hasil;
		}

		function get_jadwal_by_kdjpraktek($Kdjpraktek){
        $hsl=$this->db->query("SELECT * FROM tb_jpraktek WHERE kdJPraktek='$Kdjpraktek'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'kdJPraktek'=> $data->kdJPraktek,
            		'hari'=>$data->hari,
            		'jamMulai'=>$data->jamMulai,
            		'jamSelesai'=>$data->jamSelesai,
           		 	'kdDok'=>$data->kdDok
            );
            }
        }
        return $hasil;
    }

    function update_jadwal($kdJPraktek, $hari, $jamMulai, $jamSelesai, $kdDok){
		$hasil = $this->db->query("UPDATE tb_jpraktek SET hari = '$hari', jamMulai = '$jamMulai', jamSelesai =  '$jamSelesai',  kdDok = '$kdDok' WHERE kdJPraktek = '$kdJPraktek'");
		return $hasil;
		}

	function hapus_jadwal($kdJPraktek){
        $hasil=$this->db->query("DELETE FROM tb_jpraktek WHERE kdJPraktek='$kdJPraktek'");
        return $hasil;
    }

	}
?>