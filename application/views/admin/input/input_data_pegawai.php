<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="nav-md" onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
  <div class="container body">
    <div class="main_container">


     <!-- sidebar menu -->
     <?php $this->load->view("admin/_partials/sidebar.php") ?>
     <!-- /sidebar menu -->


     <!-- top navigation -->
     <?php $this->load->view("admin/_partials/navbar.php") ?>
     <!-- /top navigation -->

     <div class="right_col" role="main">
      <div class="page-title">
        <div class="title_left">
          <span class="badge" style="font-size: 2em;">TAMBAH DATA PEGAWAI</span>
        </div>
        <div class="title_right col-md-3 col-xs-12">
          <div class="pull-right">
           <?php
           date_default_timezone_set('Asia/Jakarta');
           $date=date("d/m/Y");
           echo "$date  ";
           ?>
           <span id="clock"></span>
         </div>
       </div>
     </div>

     
     <div class="row" >
      <div class="col-md-12 col-xs-12">
       <div class="x_panel">
         <div class="x_title">
          <h1 id="show_data"></h1>
          <h2 style="margin-right: 20px;"><i class="fa fa-edit"></i> Form Tambah Data Pegawai</h2>        
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
         <form class="form-horizontal form-label-left input_mask" action="<?= base_url(); ?>Admin-Manajemen-Kategori/tambah" method="POST">

          <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">Nama Pegawai</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="kategori" placeholder="Masukkan nama lengkap pegawai jika ada">
            </div>              
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">NIP pegawai</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <input type="number" class="form-control" name="keterangan" placeholder="Masukkan nip pegawai tanpa spasi. Cth: 123456781234561123">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">Pangkat dan Golongan</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <select class="form-control" name="pangkat">    
                <option>--- Pilih Pangkat / Golongan ---</option>
                <option value="Pilih Pangkat / Golongan">Pilih Pangkat / Golongan</option>
                <option value="Juru Muda / I a">Juru Muda / I a</option>
                <option value="Juru Muda Tingkat I / I b">Juru Muda Tingkat I / I b</option>
                <option value="Juru / I c">Juru / I c</option>
                <option value="Juru Tingkat I / I d">Juru Tingkat I / I d</option>
                <option value="Pengatur Muda / II a">Pengatur Muda / II a</option>
                <option value="Pengatur Muda Tingkat I / II b">Pengatur Muda Tingkat I / II b</option>
                <option value="Pengatur / II c">Pengatur / II c</option>
                <option value="Pengatur Tingkat I / II d">Pengatur Tingkat I / II d</option>
                <option value="Penata Muda / III a">Penata Muda / III a</option>
                <option value="Penata Muda Tingkat I / III b">Penata Muda Tingkat I / III b</option>
                <option value="Penata / III c">Penata / III c</option><option value="Penata Tingkat I / III d">Penata Tingkat I / III d</option><option value="Pembina / IV a">Pembina / IV a</option>
                <option value="Pembina Tingkat I / IV b">Pembina Tingkat I / IV b</option>
                <option value="Pembina Utama Muda / IV c">Pembina Utama Muda / IV c</option>
                <option value="Pembina UtamaMadya / IV d">Pembina UtamaMadya / IV d</option>
                <option value="Pembina Utama / IV e">Pembina Utama / IV e</option>  
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">Nama SKPD</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <select class="form-control" name="instansi">
                <option>--- Pilih Instansi ---</option>
                <option value="Pilih Instansi">Pilih Instansi</option>
                <option value="Dinas Kepemudaan Dan Olahraga">Dinas Kepemudaan Dan Olahraga</option>
                <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                <option value="Dinas Ketahanan Pangan Dan Perikanan">Dinas Ketahanan Pangan Dan Perikanan</option>
                <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                <option value="Dinas Lingkungan Hidup">Dinas Lingkungan Hidup</option>
                <option value="Dinas Pariwisata Dan Kebudayaan">Dinas Pariwisata Dan Kebudayaan</option>
                <option value="Dinas Pekerjaan Umum Dan Penataan Ruang">Dinas Pekerjaan Umum Dan Penataan Ruang</option>
                <option value="Dinas Pemberdayaan Perempuan, Dan Perlindungan Anak">Dinas Pemberdayaan Perempuan, Dan Perlindungan Anak</option>
                <option value="Dinas Penanaman Modal Dan Pelayanan Perizinan Terpadu">Dinas Penanaman Modal Dan Pelayanan Perizinan Terpadu</option>
                <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                <option value="Dinas Perindustrian Dan Perdagangan">Dinas Perindustrian Dan Perdagangan</option>
                <option value="Dinas Perpustakaan Dan Kearsipan">Dinas Perpustakaan Dan Kearsipan</option>
                <option value="Dinas Pertanian">Dinas Pertanian</option>
                <option value="Dinas Perumahan Dan Kawasan Permukiman">Dinas Perumahan Dan Kawasan Permukiman</option>
                <option value="Dinas Sosial">Dinas Sosial</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">Email</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="keterangan" placeholder="WAJIB memasukkan akun email yang terdaftar di HP pegawai">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">Password</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <input disabled type="text" class="form-control" name="keterangan" value="pegawai">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
             <button class="btn btn-primary" type="reset"><i class="fa fa-refresh"></i> Reset</button>
             <button type="submit" name="submit" value="Submit" class="btn btn-success">Simpan <i class="fa fa-chevron-right"></i></button>
           </div>
         </div>

       </form>
     </div>

   </div> 
 </div>  
</div>
</div>

<!-- footer content -->
<?php $this->load->view("admin/_partials/footer.php") ?>
<!-- /footer content -->
</div>
</div>

<!------------------- File JS ---------------------->
<?php $this->load->view("admin/_partials/js.php") ?>
<!------------------- File JS ---------------------->   
</body>
</html>