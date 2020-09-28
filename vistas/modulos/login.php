<div id="back"></div>

<div class="login-box">
  <div class="login-logo">


    <a  style="color:#088A29";><b>Aceitera Y Repuestos Aguilar </b><i class="fa fa-car"></i></a>

  </div>

  <form method="post">

    <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    
    <div class="form-group has-feedback">

      <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>


    </div>
    
    <div class="row">

      <div class="col-xs-12">


        <button type="submit" class="btn btn-success btn-sm btn-block">Iniciar sesión</button>

      </div>
      <!-- /.col -->
    </div>


    <?php

    $login = new ControladorUsuarios();
    $login -> ctrIngresoUsuario();

    ?>

  </form>

</div>
