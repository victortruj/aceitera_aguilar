<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <h1>
       
        <i class="fa fa-home"></i> Inicio
        
      </h1>
    
    </section>


  <section class="content">

    <div class="row">
      
    <div class="col-lg-12">
      
      <img src="vistas/img/plantilla/inicio.png">


    </div>

    </div>
    <br>

     
     <div class="row">
       
      <div class="col-lg-12">
        

        <?php 

          if ($_SESSION["perfil"] == "Administrador") {
            
          

          include "reportes/grafico-ventas.php";

          }

         ?>

      </div>

        <div class="col-lg-10">
          
     <?php 

   if ($_SESSION["perfil"] == "Bodega" || $_SESSION["perfil"] == "Vendedor"  ) {
     
      echo '<div class="box box-success">


      <h1>Hola. '.$_SESSION["nombre"].', Bienvenid@ al sistema.</h1>


      </div>';
       

   }


      ?>



        </div>


     </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
