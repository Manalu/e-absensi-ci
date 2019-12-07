<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title">
     <a href="<?= base_url(); ?>" class="site_title"><img height="30" src="<?= base_url(); ?>assets/favicon.png"> <span>E-Absensi Dairi</span></a>
   </div>
   <div class="clearfix"></div>

   <div class="profile clearfix" style="background-color: #079992; color: #ffffff">

    <div class="profile_pic">
      <img src="<?= base_url(); ?>assets/profil.jpg" alt="foto-profil-default" class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome, </span>
      <h2>Oberlin Lingga</h2> 
      (AS Administrator)   
    </div>
  </div>
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
   <div class="menu_section">
    <ul class="nav side-menu">
      <li><a href="<?= base_url(); ?>Admin_beranda"><i class="fa fa-home"></i>Beranda</a></li>
      <li><a><i class="fa fa-level-up"></i> Input<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('')?>Admin_input/data_pegawai">Data Pegawai</a></li>
          <li><a href="<?=base_url('')?>Admin_input/manual_absen_datang">Manual Absen Datang</a></li>
          <li><a href="<?=base_url('')?>Admin_input/manual_absen_pulang">Manual Absen Pulang</a></li>
          <li><a href="<?=base_url('')?>Admin_input/cuti_ijin_sakit">Cuti / Ijin / Sakit</a></li>
          <li><a href="<?=base_url('')?>Admin_input/dinas_luar">Dinas Luar</a></li>
          <li><a href="<?=base_url('')?>Admin_input/informasi">Informasi</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-level-down"></i> Output<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('')?>Admin_output/data_pegawai">Data Pegawai</a></li>
          <li><a href="<?=base_url('')?>Admin_output/absen_datang">Absen Datang</a></li>
          <li><a href="<?=base_url('')?>Admin_output/absen_pulang">Absen Pulang</a></li>
          <li><a href="<?=base_url('')?>Admin_output/cuti_ijin_sakit">Cuti / Ijin / Sakit</a></li>
          <li><a href="<?=base_url('')?>Admin_output/dinas_luar">Dinas Luar</a></li>
          <li><a href="<?=base_url('')?>Admin_output/informasi">Informasi</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-upload"></i> Upload Data Fingerprint<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('')?>Admin_upload_finger/absen_datang">Absen Datang</a></li>
          <li><a href="<?=base_url('')?>Admin_upload_finger/absen_pulang">Absen Pulang</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-download"></i> Laporan Absensi<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('')?>Admin_laporan_absensi/absen_datang">Absen Datang</a></li>
          <li><a href="<?=base_url('')?>Admin_laporan_absensi/absen_pulang">Absen Pulang</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-table"></i> Absensi Pegawai<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('')?>Admin_absensi_pegawai/absen_datang">Absen Datang</a></li>
          <li><a href="<?=base_url('')?>Admin_absensi_pegawai/absen_pulang">Absen Pulang</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-table"></i> Memo Pegawai<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('')?>Admin_memo_pegawai/cuti_ijin_sakit">Cuti / Ijin / Sakit</a></li>
          <li><a href="<?=base_url('')?>Admin_memo_pegawai/dinas_luar">Dinas Luar</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-cog"></i> Pengaturan<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('')?>Admin_pengaturan/data_pegawai">Data Pegawai</a></li>
          <li><a href="<?=base_url('')?>Admin_pengaturan/nama_instansi">Nama Instansi</a></li>
          <li><a href="<?=base_url('')?>Admin_pengaturan/jenis_memo">Jenis Memo</a></li>
          <li><a href="<?=base_url('')?>Admin_pengaturan/pangkat_golongan">Pangkat / Golongan</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</div>
</div>