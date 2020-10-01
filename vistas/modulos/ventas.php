<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
       <i class="fa fa-database"></i> Administrar ventas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box box-success">

      <div class="box-header with-border">
  
  <a href="crear-venta">
    
        <button class="btn btn-success">Nueva venta</button>
</a>

     <button type="button" class="btn btn-success pull-right" id="daterange-btn">
           
            <span>
              <i class="fa fa-calendar"></i> Rango de fecha
            </span>

            <i class="fa fa-caret-down"></i>

         </button>


      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Cliente</th>
           <th>Vendedor</th>
           <th>Forma de pago</th>
           <th>Neto</th>
           <th>Total</th> 
           <th>Fecha</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

        if(isset($_GET["fechaInicial"])){

            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];

          }else{

            $fechaInicial = null;
            $fechaFinal = null;

          }


         $respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);
         
        foreach ($respuesta as $key => $value) {
           
           echo '<tr>

                  <td>'.($key+1).'</td>';

                  $itemCliente = "id";
                  $valorCliente = $value["id_cliente"];

                  $respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                  echo '<td>'.$respuestaCliente["nombre"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["id_vendedor"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>

                  <td>'.$value["metodo_pago"].'</td>

                  <td>Q '.number_format($value["neto"],2).'</td>

                  <td>Q '.number_format($value["total"],2).'</td>

                  <td>'.$value["fecha"].'</td>

                  <td>

                    <div class="btn-group-xs">
                        
                     
                      <button class="btn btn-success btnEditarVenta" idVenta="'.$value["id"].'"><i class="fa fa-pencil-square-o"> Modificar</i></button>

                      <button class="btn btn-danger btnEliminarVenta" idVenta="'.$value["id"].'"><i class="fa fa-trash-o"></i> Eliminar</button>


                    </div>  

                  </td>

                </tr>';
            }

        ?>

        </tbody>

       </table>

       <?php

      $eliminarVenta = new ControladorVentas();
      $eliminarVenta -> ctrEliminarVenta();

      ?>

    </div>
   
   </div>
  
  </section>

</div>

