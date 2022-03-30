<div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de niveles </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                  <?php 
                  if(isset($_POST['register'])){
                    require 'components/newnivel.php';
                  }
                  ?>
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Registrar nivel</label>
                    <input type="text" class="form-control" name="nivel">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion nivel</label>
                    <textarea name="descripcion" class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="register" class="btn btn-primary">Guardar nivel</button>
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