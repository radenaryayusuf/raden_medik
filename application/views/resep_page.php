<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Resep </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Transaksi</a></li>
                    <li class="active"> Resep</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
             
            <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">HASIL PERIKSA</h3>
                                <div class="tools">
<a class="btn btn-social-icon btn-reddit" id="cari_periksa"><span class="di di-search" id="cari_periksa2"></span></a>
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>   
                                    <a class="btn-link expand" href="javascript:;"><i class="ti-fullscreen"></i></a>                                                                        
                                </div>
                            </div>
                            <div class="panel-body">
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">No Pendaftaran</label>
                                        <div id='nodaftar_val'><small><i>Tidak ada</i></small></div>
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tanggal</label>
                                        <div id='nama_pasien_val'><small><i>Tidak ada</i></small></div>
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">No Pasien</label>
                                        <div id='alamat_pas_val'><small><i>Tidak ada</i></small></div>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Pasien</label>
                                        <div id='tanggal_lahir_val'><small><i>Tidak ada</i></small></div>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Alamat</label>
                                        <div id='tanggal_lahir_val'><small><i>Tidak ada</i></small></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    
            <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">INFO PEMERIKSAAN</h3>
                                <div class="tools">
<!-- <a class="btn btn-social-icon btn-reddit" id="cari_pasien"><span class="di di-search" id="cari_pasien2"></span></a>
 -->                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>   
                                    <a class="btn-link expand" href="javascript:;"><i class="ti-fullscreen"></i></a>                                                                        
                                </div>
                            </div>
                            <div class="panel-body">
<form role="form" id="f-pemeriksaan">
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Keluhan</label>
                                        <textarea class="form-control" style="width:600px" name="keluhan" id="keluhan_id" rows="4" warningLen="5" data-warningColor="#E03B30"></textarea>
                                        <input type="hidden" name="nodaftar_input" id="nodaftar">
                                        
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Berat Badan</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" style="width:100px" id="berat_badan" name="berat_badan"  onkeypress="return hanyaAngka(event)">
                                        <span class="input-group-addon" style="width:50px">Kg</span>
                                    </div>
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tensi Sistolik</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" style="width:100px" id="tensi_sistolik" name="tensi_sistolik"  onkeypress="return hanyaAngka(event)">
                                        <span class="input-group-addon" style="width:50px">mmHg</span>
                                    </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Tensi Diastolik</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" style="width:100px" id="tensi_diastolik" name="tensi_diastolik"  onkeypress="return hanyaAngka(event)">
                                        <span class="input-group-addon" style="width:50px">mmHg</span>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Diagnosa</label>
                                    <input type="text" class="form-control" style="width:600px" name="diagnosa" id="diagnosa" placeholder="Diagnosa">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Tindakan</label>
                                    <input type="text" class="form-control" style="width:600px" name="tindakan" id="tindakan" placeholder="Tindakan">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Perawatan</label>
                                    <input type="text" class="form-control" style="width:600px" name="perawatan" id="perawatan" placeholder="Perawatan" >
                                    </div>
<br>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <div class="col-xs-9"></div>
                               <button type="button" class="btn btn-labeled btn-success "><span class="btn-label"><i class="ti-reload"></i></span>Ulangi</button> 
                                <button type="submit" class="btn btn-labeled btn-secondary" id="proses_button"><span class="btn-label"><i class="ti-save"></i></span>Proses</button>
                            </form>
                            <br>
                            <br>
                            </div>
                        </div>
                    </div>
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
      
    <div class="modal modal-secondary fade" id="ModalCari" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cari Pasien</h4>
                </div>
                <div class="modal-body">
                 <table class="table table-bordered table-dataTable" id="datapasien" border="1" width="870px">
                                    <thead>
                                        <tr>
                                            <th>No Pendaftaran</th>
                                            <th>Tanggal</th>
                                            <th>No Pasien</th>
                                            <th>Nama Pasien</th>
                                            <th>Alamat</th>
                                            <th>Commands</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php 
                               foreach ($data_periksa as $p) {
                                 echo "<tr>";
                                 echo "<td>".$p['noPendaftaran']."</td>";
                                 echo "<td>".$p['TglPendaftaran']."</td>";
                                 echo "<td>".$p['NoPasien']."</td>";
                                 echo "<td>".$p['nmPas']."</td>";
                                 echo "<td>".$p['AlmtPas']."</td>";
                                 echo "<td style='text-align:center'><input type = 'button'  value ='Pilih' class ='btn btn-primary  pilih-pasien'></td>";
                                 echo "</tr>";
                              }
                                ?>
                         
                                    </tbody>
                                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Update Pasien -->

    <div class="modal modal-secondary fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
                </div>
                <div class="modal-body">
                 <input type="hidden" name="kode" id="textkode" value="">
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus Obat ini?</p></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="btn_hapus">Hapus</button>
                </div>
            </div>
        </div>
    </div>
  <?php 
$this->load->view('parts/footer');
        ?>

        <script>
     function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
            $(document).ready(function(){
            $('#cari_periksa').on('click',function(){

           $('#ModalCari').modal();
           
        });
             $(function(){
 $(document).on('click','.pilih-pasien',function(){
     var noPendaftaran = $(this).closest('tr').find('td:eq(0)').text();
     var NmPas = $(this).closest('tr').find('td:eq(1)').text();
     var AlmtPas = $(this).closest('tr').find('td:eq(2)').text();
     var TglLhrPas = $(this).closest('tr').find('td:eq(3)').text();
     var JKPas = $(this).closest('tr').find('td:eq(4)').text();
     $('#nodaftar_val').html(noPendaftaran);
     $('#nodaftar').val(noPendaftaran);
     $('#nama_pasien_val').html(NmPas);
     $('#alamat_pas_val').html(AlmtPas);
     $('#tanggal_lahir_val').html(TglLhrPas);
     $('#jenis_kelamin_val').html(JKPas);
     $('#ModalCari').modal('hide');
 

    });
 });
             $('#f-pemeriksaan').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url()?>index.php/pemeriksaan/proses',
                type: "POST",
                data: $('#f-pemeriksaan').serializeArray(), //serialize() untuk mengambil semua data di dalam form
                dataType: "html",
                success: function(){      
            window.alert('input berhasil mang');

            },
            error: function(){
                window.alert('Gagal mang');
            }
});
   });

           });
  </script>