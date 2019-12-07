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
          <span class="badge" style="font-size: 2em;">CUTI / IJIN / SAKIT</span>
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
            <a href="<?=base_url('Admin_input/cuti_ijin_sakit')?>" class="btn btn-success">Tambah Data</a>        
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <div class="table-responsive">
              <table id="datatable-1" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Pengajuan</th>
                    <th>Nama Pegawai</th>
                    <th>Jenis</th>
                    <th>SKPD Pegawai</th>         
                    <th>Verifikasi</th>
                    <th>Kelola</th>
                  </tr>
                </thead>
                <tbody>
                 <tr>
                  <td>SA</td>
                  <td>sa</td>
                  <td>as</td>
                  <td>sa</td>                
                  <td>Lorem</td>
                  <td class="text-center">
                    <a href="#" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a>
                    <a href="#" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>SA</td>
                  <td>sa</td>
                  <td>as</td>
                  <td>sa</td>                
                  <td>Lorem</td> 
                  <td class="text-center">
                    <a href="#" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a>
                    <a href="#" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatable-1').DataTable();
  });
</script>

<!-- Custom Theme Scripts (JS untuk minimaze sidebar, harus ditaruh paling bawah biar tidak error) -->
<!-- <script src="<?= base_url(); ?>assets/js/custom.min.js"></script> -->
<!------------------- File JS ---------------------->   
</body>
</html>