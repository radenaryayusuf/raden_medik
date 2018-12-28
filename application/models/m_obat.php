<?php 
class m_obat extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	
		function obat_list(){
			$query = $this->db->query("SELECT * from tb_obat");
			return $query->result();
		}

        function getkodeobat(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(kdObat,2,4)),0) + 1 As no_urut FROM tb_obat");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_obat = 'B'.sprintf("%04s",$no_urut);

        return $id_obat;
    }
	function simpan_obat($NmObat, $Merk, $Satuan, $Harga_Jual_Obat){
		$kdObat = $this->getkodeobat();
        $hasil = $this->db->query("INSERT into tb_obat (kdObat, NmObat, Merk, Satuan, HargaJualObat)Values('$kdObat', '$NmObat', '$Merk', '$Satuan', '$Harga_Jual_Obat')");
		return $hasil;
		}

		function get_obat_by_kdobat($Kdobat){
        $hsl=$this->db->query("SELECT * FROM tb_obat WHERE kdObat='$Kdobat'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'kdObat'=> $data->kdObat,
            		'NmObat'=>$data->NmObat,
            		'Merk'=>$data->Merk,
            		'Satuan'=>$data->Satuan,
           		 	'HargaJualObat'=>$data->HargaJualObat,
            );
            }
        }
        return $hasil;
    }

    function update_obat($kdObat, $NmObat, $Merk, $Satuan, $HargaJualObat){
		$hasil = $this->db->query("UPDATE tb_obat SET NmObat = '$NmObat', Merk = '$Merk', Satuan =  '$Satuan',  HargaJualObat = '$HargaJualObat' WHERE kdObat = '$kdObat'");
		return $hasil;
		}

	function hapus_obat($kdObat){
        $hasil=$this->db->query("DELETE FROM tb_obat WHERE kdObat='$kdObat'");
        return $hasil;
    }

	}
?>