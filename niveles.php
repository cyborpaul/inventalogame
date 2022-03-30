<?php
require 'components/header.general.php';
?>

    <!--Container Main start-->
    <div class="height-100 bg-light">
    <div class="card">
              <div class="card-header">
                <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                <h3 class="card-title">Gestor niveles de las preguntas</h3>
                  <a href="niveles_register.php"><button class="btn btn-success">Ingresar niveles<i class="bx bx-plus nav_icon"></i></button></a>
                </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nivel</th>
                    <th>Descripción </th>
                    <th>Opciones avanzadas</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $query = "SELECT * FROM `inventalogame_niveles`";
                      require 'config.php';                    
                      $result_tasks = mysqli_query($mysqli, $query);
                      $contador=1;
                      while($row = mysqli_fetch_assoc($result_tasks)) {
                    ?>
                  <tr>
                    <td><?php echo $row['niv_int_id']; ?></td>
                    <td><?php echo $row['niv_varchar_nivel']; ?></td>
                    <td><?php echo $row['niv_varchar_descripcion']; ?></td>
                    <td><a href="mapa.php">Ver en mapa</a></td>
                  </tr>
                  <?php $contador++;} ?>
                  
                  </tfoot>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        
    </div>



    <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Resultados _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"},
      
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>    
</body>
</html>

    