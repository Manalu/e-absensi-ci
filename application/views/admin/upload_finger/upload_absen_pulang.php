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
          <span class="badge" style="font-size: 2em;">UPLOAD DATA ABSEN PULANG</span>
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
            <h2 style="margin-right: 20px;"><i class="fa fa-upload"></i> Cara Upload File</h2>        
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <h4 class="text-center"><span class="label label-success" style="font-size: 1em">Cara Upload File Dari Mesin Fingerprint ke Database</span></h4>
            <ol>
              <li>Setiap admin SKPD mempersiapkan file excel yang akan di upload.</li>
              <li>File excel yang di upload minimal memakai Microsoft Office Excel 2007 (format csv).</li>
              <li>Hal yang perlu diperhatikan adalah format TANGGAL. <br> Format tanggal yang benar --> tanggal / bulan / tahun (d/m/Y) --> contoh: 31/12/2019<br>Format tanggal yang salah :<br>- tanggal/bulan/tahun (d/m/y) --> contoh : 31/12/19<br>- tahun/bulan/tanggal (Y/m/d) --> contoh : 2019/12/31<br>- bulan/tanggal/tahun (m/d/Y) --> contoh : 12/31/2019<br>- tahun/tanggal/bulan (Y/d/m) --> contoh : 2019/31/12<br>- dll
              </li>
              <li>Jika PC / laptop admin tidak bisa menyesuaikan dengan format tanggal yang benar seperti diatas di microsoft office excel,<br>maka lakukan settingan dengan cara di bawah ini :<br>a. Klik Start --> Control Panel --> Region and Language<br>b. Setting seperti dibawah ini :<br>- Format : English (United Kingdom)<br>- Short Date : dd/MM/yyyy<br>- Long Date : dd MMMM yyyy<br>- Short Time : HH:mm<br>- Long Time : HH:mm:ss</li>
              <li>Save as type di excel adalah : CSV (Comma Delimited).</li>
              <li>Contoh format laporan dalam bentuk excel.</li>
            </ol>
            <div class="table-responsive">
              <table class="table table-bordered" >
                <tr>
                  <th>Tanggal</th>
                  <th>Nama Pegawai</th>
                  <th>NIP Pegawai</th>
                  <th>SKPD</th>
                  <th>Datang</th>
                </tr>
                <tr>
                  <th>31/12/2019</th>
                  <th>OBERLIN LINGGA,ST</th>
                  <th>123456781234561123</th>
                  <th>Dinas Kesehatan</th>
                  <th>07:30</th>
                </tr>
              </table> 
            </div>
            <button type="submit" name="submit" value="Submit" class="btn btn-default"><i class="fa fa-download"></i> Download Format Laporan</button>
          </div>
        </div> 

      </div>  
    </div>


    <div class="row" >
      <div class="col-md-12 col-xs-12">
       <div class="x_panel">
         <div class="x_title">
          <h1 id="show_data"></h1>
          <a href="<?=base_url('Admin_upload_finger/upload_data_pulang');?>" class="btn btn-default"><i class="fa fa-upload"></i> Upload Data</a>
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
                  <th>Tanggal</th>
                  <th>Nama Pegawai</th>
                  <th>NIP Pegawai</th>
                  <th>SKPD</th>         
                  <th>Jam Masuk</th>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatable-1').DataTable();
  });
</script>
<!------------------- File JS ---------------------->   
</body>
</html>