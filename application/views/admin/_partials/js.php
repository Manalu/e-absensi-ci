    <script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
}
</script>
<!-- jQuery -->
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dataTables.responsive.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
<script src="<?= base_url('assets/js/datatables/')?>dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/js/datatables/')?>buttons.flash.min.js"></script>
<script src="<?= base_url('assets/js/datatables/')?>jszip.min.js"></script>
<script src="<?= base_url('assets/js/datatables/')?>pdfmake.min.js"></script>
<script src="<?= base_url('assets/js/datatables/')?>vfs_fonts.js"></script>
<script src="<?= base_url('assets/js/datatables/')?>buttons.html5.min.js"></script>
<script src="<?= base_url('assets/js/datatables/')?>buttons.print.min.js"></script>
<!-- Custom Theme Scripts (JS untuk minimaze sidebar, harus ditaruh paling bawah biar tidak error) -->
<script src="<?= base_url(); ?>assets/js/custom.min.js"></script> 