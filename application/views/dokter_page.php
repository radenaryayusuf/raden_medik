<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Data Dokter</h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Data Dokter</li>
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
                                            <th>Kode Dokter</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Phone</th>
                      <th>Tanggal Lahir</th>
                      <th>Nama Poliklinik</th>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Dokter</h4>
                </div>
                <div class="modal-body">
                    <form role="form" id="insert_dokter">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>Kode Dokter</label>
                                            <input type="text" class="form-control validate[required]" name="kddok" id="kddok" placeholder="Kode Dokter" value="<?php echo $kode_dokter?>" data-prompt-position="topLeft" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Dokter</label>
                                            <input type="text" class="form-control validate[required]" name="nama_dokter" id="nama_dokter" placeholder="Nama Dokter" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control validate[required]" name="alamat" id="alamat" placeholder="Alamat" data-prompt-position="topLeft"></textarea  >
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control validate[required]" name="no_telp" id="phone" placeholder="Phone" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control date-picker" id="tanggal_lahir" name="tanggal_lahir" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy">
                                        </div>
                                        <div class="form-group">
                                            <label>Poliklinik</label>
                                        </div>
                                   <div class="input-group">

                                        <input type="text" class="form-control" name="kdPoli" id="kdPoli" placeholder="Kode Poliklinik" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#ModalCari">Cari</button>
                                        </span>
                                    </div><!-- /input-group -->
<br>
                                        <div class="form-group">
                                            <input type="text" class="form-control validate[required]" name="nama_poli" id="nama_poli" placeholder="Nama Poliklinik" data-prompt-position="topLeft" readonly>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Dokter</h4>
                </div>
                <div class="modal-body">
                    <form action="#" role="form" id="update_dokter">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>Kode Dokter</label>
                                            <input type="text" class="form-control validate[required]" name="kddok_edit" id="kddok2" placeholder="Kode Dokter" data-prompt-position="topLeft" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Dokter</label>
                                            <input type="text" class="form-control validate[required]" name="nama_dokter_edit" id="nama_dokter2" placeholder="Nama Dokter" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control validate[required]" name="alamat_edit" id="alamat2" placeholder="Alamat" data-prompt-position="topLeft"></textarea  >
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control validate[required]" name="no_telp_edit" id="phone2" placeholder="Phone" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control date-picker" id="tanggal_lahir2" name="tanggal_lahir_edit" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy">
                                        </div>

                                        <div class="input-group">

                                        <input type="text" class="form-control" name="kdPoli_edit" id="kdPoli2" placeholder="Kode Poliklinik" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button" name="btn_cari_edit" id="btn_cari">Cari</button>
                                        </span>
                                    </div><!-- /input-group -->
<br>
                                        <div class="form-group">
                                            <input type="text" class="form-control validate[required]" name="nama_poli_edit" id="nama_poli2" placeholder="Nama Poliklinik" data-prompt-position="topLeft" readonly>
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
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus Dokter ini?</p></div>
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
                    <h4 class="modal-title" id="myModalLabel">Cari Poliklinik</h4>
                </div>
                <div class="modal-body">
                 <table class="table table-bordered table-dataTable" id="datapoli" border="1" width="870px">
                                    <thead>
                                        <tr>
                                            <th>Kode Poliklinik</th>
                                            <th>Nama Poliklinik</th>
                                            <th>Commands</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php 
                               foreach ($data_poli as $p) {
                                 echo "<tr>";
                                 echo "<td>".$p['kdPoli']."</td>";
                                 echo "<td>".$p['NmPoli']."</td>";
                                 echo "<td style='text-align:center'><input type = 'button'  value ='Pilih' class ='btn btn-primary  pilih-poli'></td>";
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
              tampil_data_dokter();
   
function tampil_data_dokter(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Datadokter/data_dokter',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].kdDok+'</td>'+
                                '<td>'+data[i].NmDok+'</td>'+
                                '<td>'+data[i].AlmtDok+'</td>'+
                                '<td>'+data[i].TlpnDok+'</td>'+
                                '<td>'+data[i].TglLhrDok+'</td>'+
                                '<td>'+data[i].NmPoli+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-info btn-md item_edit" data="'+data[i].kdDok+'">Edit</a>'+' | '+
                                    '<a href="javascript:;" class="btn btn-danger btn-md item_hapus" data="'+data[i].kdDok+'">Hapus</a>'+
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
            var kdDok=$('#kddok').val();
            var NmDok=$('#nama_dokter').val();
            var AlmtDok=$('#alamat').val();
            var TlpnDok = $('#phone').val();
            var TglLhrDok = $('#tanggal_lahir').val();
            var kdPoli = $('#kdPoli').val();
            var datanya = $('#insert_dokter').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datadokter/simpan_dokter')?>",
                dataType : "JSON",
                data : datanya,
                success: function(data){
                    $('[name="nama_dokter"]').val("");
                    $('[name="alamat"]').val("");
                    $('[name="no_telp"]').val("");
                    $('[name="tanggal_lahir"]').val("");
                    $('[name="kdPoli"]').val("");
                    $('[name="nama_poli"]').val("");
                    $('#myModal8').modal('hide');
                    tampil_data_dokter();
                }
            });
            return false;
        });
         //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/Datadokter/get_dokter')?>",
                dataType : "JSON",
                data : {kdDok:id},
                success: function(data){
                    $.each(data,function(kdDok, NmDok, AlmtDok, TlpnDok, TglLhrDok, kdPoli){
                        $('#ModalaEdit').modal();
                        $('[name="kddok_edit"]').val(data.kdDok);
                        $('[name="nama_dokter_edit"]').val(data.NmDok);
                        $('[name="alamat_edit"]').val(data.AlmtDok);
                        $('[name="no_telp_edit"]').val(data.TlpnDok);
                        $('[name="tanggal_lahir_edit"]').val(data.TglLhrDok);
                        $('[name="kdPoli_edit"]').val(data.kdPoli);
                    });
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

         //Update Barang
        $('#btn_update').on('click',function(){
           var kdDok=$('#kddok2').val();
            var NmDok=$('#nama_dokter2').val();
            var AlmtDok=$('#alamat2').val();
            var TlpnDok = $('#phone2').val();
            var TglLhrDok = $('#tanggal_lahir2').val();
            var kdPoli = $('#kdPoli2').val();
            var datanyaa = $('#update_dokter').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datadokter/update_dokter')?>",
                dataType : "JSON",
                data : datanyaa,
                success: function(data){
                    $('[name="kddok_edit"]').val("");
                    $('[name="nama_dokter_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
                    $('[name="no_telp_edit"]').val("");
                    $('[name="kdPoli_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_dokter();
                }
            });
            return false;
        });
  
  $('#btn_cari').on('click',function(){

           $('#ModalCari').modal();
           
        });
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/Datadokter/hapus_dokter')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_dokter();
                    }
                });
                return false;
            });
         $(function(){
 $(document).on('click','.pilih-poli',function(){
     var kdPoli = $(this).closest('tr').find('td:eq(0)').text();
     var NmPoli = $(this).closest('tr').find('td:eq(1)').text();
     $('#kdPoli').val(kdPoli);
     $('#kdPoli2').val(kdPoli);
     $('#nama_poli').val(NmPoli);
     $('#nama_poli2').val(NmPoli);
     $('#ModalCari').modal('hide');
 

    });
 });
           });
  </script>