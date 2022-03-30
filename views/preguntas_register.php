        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de preguntas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                  <?php 
                  if(isset($_POST['register'])){
                    require 'components/newpregunta.php';
                  }
                  ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ingresar pregunta</label>
                    <textarea name="pregunta" id="" cols="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="user">Servicio</label>
                    <select name="servicio" id="" class="form-control" >
                      <option value="">Servicio vinculado</option>
                      <?php
                          require 'config.php';
          		            $query2 = $mysqli -> query ("SELECT * FROM inventalogame_servicios");
          		            while ($valores = mysqli_fetch_array($query2)) {
            	            echo '<option value="'.$valores['ser_int_id'].'">'.$valores['ser_varchar_servicio'].'</option>';
				                }				  
                      ?>
                    </select>
                  </div>                  
                  <div class="form-group">
                    <label for="user">Niveles</label>
                    <select name="nivel" id="" class="form-control" >
                      <option value="">Seleccionar nivel de la pregunta</option>
                      <?php
                          require 'config.php';
          		            $query2 = $mysqli -> query ("SELECT * FROM inventalogame_niveles");
          		            while ($valores = mysqli_fetch_array($query2)) {
            	            echo '<option value="'.$valores['niv_int_id'].'">'.$valores['niv_varchar_nivel'].'</option>';
				                }				  
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="user">Seleccionar asignatura</label>
                    <select name="asignatura" id="" class="form-control" >
                      <option value="">Seleccionar asignatura de la pregunta</option>
                      <?php
                          require 'config.php';
          		            $query = $mysqli -> query ("SELECT * FROM inventalogame_asignaturas");
          		            while ($valores = mysqli_fetch_array($query)) {
            	            echo '<option value="'.$valores['asi_int_id'].'">'.$valores['asi_varchar_asignatura'].'</option>';
				                }				  
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alternativa A</label>
                    <input type="text" class="form-control" name="optiona">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alternativa B</label>
                    <input type="text" class="form-control" name="optionb">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alternativa C</label>
                    <input type="text" class="form-control" name="optionc">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alternativa D</label>
                    <input type="text" class="form-control" name="optiond">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alternativa E</label>
                    <input type="text" class="form-control" name="optione">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Respuesta</label>
                    <input type="text" class="form-control" name="respuesta">
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
                  <button type="submit" name="register" class="btn btn-primary">Guardar pregunta</button>
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