<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?> 
  <link rel="stylesheet" href="<?=base_url('assets/css/')?>KoolChart.css"/>
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
        <span class="badge" style="font-size: 2em;">BERANDA</span>
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
          <h2 style="margin-right: 20px;">Grafik Tiap SKPD </h2>        
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div id="chart1" style="height:350px;"></div>
        </div>

      </div> 
    </div>  
  </div>


  <div class="row" >
    <div class="col-md-12 col-xs-12">
     <div class="x_panel">
       <div class="x_title">
        <h1 id="show_data"></h1>
        <h2 style="margin-right: 20px;">Detail Tiap SKPD </h2>        
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content row text-center">

        <div class="col-md-12 col-xs-12">
          <h3>Detail Kehadiran Pegawai Tiap SKPD</h3>

          <ul class="list-unstyled top_profiles text-left" style="overflow: scroll;">
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Kepemudaan Dan Olahraga</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Kependudukan Dan Pencatatan Sipil</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Kesehatan</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Ketahanan Pangan Dan Perikanan</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Komunikasi Dan Informatika</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Lingkungan Hidup</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Pariwisata Dan Kebudayaan</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Pekerjaan Umum Dan Penataan Ruang</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Pemberdayaan Perempuan, Dan Perlindungan Anak</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Penanaman Modal Dan Pelayanan Perizinan Terpadu</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Pendidikan</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Perindustrian Dan Perdagangan</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Perpustakaan Dan Kearsipan</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Pertanian</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Perumahan Dan Kawasan Permukiman</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Dinas Sosial</a>
                <p>0 orang / 0 total jumlah pegawai (0 %)</p>
                <p> <small>Terlambat : 0 orang | Tanpa Keterangan : 0 orang</small>
                </p>
              </div>
            </li>
          </ul>
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

<!-- Include ApexCharts -->
<script src="<?=base_url('assets/js/')?>apexcharts.js"></script>

<script type="text/javascript">

  var options = {
    chart: {
      height: 400,
      type: 'pie',
    },
    //colors:['#1dd1a1', '#222f3e', '#f368e0', '#e74c3c', '#ff9f43', '#48dbfb', '#CEE8F4'],
    labels: ['Dinas Kepemudaan dan Olahraga', 'Dinas Kependudukan dan Pencatatan Sipil', 'Dinas Kesehatan', 'Dinas Ketahanan Pangan dan Perikanan', 'Dinas Komunikasi dan Informatika','Dinas Lingkungan Hidup','Dinas Pariwisata dan Kebudayaan','Dinas Pekerjaan Umum dan Penataan Ruang', 'Dinas Pemberdayaan Perempuan, Dan Perlindungan Anak', 'Dinas Penanaman Modal dan Pelayanan Perizinan Modal Terpadu','Dinas Pendidikan','Dinas Perindustrian dan Perdagangan','Dinas Perpustakaan dan Kearsipan', 'Dinas Pertanian','Dinas Perumahan dan Kawasan Permukiman','Dinas Sosial'],
    series: [1,3,4,7,3,6,8,4,21,2,4,22,42,12,4,3],
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'top'
        }
      }
    }]
  }

  var chart = new ApexCharts(
    document.querySelector("#chart1"),
    options
    );

  chart.render();
</script>
<!------------------- File JS ---------------------->
<?php $this->load->view("admin/_partials/js.php") ?>
<!------------------- File JS ---------------------->   

</body>
</html>
