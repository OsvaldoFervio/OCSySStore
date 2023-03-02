<?= $head ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?= $leftnav ?>
       

        <!-- top navigation -->
          <?= $nav ?>
        <!-- /top navigation -->

        <!-- page content -->
          <?= $content ?>
        <!-- /page content -->

       
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('vendor/dashboard/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('vendor/dashboard/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= base_url('vendor/dashboard/dropzone/dist/dropzone.js')?>"></script>
    
   <!--  <script src="<?= base_url('vendor/dashboard/fastclick/lib/fastclick.js')?>"></script>
    
    <script src="<?= base_url('vendor/dashboard/nprogress/nprogress.js')?>"></script>

         -->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
    <script src="<?= base_url('/build/js/custom.js')?>"></script> <!-- mim -->
    <script src="<?= base_url('js/dashboard.js') ?>"></script>
   
   <!-- iCheck -->
    
    <script src="<?= base_url('vendor/dashboard/datatables.net/js/jquery.dataTables.js')?>"></script>
    <script src="<?= base_url('vendor/dashboard/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?= base_url('vendor/dashboard/datatables.net-buttons/js/dataTables.buttons.js')?>"></script>
    <script src="<?= base_url('vendor/dashboard/datatables.net-buttons/js/buttons.html5.js')?>"></script>
    <script src="<?= base_url('vendor/dashboard/datatables.net-buttons/js/buttons.print.js')?>"></script>
    <script src="<?= base_url('vendor/dashboard/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?= base_url('vendor/dashboard/jszip/dist/jszip.min.js')?>"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.3.0/css/dataTables.dateTime.min.css">
    <script src="https://cdn.datatables.net/datetime/1.3.0/js/dataTables.dateTime.min.js"></script>

    <!-- Documents -->
    <script lang="javascript" src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>
    <script src="<?= base_url('js/documents.js') ?>"></script>

    <!-- <script src="<?= base_url('vendor/dashboard/iCheck/icheck.min.js')?>"></script> -->
    <!-- <script src="<?= base_url('vendor/dashboard/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script> -->
    <!-- <script src="<?= base_url('vendor/dashboard/datatables.net-buttons/js/buttons.flash.min.js')?>"></script> -->
    <!-- <script src="<?= base_url('vendor/dashboard/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script> -->
    <!-- <script src="<?= base_url('vendor/dashboard/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script> -->
    <!-- <script src="<?= base_url('vendor/dashboard/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script> -->
    <!-- <script src="<?= base_url('vendor/dashboard/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script> -->
    <!-- <script src="<?= base_url('vendor/dashboard/pdfmake/build/pdfmake.min.js')?>"></script> -->
    <!-- <script src="<?= base_url('vendor/dashboard/pdfmake/build/vfs_fonts.js')?>"></script> -->
 
  </body>
</html>
