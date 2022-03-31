<div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Actualización de asignatura</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                  <?php 
                  if(isset($_POST['register'])){
                    require 'components/editasignatura.php';
                  }
                  ?>
                <div class="card-body">
                <?php
                        $id = $_GET['id'];
                        require 'config.php';	
                        $query = "SELECT * FROM `inventalogame_asignaturas` WHERE asi_int_id='$id'";
                        $resul = mysqli_query($mysqli, $query);
                        $datos = mysqli_fetch_row($resul); 
                        $idpla=$datos[0];
                        //echo $idpla;
                    ?>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre asignatura</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre de la institución" name="asignatura" value="<?php echo $datos[1];?>">
                  </div>
                  <div class="form-group">
                    <label for="user">Descripciòn de asignatura</label>
                    <textarea name="descripcion" id="" cols="30" rows="10" class="form-control"><?php echo $datos[2];?></textarea>
                  </div>
                  <div class="form group">
                  <label for="checks">Estado</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="check" value="0">
                          <label for="customRadio1" class="custom-control-label">Habilitado</label>
                        </div>
                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="register" class="btn btn-primary">Registrar nueva sede</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>