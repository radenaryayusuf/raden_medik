<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Data Obat </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Data Obat</li>
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
                                            <th>Kode Obat</th>
                                            <th>Nama</th>
                                            <th>Merk</th>
                                            <th>Satuan</th>
                                            <th>Harga Jual</th>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Obat</h4>
                </div>
                <div class="modal-body">
                    <form role="form" id="insert_obat">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input type="text" class="form-control validate[required]" name="nama_obat" id="nama_obat" placeholder="Nama Obat" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Merk</label>
                                            <input type="text" class="form-control validate[required]" name="merk" id="merk" placeholder="Merk" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input type="number" style="width:200px" class="form-control validate[required]" name="satuan" id="satuan" placeholder="Satuan" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                        <div class="form-group">
                                          <label>Harga Jual Obat</label>
                                        <div class="input-group">
                                        <span class="input-group-addon">Rp </span>
                                        <input type="text" class="form-control" id="harga_jual" name="harga_jual">
                                        <span class="input-group-addon">,00</span>
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
    <!-- Modal Update Pasien -->
     <div class="modal modal-secondary fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Data obat</h4>
                </div>
                <div class="modal-body">
                    <form action="#" role="form" id="update_obat">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label>Kode Obat</label>
                                            <input type="text" class="form-control validate[required]" name="kdobat_edit" id="kdobat2" placeholder="Kode Obat" data-prompt-position="topLeft" readonly>
                                        </div>
                                          <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input type="text" class="form-control validate[required]" name="nama_obat_edit" id="nama_obat2" placeholder="Nama Obat" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Merk</label>
                                            <input type="text" class="form-control validate[required]" name="merk_edit" id="merk2" placeholder="Merk" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input type="number" style="width:200px" class="form-control validate[required]" name="satuan_edit" id="satuan2" placeholder="Satuan" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                        <div class="form-group">
                                          <label>Harga Jual Obat</label>
                                        <div class="input-group">
                                        <span class="input-group-addon">Rp </span>
                                        <input type="text" class="form-control" id="harga_jual2" name="harga_jual_edit">
                                        <span class="input-group-addon">,00</span>
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
              $('#harga_jual').number(true,0);
            $(document).ready(function(){
              tampil_data_obat();

   
function tampil_data_obat(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Dataobat/data_obat',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].kdObat+'</td>'+
                                '<td>'+data[i].NmObat+'</td>'+
                                '<td>'+data[i].Merk+'</td>'+
                                '<td>'+data[i].Satuan+'</td>'+
                                '<td>'+data[i].HargaJualObat+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-info btn-md item_edit" data="'+data[i].kdObat+'">Edit</a>'+' | '+
                                    '<a href="javascript:;" class="btn btn-danger btn-md item_hapus" data="'+data[i].kdObat+'">Hapus</a>'+
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
            var NmObat=$('#nama_obat').val();
            var Merk=$('#merk').val();
            var Satuan = $('#satuan').val();
            var HargaJualObat = $('#harga_jual').val();
            var datanya = $('#insert_obat').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Dataobat/simpan_obat')?>",
                dataType : "JSON",
                data : datanya,
                success: function(data){
                    $('[name="nama_obat"]').val("");
                    $('[name="merk"]').val("");
                    $('[name="satuan"]').val(0);
                    $('[name="harga_jual"]').val(0);
                    $('#myModal8').modal('hide');
                    tampil_data_obat();
                }
            });
            return false;
        });
         //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/Dataobat/get_obat')?>",
                dataType : "JSON",
                data : {kdObat:id},
                success: function(data){
                    $.each(data,function(kdObat, NmObat, Merk, Satuan, HargaJualObat){
                        $('#ModalaEdit').modal();
                        $('[name="kdobat_edit"]').val(data.kdObat);
                        $('[name="nama_obat_edit"]').val(data.NmObat);
                        $('[name="merk_edit"]').val(data.Merk);
                        $('[name="satuan_edit"]').val(data.Satuan);
                        $('[name="harga_jual_edit"]').val(data.HargaJualObat);
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
           var kdDok=$('#kdobat2').val();
            var NmDok=$('#nama_obat2').val();
            var AlmtDok=$('#merk2').val();
            var TlpnDok = $('#satuan2').val();
            var TglLhrDok = $('#harga_jual2').val();
            var datanyaa = $('#update_obat').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Dataobat/update_obat')?>",
                dataType : "JSON",
                data : datanyaa,
                success: function(data){
                    $('[name="kdobat_edit"]').val("");
                    $('[name="nama_obat_edit"]').val("");
                    $('[name="merk_edit"]').val("");
                    $('[name="satuan_edit"]').val("");
                    $('[name="harga_jual_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_obat();
                }
            });
            return false;
        });
  
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/Dataobat/hapus_obat')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_obat();
                    }
                });
                return false;
            });
         
           });
  </script>