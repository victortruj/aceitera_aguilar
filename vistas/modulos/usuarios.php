<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <h1>
      
       <i class="fa fa-user"></i> Usuarios
        
      </h1>
      
      <ol class="breadcrumb">
        
        <li><a href="inicio"><i class="fa fa-home"></i>Inicio</a></li>
     
      
      </ol>
    
    </section>

  <!-- Main content -->
  <section class="content">
 
      <!-- Default box -->
      <div class="box box-success">
        <div class="box-header with-border">

      <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregarUsuario">
        
         Agregar usuario         

      </button> 


        </div>
        <div class="box-body">
          
           <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:15px">#</th>
           <th>Nombre</th>
           <th>Usuario</th>
           <th>Perfil</th>
           <th>Estado</th>
           <th>Último login</th>
           <th>Acciones</th>

         </tr> 

       </thead>

       <tbody>

        <?php 
        
        $item = null;
        $valor = null;
      
         $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

        foreach ($usuarios as $key => $value){
         
          echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>';

                  // eliminar
                  // if($value["foto"] != ""){

                  //   echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';

                  // }else{

                  //   echo '<td><img src="vistas/img/usuarios/default/default.png" class="img-thumbnail" width="40px"></td>';

                  //  }

                  echo '<td>'.$value["perfil"].'</td>';

                  // activar usuarios

                  if($value["estado"] != 0){

                    echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Habilitado</button></td>';

                  }else{

                    echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Deshabilitado</button></td>';

                  }             

                  echo '<td>'.$value["ultimo_login"].'</td>
                  <td>

                    <div class="btn-group-xs">
                        

                        <button class="btn btn-success btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil-square-o"></i> Modificar</button>



                       <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-trash-o"></i> Eliminar</button>
                    

                      

                    </div>  

                  </td>

                </tr>';
        }


           ?>
          
         
        </tbody>

   </table>

        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!--=====================================
Modal agregar usuario
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        Cabeza modal
        ======================================-->

        <div class="modal-header" style="background:#2d862d; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario</h4>

        </div>

        <!--=====================================
        Cuerpo modal
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- Nombre -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa  fa-pencil-square-o"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Nombre" required>

              </div>

            </div>

            <!-- Usuario -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Usuario" id="nuevoUsuario" required>

              </div>

            </div>

            <!-- Contraeña -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Contraseña" required>

              </div>

            </div>

            <!-- Seleccionar perfil -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user-plus"></i></span> 

                <select class="form-control input-lg" name="nuevoPerfil" required>
                  
                  <option value="">Selecionar perfil</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Bodega">Bodega</option>

                  <option value="Vendedor">Vendedor</option>

                </select>

              </div>

            </div>


          </div>

        </div>

        <!--=====================================
        Pie modal
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-success">Guardar usuario</button>

        </div>


       
        <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>


      </form>

    </div>

  </div>

</div>


<!--=====================================
Modal editar usuario
======================================-->

<div id="modalEditarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        Cabeza modal
        ======================================-->

        <div class="modal-header" style="background:#2d862d; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar usuario</h4>

        </div>

        <!--=====================================
        Cuerpo modal
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- Nombre -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span> 

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>

              </div>

            </div>

            <!-- Usuario -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>

              </div>

            </div>

            <!-- Contraseña -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Contraseña">

                <input type="hidden" id="passwordActual" name="passwordActual">

              </div>

            </div>

            <!-- Seleccionar perfil -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user-plus"></i></span> 

                <select class="form-control input-lg" name="editarPerfil">
                  
                  <option value="" id="editarPerfil"></option>

                  <option value="Administrador">Administrador</option>

                  <option value="Bodega">Bodega</option>

                  <option value="Vendedor">Vendedor</option>

                </select>

              </div>

            </div>

           
          </div>

        </div>

        <!--=====================================
        Pie modal
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-success">Modificar usuario</button>

        </div>

     <?php

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

?> 






