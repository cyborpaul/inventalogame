<?php
require 'components/header.general.php';
?>

    <!--Container Main start-->
    <div class="height-100 bg-light">
    <div class="card">
              <div class="card-header">
                <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                <h3 class="card-title">Gestor banco de preguntas</h3>
                  <a href="preguntasregister.php"><button class="btn btn-success">Ingresar nuevas preguntas <i class="bx bx-plus nav_icon"></i></button></a>
                </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Pregunta</th>
                    <th>Servicio</th>
                    <th>Nivel</th>
                    <th>Asignatura</th>
                    <th>Opciones avanzadas</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $query = "SELECT * FROM `inventalogame_preguntas` ip INNER JOIN inventalogame_servicios ise ON ip.pre_varchar_servicio=ise.ser_int_id INNER JOIN inventalogame_niveles inv ON ip.niv_int_id=inv.niv_int_id INNER JOIN inventalogame_asignaturas ia ON ip.asi_int_id=ia.asi_int_id ORDER BY pre_int_id DESC";
                      require 'config.php';                    
                      $result_tasks = mysqli_query($mysqli, $query);
                      $contador=1;
                      while($row = mysqli_fetch_assoc($result_tasks)) {
                    ?>
                  <tr>
                    <td><?php echo $contador;?></td>
                    <td><?php echo $row['pre_txt_preguntas']; ?></td>
                    <td><?php echo $row['ser_varchar_servicio']; ?></td>
                    <td><?php echo $row['niv_varchar_nivel']; ?></td>
                    <td><?php echo $row['asi_varchar_asignatura']; ?></td>
                    <td><a href="editar_pregunta.php?id=<?php echo $row['pre_int_id']; ?>">Editar</a></td>
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
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "ordering": false,
      "pageLength": 500

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>    
</body>
</html>

    