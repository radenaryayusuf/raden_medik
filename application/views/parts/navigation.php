 <aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <div class="sidenav-inner">
                
                <ul class="side-nav magic-nav">
                    
                    <li class="side-nav-header">Navigation</li>
                    
                    <li>
                        <a href="<?php echo base_url()?>"><i class="sli-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>
                    
                    
                    <li class="has-submenu">
                        <a href="#submenuMaster" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-docs"></i> 
                            <span class="nav-text">Master Data</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuMaster">
                            <ul>
                                <li><?php echo anchor('datapasien','Data Pasien') ?></li>
                                <li><?php echo anchor('datadokter','Data Dokter') ?></li>
                                <li><?php echo anchor('dataobat','Data Obat') ?></li>
                                <li><?php echo anchor('datapegawai','Data Pegawai') ?></li>

                            </ul>
                        </div>
                    </li>
          <!--
          <li>
                        <a href="<?php echo base_url(); ?>index.php/kehadiran/">
              <i class="di di-desktop"></i> <span class="nav-text">Kehadiran</span>
            </a>
                    </li>
                    -->
          
          <li class="has-submenu">
                        <a href="#submenuAbsen" data-toggle="collapse" aria-expanded="false">
                            <i class="di di-desktop"></i> 
                            <span class="nav-text">Transaksi</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuAbsen">
                            <ul>
                                <li><?php echo anchor('datajadwal','Jadwal Praktek') ?></li>
                                <li><?php echo anchor('pendaftaran','Pendaftaran') ?></li>
                                <li><?php echo anchor('pemeriksaan','Pemeriksaan') ?></li>
                                <li><?php echo anchor('resep','Resep') ?></li>

                            </ul>
                        </div>
                    </li>
          
          
          <li class="has-submenu">
                        <a href="#submenuLaporan" data-toggle="collapse" aria-expanded="false">
                            <i class="di di-admin-tools"></i> 
                            <span class="nav-text">Laporan</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuLaporan">
                            <ul>
                              <li class="has-submenu">
                                    <a href="#submenuTenOne" data-toggle="collapse">Daftar Pasien</a>
                                    <div class="sub-menu collapse" id="submenuTenOne">
                                        <ul>
                                            <li><?php echo anchor('pasiensudahdiperiksa','Sudah Diperiksa') ?></li>
                                            <li><?php echo anchor('pasienbelumperiksa','Belum Diperiksa') ?></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><?php echo anchor('jadwalprakteklaporan','Jadwal Praktek') ?></li>
                            </ul>
                        </div>
                    </li>
          
                </ul>
                
            </div><!-- END: sidebar-inner -->
            
        </aside>    <!-- END: Side Navigation -->
