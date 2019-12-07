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
          <span class="badge" style="font-size: 2em;">TAMBAH INFORMASI</span>
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
            <h2 style="margin-right: 20px;"><i class="fa fa-edit"></i> Form Cuti / Ijin / Sakit Pegawai</h2>        
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
           <form class="form-horizontal form-label-left input_mask" action="<?= base_url(); ?>Admin-Manajemen-Kategori/tambah" method="POST">

             <div class="form-group">
              <label class="control-label col-md-2 col-xs-12">Tanggal Input</label>
              <div class="col-md-3 col-xs-12">
                <div class='input-group date' id='myDatepicker1'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                   <span class="glyphicon glyphicon-calendar"></span>
                 </span>
               </div>
             </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">Pengirim Berita</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <select class="form-control" onchange="cek_database()" name="instansi" id="nama" value="">
                <option value="" selected="">-- Pilih Instansi --</option>
                <option value="Pilih Instansi">Pilih Instansi</option><option value="Dinas Kepemudaan Dan Olahraga">Dinas Kepemudaan Dan Olahraga</option><option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option><option value="Dinas Kesehatan">Dinas Kesehatan</option><option value="Dinas Ketahanan Pangan Dan Perikanan">Dinas Ketahanan Pangan Dan Perikanan</option><option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option><option value="Dinas Lingkungan Hidup">Dinas Lingkungan Hidup</option><option value="Dinas Pariwisata Dan Kebudayaan">Dinas Pariwisata Dan Kebudayaan</option><option value="Dinas Pekerjaan Umum Dan Penataan Ruang">Dinas Pekerjaan Umum Dan Penataan Ruang</option><option value="Dinas Pemberdayaan Perempuan, Dan Perlindungan Anak">Dinas Pemberdayaan Perempuan, Dan Perlindungan Anak</option><option value="Dinas Penanaman Modal Dan Pelayanan Perizinan Terpadu">Dinas Penanaman Modal Dan Pelayanan Perizinan Terpadu</option><option value="Dinas Pendidikan">Dinas Pendidikan</option><option value="Dinas Perindustrian Dan Perdagangan">Dinas Perindustrian Dan Perdagangan</option><option value="Dinas Perpustakaan Dan Kearsipan">Dinas Perpustakaan Dan Kearsipan</option><option value="Dinas Pertanian">Dinas Pertanian</option><option value="Dinas Perumahan Dan Kawasan Permukiman">Dinas Perumahan Dan Kawasan Permukiman</option><option value="Dinas Sosial">Dinas Sosial</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">Kategori Berita</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <select class="form-control" name="nama" id="nama" value="">
                <option value="" selected="">-- Pilih Kategori --</option>
                <option value="x">PENGUMUMAN</option>
                <option value="x">BERITA</option>
                <option value="x">INFORMASI</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">Judul Berita</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <input type="text" class="form-control" name="keterangan" placeholder="Masukkan judul berita">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">Isi Berita</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <textarea class="form-control" name="keterangan" placeholder="Masukkan isi berita di sini"></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-md-2 col-xs-12">Lampiran</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <input name="gambar" type="file" id="gambar">
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
<!-- bootstrap-daterangepicker -->
<script src="<?=base_url('')?>assets/js/moment.min.js"></script>
<script src="<?=base_url('')?>assets/js/bootstrap-datetimepicker.min.js"></script>
<script>
  $('#myDatepicker1').datetimepicker({
    format: 'DD.MM.YYYY'
  });
  $('#myDatepicker2').datetimepicker({
    format: 'DD.MM.YYYY'
  });
</script>
<!------------------- File JS ---------------------->   
</body>
</html>