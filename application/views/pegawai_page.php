<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Data Pegawai </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Data Pegawai</li>
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
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telefon</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Pegawai</h4>
                </div>
                <div class="modal-body">
                    <form role="form" id="insert_pegawai">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" class="form-control validate[required]" name="nip" id="nip" placeholder="NIP" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <input type="text" class="form-control validate[required]" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control validate[required]" name="alamat" id="alamat" placeholder="Alamat" data-prompt-position="topLeft"></textarea  >
                                        </div>

                                        <div class="form-group">
                                            <label>No Telefon</label>
                                            <input type="text" class="form-control validate[required]" name="no_telp" id="phone" placeholder="Phone" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control date-picker" id="tanggal_lahir" name="tanggal_lahir" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy">
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                        <div class="radio radio-inline">
                                        <input type="radio" id="rd_jk" value="option1" name="jenis_kelamin" checked>
                                        <label for="inlineRadio1"> Laki-Laki </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="rd_jk1" value="option2" name="jenis_kelamin">
                                        <label for="inlineRadio2"> Perempuan </label>
                                    </div>
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
    <!-- Modal Update Pegawai -->
     <div class="modal modal-secondary fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Data Pegawai</h4>
                </div>
                <div class="modal-body">
                    <form action="#" role="form" id="update_pegawai">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" class="form-control validate[required]" name="nip_edit" id="nip2" placeholder="NIP" data-prompt-position="topLeft" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <input type="text" class="form-control validate[required]" name="nama_pegawai_edit" id="nama_pegawai2" placeholder="Nama Pegawai" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control validate[required]" name="alamat_edit" id="alamat2" placeholder="Alamat" data-prompt-position="topLeft"></textarea  >
                                        </div>

                                        <div class="form-group">
                                            <label>No Telefon</label>
                                            <input type="text" class="form-control validate[required]" name="no_telp_edit" id="phone2" placeholder="Phone" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control date-picker" id="tanggal_lahir2" name="tanggal_lahir_edit" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy">
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                        <div class="radio radio-inline">
                                        <input type="radio" id="rd_jk2" value="option1" name="jenis_kelamin_edit" checked>
                                        <label for="inlineRadio1"> Laki-Laki </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="rd_jk3" value="option2" name="jenis_kelamin_edit">
                                        <label for="inlineRadio2"> Perempuan </label>
                                    </div>
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
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus pegawai ini?</p></div>
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
              tampil_data_pegawai();
   
function tampil_data_pegawai(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Datapegawai/data_pegawai',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].NIP+'</td>'+
                                '<td>'+data[i].NmPeg+'</td>'+
                                '<td>'+data[i].AlmtPeg+'</td>'+
                                '<td>'+data[i].TlpnPeg+'</td>'+
                                '<td>'+data[i].TglLhrPeg+'</td>'+
                                '<td>'+data[i].JKPeg+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-info btn-md item_edit" data="'+data[i].NIP+'">Edit</a>'+' | '+
                                    '<a href="javascript:;" class="btn btn-danger btn-md item_hapus" data="'+data[i].NIP+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
        //Simpan Barang
        // {NIP:NIP , NmPeg:NmPeg, AlmtPeg:AlmtPeg, TlpnPeg:TlpnPeg, TglLhrPeg:TglLhrPeg, JKPeg:JKPeg},
        $('#btn_simpan').on('click',function(){
            var NIP=$('#nip').val();
            var NmPeg=$('#nama_pegawai').val();
            var AlmtPeg=$('#alamat').val();
            var TlpnPeg = $('#phone').val();
            var TglLhrPeg = $('#tanggal_lahir').val();
            var JKPeg = $('input[name=jenis_kelamin]:checked').val();
            var datanya = $('#insert_pegawai').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datapegawai/simpan_pegawai')?>",
                dataType : "JSON",
                data : datanya,
                success: function(data){
                    $('[name="nip"]').val("");
                    $('[name="nama_pegawai"]').val("");
                    $('[name="alamat"]').val("");
                    $('[name="no_telp"]').val("");
                    $('[name="tanggal_lahir"]').val("");
                    $('#myModal8').modal('hide');
                    tampil_data_pegawai();
                }
            });
            return false;
        });
         //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/Datapegawai/get_pegawai')?>",
                dataType : "JSON",
                data : {NIP:id},
                success: function(data){
                    $.each(data,function(NIP, NmPeg, AlmtPeg, TlpnPeg, TglLhrPeg, JKPeg){
                        $('#ModalaEdit').modal();
                        $('[name="nip_edit"]').val(data.NIP);
                        $('[name="nama_pegawai_edit"]').val(data.NmPeg);
                        $('[name="alamat_edit"]').val(data.AlmtPeg);
                        $('[name="no_telp_edit"]').val(data.TlpnPeg);
                        $('[name="tanggal_lahir_edit"]').val(data.TglLhrPeg);
                        $('[name="jenis_kelamin_edit"]').val(data.JKPeg);
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
           var NIP=$('#nip2').val();
            var NmPeg=$('#nama_pegawai2').val();
            var AlmtPeg=$('#alamat2').val();
            var TlpnPeg = $('#phone2').val();
            var TglLhrPeg = $('#tanggal_lahir2').val();
            var JKPeg = $('input[name=jenis_kelamin_edit]:checked').val();
            var datanyaa = $('#update_pegawai').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datapegawai/update_pegawai')?>",
                dataType : "JSON",
                data : datanyaa,
                success: function(data){
                    $('[name="nip_edit"]').val("");
                    $('[name="nama_pegawai_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
                    $('[name="no_telp_edit"]').val("");
                    $('[name="tanggal_lahir_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_pegawai();
                }
            });
            return false;
        });
 
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/Datapegawai/hapus_pegawai')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_pegawai();
                    }
                });
                return false;
            });
           });
  </script>