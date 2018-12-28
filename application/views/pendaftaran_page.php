<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Pendaftaran </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Transaksi</a></li>
                    <li class="active"> Pendaftaran</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                                        <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pendaftaran</h3>
                            </div>
                            <div class="panel-body no-padding">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1_1" data-toggle="tab" aria-expanded="false"> Pendaftaran </a></li>
                                    <li class=""><a href="#tab_1_2" data-toggle="tab" aria-expanded="true"> Data</a></li>
                                    
                                </ul>
                                <div class="tab-content">
                                  
                                    <div class="tab-pane fade active in" id="tab_1_1">
                                         
                                        <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Informasi Pasien</h3>
                            </div>
                          

                            <div class="panel-body ">
 <form role="form" id="f-pendaftaran"> 
                                    
                                    <div class="form-group" id="test">
                                        <label>Nama Pasien</label>

                                    
                                        <select class="form-control select2Search" name="nama_pasien" id="nama_pasien">
                                            
                                                <option>Pilih Pasien</option>
                                            <?php
                                    if($data_pasien->num_rows() > 0)
                                    {
                                        foreach($data_pasien->result() as $p)
                                        {
                                            echo "<option value='".$p->NoPasien."'>".$p->NmPas."</option>";
                                        }
                                    }
                                    ?>
                                        </select>
                                        </div>
                                    <!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Alamat</label>
                                        <div id='alamat'><small><i>Tidak ada</i></small></div>
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">No Telp</label>
                                        <div id='no_telp'><small><i>Tidak ada</i></small></div>
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                                        <div id='jenis_kelamin'><small><i>Tidak ada</i></small></div>
                                    </div>
                                    
                            
                                    
                                
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Informasi Jadwal Praktek</h3> 
                            </div>
                            <div class="panel-body">
                                
                     
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Kode Jadwal</label>
                                        <input type="hidden" name="kdJPraktek_input" id="kdJPraktek2">
                                        <div id='kdJPraktek'><small><i>Tidak ada</i></small></div>
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hari</label>
                                        <div id='hari'><small><i>Tidak ada</i></small></div>
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jam Mulai - Selesai</label>
                                        <div id='jamMulai-Selesai'><small><i>Tidak ada</i></small></div>
                                    </div><!-- 
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Jam Selesai</label>
                                        <div id='jamSelesai'><small><i>Tidak ada</i></small></div>
                                    </div> -->
                                    <div class="form-group" id="test">
                                    <label for="exampleInputPassword1">Nama Dokter</label>
                                        <div id='NmDok'><small><i>Tidak ada</i></small></div>

                                    </div>
                            
                               
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Informasi Pendaftaran</h3> 
                            </div>
                            <div class="panel-body">
                                
                             
                                    
                                                                      <!-- /form-group -->
                                                                      <!-- /form-group -->
                                   
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">No Urut</label>
                                        <input type="hidden" name="nourut_input" value="<?php echo $no_urut?>">
                                        <div id='NoUrut'><small><i><?php echo $no_urut?></i></small></div>
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tanggal Pendaftaran</label>
                                        <div id='TglPendaftaran'><small><i><?php echo $tglsekarang?></i></small></div>
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">NIP</label>
                                        <input type="hidden" name="NIP" value="<?php echo $this->session->userdata('username'); ?>">
                                        <div id='NIP'><small><i><?php echo $this->session->userdata('username'); ?></i></small></div>
                                    </div>
                                    <div class="form-group" id="test">
                                    <label for="exampleInputPassword1">Nama Pegawai</label>
                                        <div id='nama_dokter'><small><i><?php echo $nama_pegawai?></i></small></div>

                                    </div>
                            
                                    
                                    
                             
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <div class="col-xs-9"></div>
                               <button type="button" class="btn btn-labeled btn-success "><span class="btn-label"><i class="ti-reload"></i></span>Ulangi</button> 
                                <button type="submit" class="btn btn-labeled btn-secondary" id="proses_button"><span class="btn-label"><i class="ti-save"></i></span>Proses</button> 
                            </form>
                                </div>


                            </div>


                        </div>

                    

                                    </div>
                                    <div class="tab-pane fade" id="tab_1_2">
                                
                                  <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Pasien Belum Diperiksa</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>                                    
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-dataTable">
                                    <thead>
                                        <tr>
                                            <th>No Pendaftaran</th>
                                            <th>Tanggal Pendaftaran</th>
                                            <th>No Urut</th>
                                            <th>No Pasien</th>
                                            <th>Nama Pasien</th>
                                            <th>Alamat Pasien</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No Pendaftaran</th>
                                            <th>Tanggal Pendaftaran</th>
                                            <th>No Urut</th>
                                            <th>No Pasien</th>
                                            <th>Nama Pasien</th>
                                            <th>Alamat Pasien</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                            <?php 
                               foreach ($data_belum_periksa as $p) {
                                 echo "<tr>";
                                 echo "<td>".$p['noPendaftaran']."</td>";
                                 echo "<td>".$p['TglPendaftaran']."</td>";
                                 echo "<td>".$p['NoUrut']."</td>";
                                 echo "<td>".$p['NoPasien']."</td>";
                                 echo "<td>".$p['nmPas']."</td>";
                                 echo "<td>".$p['AlmtPas']."</td>";
                                 echo "<td style='text-align:center'><input type = 'button'  value ='Rincian' class ='btn btn-secondary  rincian'></td>";
                                 echo "</tr>";
                              }
                                ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                       
                                    </div>
                                </div>
                            </div>
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
                    <h4 class="modal-title" id="myModalLabel">Tentukan Jadwal Praktek</h4>
                </div>
                <div class="modal-body">
                 <table class="table table-bordered table-dataTable" id="datapoli" border="1" width="870px">
                                    <thead>
                                        <tr>
                                            <th>Kode Jadwal</th>
                                            <th>Hari</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                            <th>Nama Dokter</th>
                                            <th>Commands</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php 
                               foreach ($data_jadwal_dokter as $p) {
                                 echo "<tr>";
                                 echo "<td>".$p['kdJPraktek']."</td>";
                                 echo "<td>".$p['hari']."</td>";
                                 echo "<td>".$p['jamMulai']."</td>";
                                 echo "<td>".$p['jamSelesai']."</td>";
                                 echo "<td>".$p['nmDok']."</td>";
                                 echo "<td style='text-align:center'><input type = 'button'  value ='Pilih' class ='btn btn-primary  pilih-dokter'></td>";
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
    
            $(document).ready(function(){
                $('#test select').change(function(){
        if($(this).val() !== '')
        {
            $.ajax({
                url: "<?=site_url("pendaftaran/munculdata_pasien")?>",
                type: "POST",
                cache: false,
                data: "NoPasien="+$(this).val(),
                dataType:'json',
                success: function(json){
                    $('#alamat').html(json.AlmtPas);
                    $('#no_telp').html(json.TlpnPas);

                    $('#jenis_kelamin').html(json.JKPas);
                         $('#ModalCari').modal();
                }
            });
        }
        else
        {
            $('#no_telp').html('<small><i>Tidak ada</i></small>');
            $('#alamat').html('<small><i>Tidak ada</i></small>');
            $('#jenis_kelamin').html('<small><i>Tidak ada</i></small>');
             $('#kdJPraktek').html('<small><i>Tidak ada</i></small>');
             $('#hari').html('<small><i>Tidak ada</i></small>');
             $('#jamMulai-Selesai').html('<small><i>Tidak ada</i></small>');
             $('#NmDok').html('<small><i>Tidak ada</i></small>');
        }
    });
                         $(function(){
 $(document).on('click','.pilih-dokter',function(){
     var kdJPraktek = $(this).closest('tr').find('td:eq(0)').text();
     var hari = $(this).closest('tr').find('td:eq(1)').text();
     var jamMulai = $(this).closest('tr').find('td:eq(2)').text();
     var jamSelesai = $(this).closest('tr').find('td:eq(3)').text();
     var NmDok = $(this).closest('tr').find('td:eq(4)').text();
     $('#kdJPraktek').html(kdJPraktek);
     $('#kdJPraktek2').val(kdJPraktek);
     $('#hari').html(hari);
     $('#jamMulai-Selesai').html(jamMulai+' - '+jamSelesai);
     $('#NmDok').html(NmDok);
     $('#ModalCari').modal('hide');
 

    });
 });
  // $(document).on('click','#proses_button',function(e){
  //     e.preventDefault();
  //     var url = "<?php echo site_url() ?>/pendaftaran/proses";
  //     $.post(url,$('#f-pendaftaran').serializeArray(),function(i){
  //       alert(i);
  //     });
  //   });
$('#f-pendaftaran').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url()?>index.php/pendaftaran/proses',
                type: "POST",
                data: $('#f-pendaftaran').serializeArray(), //serialize() untuk mengambil semua data di dalam form
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