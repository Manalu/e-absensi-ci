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
          <span class="badge" style="font-size: 2em;">TAMBAH CUTI / IJIN / SAKIT</span>
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
              <label class="control-label col-md-2 col-xs-12">Nama Pegawai</label>
              <div class="col-md-6 col-sm-9 col-xs-12">
                <select class="form-control" onchange="cek_database()" name="nama" id="nama" value="">
                  <option value="" selected="">- Ketik nama pegawai berdasarkan awalan huruf -</option>
                  <option value="jovan">jovan</option>
                  <option value="jovan">jovan</option>
                  <option value="fdsfdfdfdf">fdsfdfdfdf</option>
                  <option value="Jonathan Atur Linton">Jonathan Atur Linton</option>
                  <option value="Oberlin Lingga, ST">Oberlin Lingga, ST</option>
                  <option value="rismaratur panggabean">rismaratur panggabean</option>
                  <option value="Jovan Ivander Jesu Lingga">Jovan Ivander Jesu Lingga</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-xs-12">NIP pegawai</label>
              <div class="col-md-6 col-sm-9 col-xs-12">
                <input type="text" class="form-control" name="keterangan">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-xs-12">SKPD pegawai</label>
              <div class="col-md-6 col-sm-9 col-xs-12">
                <input type="text" class="form-control" name="keterangan">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-xs-12">Jenis Memo</label>
              <div class="col-md-6 col-sm-9 col-xs-12">
                <select class="form-control" name="nama" id="nama" value="">
                  <option value="" selected="">-- Pilih --</option>
                  <option value="x">Sakit</option>
                  <option value="x">Dinas Luar</option>
                  <option value="x">Cuti Melahirkan</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-xs-12">Tanggal</label>
              <div class="row">
                <div class="col-md-2 col-xs-12">
                  <div class='input-group date' id='myDatepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                   </span>
                 </div>
               </div>
               <div class="col-md-1" style="padding: 0;width: 50px">sampai</div>
               <div class="col-md-2 col-xs-12">
                <div class='input-group date' id='myDatepicker2'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                   <span class="glyphicon glyphicon-calendar"></span>
                 </span>
               </div>
             </div>
           </div>      
         </div>
         <div class="form-group">
          <label class="control-label col-md-2 col-xs-12"></label>
          <div class="col-md-6 col-sm-9 col-xs-12">
           * Tanggal selesai WAJIB diisi meskipun Sakit/Ijin/Cuti hanya 1 hari.
         </div>
       </div>
       <div class="form-group">
        <label class="control-label col-md-2 col-xs-12">Keterangan</label>
        <div class="col-md-6 col-sm-9 col-xs-12">
          <textarea class="form-control" name="keterangan" placeholder="Masukkan keterangan/alasan cuti,sakit dan ijin disini. Contoh: Menjenguk keluarga yang sedang sakit."></textarea>
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