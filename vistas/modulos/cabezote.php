<header class="main-header">

<!--=====================================
Logotipo
======================================-->

<a href="inicio" class="logo">
	
  <!-- logo mini  -->

<span class="logo-mini"><i class="fa fa-car"></i></span>

  <!-- logo normal  -->

<span class="logo-lg"><b>Aceitera Aguilar <i class="fa  fa-car"></i></b></span>
                         
</a>

<!--=====================================
BARRA DE NAVEGACION
======================================-->

<nav class="navbar navbar-static-top" role="navigation">

	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

		<span class="sr-only">Toggle navigation</span>

	</a>
	
		<!-- perfil de usuario -->


		<div class="navbar-custom-menu">
			
			
			<ul class="nav navbar-nav">

				<li class="dropdown user user-menu">


					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					<i class="fa fa-user"></i> 


						 <span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span> <i class="fa fa-caret-down"></i>
						
					</a>

		<!-- Dropdown-toggle -->


		  <ul class="dropdown-menu">

          <li class="user-body">

		  <div class="pull-right">
 		
 		   
		  <a href="salir" class="btn btn-link"> 

		  <div style="color:#000000;"> <b>Cerrar sesión </b>  

		  <i class="fa  fa-power-off" style="color:#FF0000;"></i>


		  </div>

		  </a> 

     

        </div>		  		
       
       </li>
      
      </ul>			
     
     </li>
    
    </ul>
   
   </div>
 
 </nav>

</header>

