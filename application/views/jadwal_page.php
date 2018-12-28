<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Jadwal Praktek </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Jadwal Praktek </li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                             <button type="button" class="btn btn-labeled btn-secondary" data-toggle="modal" data-target="#myModal8"><span class="btn-label"><i class="fa fs-user-plus"></i></span>Tambahkan Data</button> 
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>                                  
                                </div>
                            </div>

                            <div class="panel-body">
                              <div id="reload">
                               <table class="table table-bordered table-dataTable" id="mydata">
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
                                    <tbody id="show_data">

                                    </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                </div>
                    
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
        <div class="modal modal-secondary fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Jadwal Praktek</h4>
                </div>
                <div class="modal-body">
                    <form role="form" id="insert_jadwal">
                                    <div class="form-body">

                                        
                                        <div class="form-group">
                                        <label>Hari</label><br>
                                            <select name="hari" class="form-control custom-Select" id="hari">
                                                <option value="MINGGU">MINGGU</option>
                                                <option value="SENIN">SENIN</option>
                                                <option value="SELASA">SELASA</option>
                                                <option value="RABU">RABU</option>
                                                <option value="KAMIS">KAMIS</option>
                                                <option value="JUM'AT">JUM'AT</option>
                                                <option value="SABTU">SABTU</option>
                                            </select>
                                        </div>
                                    

                                        <div class="form-group">
                                    <label>Jam Mulai</label>
                                    <div class="input-group bootstrap-timepicker timepicker">
                                        
                                        <input type="text" class="form-control time-picker" id="jam_mulai" name="jam_mulai">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div>

                                         <div class="form-group">
                                    <label>Jam Selesai</label>
                                    <div class="input-group bootstrap-timepicker timepicker">
                                        
                                        <input type="text" id="jam_selesai" name="jam_selesai" class="form-control time-picker">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div>

                                        <div class="form-group">
                                            <label>Pilih Dokter</label>
                                        </div>
                                   <div class="input-group">

                                        <input type="text" class="form-control" name="kddok" id="kddok" placeholder="Kode Dokter" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#ModalCari">Cari</button>
                                        </span>
                                    </div><!-- /input-group -->
<br>
                                        <div class="form-group">
                                            <input type="text" class="form-control validate[required]" name="nama_dokter" id="nama_dokter" placeholder="Nama Dokter" data-prompt-position="topLeft" readonly>
                                        </div>
                                        
                                    </div>

                                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="btn_simpan">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Update Pasien -->
     <div class="modal modal-secondary fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Jadwal Praktek</h4>
                </div>
                <div class="modal-body">
                    <form action="#" role="form" id="update_jadwal">
                                    <div class="form-body">

                                        <div class="form-group">
                                        <label>Hari</label><br>
                                            <select name="hari_edit" class="form-control custom-Select" id="hari2">
                                                <option value="MINGGU">MINGGU</option>
                                                <option value="SENIN">SENIN</option>
                                                <option value="SELASA">SELASA</option>
                                                <option value="RABU">RABU</option>
                                                <option value="KAMIS">KAMIS</option>
                                                <option value="JUM'AT">JUM'AT</option>
                                                <option value="SABTU">SABTU</option>
                                            </select>
                                        </div>
                                    

                                        
                                         <div class="form-group">
                                    <label>Jam Mulai</label>
                                    <div class="input-group bootstrap-timepicker timepicker">
                                        
                                        <input type="text" id="jam_selesai2" name="jam_selesai_edit" class="form-control time-picker">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div>

                                        
                                         <div class="form-group">
                                    <label>Jam Selesai</label>
                                    <div class="input-group bootstrap-timepicker timepicker">
                                        
                                        <input type="text" id="jam_selesai2" name="jam_selesai_edit" class="form-control time-picker">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div>

                                        <div class="form-group">
                                            <label>Pilih Dokter</label>
                                        </div>
                                   <div class="input-group">

                                        <input type="text" class="form-control" name="kddok_edit" id="kddok2" placeholder="Kode Dokter" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#ModalCari">Cari</button>
                                        </span>
                                    </div><!-- /input-group -->
<br>
                                        <div class="form-group">
                                            <input type="text" class="form-control validate[required]" name="nama_dokter_edit" id="nama_dokter2" placeholder="Nama Dokter" data-prompt-position="topLeft" readonly>
                                        </div>
                                   
                                        
                                    </div>

                                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" id="btn_update">Update</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-secondary fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
                </div>
                <div class="modal-body">
                 <input type="hidden" name="kode" id="textkode" value="">
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus Jadwal ini?</p></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="btn_hapus">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal modal-secondary fade" id="ModalCari" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cari Dokter</h4>
                </div>
                <div class="modal-body">
                 <table class="table table-bordered table-dataTable" id="datadokter" border="1" width="870px">
                                    <thead>
                                        <tr>
                                            <th>Kode Dokter</th>
                                            <th>Nama Dokter</th>
                                            <th>Kode Poliklinik</th>

                                            <th>Commands</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php 
                               foreach ($data_dokter_poli as $p) {
                                 echo "<tr>";
                                 echo "<td>".$p['kdDok']."</td>";
                                 echo "<td>".$p['NmDok']."</td>";
                                 echo "<td>".$p['kdPoli']."</td>";
 
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
              tampil_data_jadwal();
   
function tampil_data_jadwal(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Datajadwal/data_jadwal',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].kdJPraktek+'</td>'+
                                '<td>'+data[i].hari+'</td>'+
                                '<td>'+data[i].jamMulai+'</td>'+
                                '<td>'+data[i].jamSelesai+'</td>'+
                                '<td>'+data[i].NmDok+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-danger btn-md item_hapus" data="'+data[i].kdJPraktek+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
        //Simpan Barang
        // {NoPasien:NoPasien , NmPas:NmPas, AlmtPas:AlmtPas, TlpnPas:TlpnPas, TglLhrPas:TglLhrPas, JKPas:JKPas},
        $('#btn_simpan').on('click',function(){
            var hari=$('#hari').val();
            var jamMulai=$('#jam_mulai').val();
            var jamSelesai = $('#jam_selesai').val();
            var kdDok = $('#kddok').val();
            var datanya = $('#insert_jadwal').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datajadwal/simpan_jadwal')?>",
                dataType : "JSON",
                data : datanya,
                success: function(data){
                    $('#insert_jadwal')[0].reset();
                    $('#myModal8').modal('hide');
                    tampil_data_jadwal();
                }
            });
            return false;
        });
 
        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });
  $('#btn_cari').on('click',function(){

           $('#ModalCari').modal();
           
        });
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/Datajadwal/hapus_jadwal')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_jadwal();
                    }
                });
                return false;
            });
         $(function(){
 $(document).on('click','.pilih-dokter',function(){
     var kdDok = $(this).closest('tr').find('td:eq(0)').text();
     var NmDok = $(this).closest('tr').find('td:eq(1)').text();
     $('#kddok').val(kdDok);
     $('#kddok2').val(kdDok);
     $('#nama_dokter').val(NmDok);
     $('#nama_dokter2').val(NmDok);
     $('#ModalCari').modal('hide');
 

    });
 });
           });
  </script>