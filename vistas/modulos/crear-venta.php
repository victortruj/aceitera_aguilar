
  <div class="content-wrapper">
    
    <section class="content-header">
      
      <h1>
        <i class="fa fa-share-square-o"></i> Crear venta
        
      </h1>
      
      <ol class="breadcrumb">
        
        <li><a href="inicio"><i class="fa fa-home"></i>Inicio</a></li>
        

      </ol>
    
    </section>

<section class="content">

  <div class="row">

    <!-- FORMULARIO -->

  <div class="col-lg-5 col-xs-12">
        
        <div class="box box-success">
          
          <div class="box-header with-border"></div>

          <form role="form" method="post" class="formularioVenta">

            <div class="box-body">
  
              <div class="box">

<!-- Vendedor ENTRADA-->

  <div class="form-group">
    
    <div class="input-group">
      
      <span class="input-group-addon"><i class="fa fa-user"></i></span> 

      <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

       <input type="hidden" name="idVendedor" value="<?php echo $_SESSION["id"]; ?>">


    </div>
  </div>

<!-- codigo venta  -->


<div class="form-group">
    
    <div class="input-group">
      
      <span class="input-group-addon"><i class="fa fa-barcode"></i></span> 

 <?php

      $item = null;
      $valor = null;

      $ventas = ControladorVentas::ctrMostrarVentas($item, $valor);

      if(!$ventas){

      echo '<input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="1" readonly>';
                  

      }else{

      foreach ($ventas as $key => $value) {
                        
      }

      $codigo = $value["codigo"] + 1;



    echo '<input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="'.$codigo.'" readonly>';
                  

    }

    ?>
                    

    </div>
  </div>

<!-- cliente -->

<div class="form-group">
    
    <div class="input-group">
      
      <span class="input-group-addon"><i class="fa fa-user-plus"></i></span> 
 

  <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>

      <option value="">Seleccionar cliente</option>


    <?php

    $item = null;
    $valor = null;

    $categorias = ControladorClientes::ctrMostrarClientes($item, $valor);

    foreach ($categorias as $key => $value) {

    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

      }

  ?>

      
</select>


      <span class="input-group-addon"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button></span>


    </div>
  </div>

<!-- AGREGAR PRODUCTO -->


 <div class="form-group row nuevoProducto">
   
  

</div>

 <!-- BTN AGREGAR PRODUCTO --> 
 <!-- se utiliza para dispositivos moviles-->

<button type="button" class="btn-default hidden-lg btnAgregarProducto">Agregar producto</button>

<hr>

<div class="row">

  <!-- IMPUESTOS / TOTAL -->
  
<div class="col-xs-8 pull-right">
  
<table class="table">
  
<thead>
  
<tr>
  
<th>Impuesto</th>
<th>Total</th>

</tr>

</thead>

<tbody>
  
<tr>
  
  <!-- impuesto -->
  <td style="width: 50%">
    

<div class="input-group">
  

<input type="number" class="form-control" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" 
placeholder="00" required>


  <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" required>

  <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" required>

<span class="input-group-addon"><i>%</i></span>

</div>


  </td>

<!-- total -->
  <td style="width: 50%">
    

<div class="input-group">
  
<span class="input-group-addon"><i>Q</i></span>

<input type="text" class="form-control" id="nuevoTotalVenta" name="nuevoTotalVenta" total="" 
placeholder="00000" readonly required>

      </div>

    </td>

  </tr>

</tbody>


</table>

</div>


</div>

<hr>

  <!-- METODO DE PAGO -->

 <div class="form-group row">
  
<div class="col-xs-6" style="padding-right:0px">
                    
                     <div class="input-group">
                  
                      <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                        <option value="">Tipo de pago</option>
                        <option value="Efectivo">Efectivo</option>
                        <option value="TC">Tarjeta Crédito</option>
                        <option value="TD">Tarjeta Débito</option>                  
                      </select>    

                    </div>

                  </div>

<div class="col-xs-6" style="padding-left:0px">
                    
 <div class="input-group">
                  
  <input type="number" class="form-control" id="nuevoCodigoTransaccion" name="nuevoCodigoTransaccion" 
placeholder="Numero de transaccion" required>

<span class="input-group-addon"><i class="fa fa-lock"></i></span> 
                    

        </div>

       </div>
    
      </div>

      <br>

    </div>
  
  </div>

<div class="box-footer">
  
<button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Guardar venta</button>

    </div>
   
   </form>
 
  </div>

</div>    


 <!-- TABLA DE PRODUCTOS -->


 <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
   
<div class="box box-danger">

  <div class="box-header with-border"></div>
    
    <div class="box-body">
      
   <table class="table table-bordered table-striped dt-responsive tablaVentas" width="100%">
     
<thead>
         
          <tr>
           
           <th style="width:15px">#</th>
           <th>Imagen</th>
           <th>Código</th>
           <th>Descripción</th>
           <th>Stock</th>
          <th>Acciones</th>

</tr> 

  </thead>



   </table>


    </div>


    
  </div>


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
              
                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span> 

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