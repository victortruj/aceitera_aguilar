<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
     Clientes
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-home"></i>Inicio</a></li>
      
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregarCliente">
          
          Agregar cliente

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>DPI</th>
           <th>Correo</th>
           <th>Telefono</th>
           <th>Direccion</th>
           <th>Fecha nacimiento</th>
           <th>Total compras</th>
           <th>Ultima compra</th>
           <th>Ingreso al sistema</th>
           <th>Acciones</th>


         </tr> 

        </thead>

        <tbody>
          
          <tr>

            <td>1</td>

            <td>Marlon Aguilar</td>

             <td>2229129790207</td>

             <td>vtrujillor@miumg.edu.gt</td>

             <td>55372411</td>

             <td>Avenida Ismael Arriaza 0-68 zona 2 sanarate</td>

             <td>01-03-1987</td>

             <td>20</td>

            <td>2020-08-24 09:47:10</td>

            <td>2020-08-24 09:47:10</td>

            <td>

              <div class="btn-group">
                  
                <button class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times-circle-o"></i></button>

              </div>  

            </td>

          </tr>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
Modal agregar cliente
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        Cabeza modal
        ======================================-->

        <div class="modal-header" style="background:#2d862d; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

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

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Nombre" required>

              </div>

            </div>

            <!--DPI-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa  fa-credit-card"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="DPI" required>

              </div>

            </div>

            <!-- Correo -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Correo" required>

              </div>

            </div>

            <!-- Telefono -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-whatsapp"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Telefono" data-inputmask="'mask':'(999) 9999-9999'" data-mask required>

              </div>

            </div>

            <!-- Direccion -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Direccion" required>

              </div>

            </div>

             <!-- Fecha Nacimiento -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Fecha de nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        Pie nodal
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-success">Guardar cliente</button>

        </div>

      </form>

       <?php

        $crearCliente = new ControladorClientes();
        $crearCliente -> ctrCrearCliente();

      ?>

    </div>

  </div>

</div>