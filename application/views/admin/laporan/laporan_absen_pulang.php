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
          <span class="badge" style="font-size: 2em;">LAPORAN ABSEN PULANG</span>
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
      <div class="col-md-6 col-xs-12">
       <div class="x_panel">
         <div class="x_title">
          <h1 id="show_data"></h1>
          <h2 style="margin-right: 20px;"><i class="fa fa-cog"></i> Kustomisasi Laporan</h2>        
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
         <form class="form-horizontal form-label-left input_mask" action="<?= base_url(); ?>Admin-Manajemen-Kategori/tambah" method="POST">

          <div class="form-group">
            <label class="control-label col-md-3 col-xs-12">Pilih SKPD</label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <select class="form-control" onchange="cek_database()" name="nama" id="nama" value="">
                <option value="" selected="">-- Pilih SKPD --</option>
                <option value="jovan">Dinas Kepemudaan dan Olahraga</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-xs-12">Pilih Periode</label>
            <div class="row">
              <div class="col-md-3 col-sm-9 col-xs-12">
                <select id="bulan" name="bulan" class="form-control">
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>      
                </select>
              </div>
              <div class="col-md-3 col-sm-9 col-xs-12">
                <select id="tahun" name="tahun" class="form-control">
                  <option value="x">2019</option>
                </select>
              </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-offset-5">
             <button type="submit" name="submit" value="Submit" class="btn btn-success">Print <i class="fa fa-print"></i></button>
           </div>
         </div>

       </form>
     </div>
   </div> 
 </div>  
</div>

<div class="row" >
  <div class="col-md-12 col-xs-12">
   <div class="x_panel">
    <div class="x_content">
      <div class="table-responsive">
        <table id="datatable-1" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Nama Pegawai</th>
              <th>Masuk</th>
              <th>Pulang</th>         
              <th>SKPD</th>
            </tr>
          </thead>
          <tbody>
           <tr>
            <td>SA</td>
            <td>sa</td>
            <td>as</td>
            <td>sa</td>                
            <td>Lorem</td> 
          </tr>
          <tr>
            <td>SA</td>
            <td>sa</td>
            <td>as</td>
            <td>sa</td>                
            <td>Lorem</td> 
          </tr>
        </tbody>
      </table>
    </div>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatable-1').DataTable();
  });
</script>
<!------------------- File JS ---------------------->   
</body>
</html>