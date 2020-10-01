<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <h1>
       <i class="fa  fa-area-chart"></i> Reportes de ventas
        
      </h1>
      
      <ol class="breadcrumb">
        
        <li><a href="inicio"><i class="fa fa-home"></i>Inicio</a></li>
      
      </ol>
    
    </section>

  
  <section class="content">

      
      <div class="box">

        <div class="box-header with-border">

        <div class="input-group">

          <button type="button" class="btn btn-success" id="daterange-btn2">
           
            <span>
              <i class="fa fa-calendar"></i> Rango de fecha
            </span>

            <i class="fa fa-caret-down"></i>

          </button>

        </div>

         

          <div class="box-tools pull-right"></div>
        
        </div>
        <div class="box-body">


        <div class="row">

          <div class="col-xs-12">
            
            <?php

            include "reportes/grafico-ventas.php";

            ?>

          </div>
          
        </div>
          
        </div>
        
        
      </div>
    

  </section>

</div>

