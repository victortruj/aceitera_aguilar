<aside class="main-sidebar">

	<section class="sidebar">
		
		<ul class="sidebar-menu">

			<?php 


			if ($_SESSION["perfil"] == "Administrador") {
				
			

		echo '<li class="active">

            <a href="inicio"><i class="fa fa-home"></i><span>Inicio</span></a></li>
			
			<li><a href="usuarios"><i class="fa fa-user"></i><span>Usuarios</span></a></li>';

			}



		if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor") {
	
		echo '<li><a href="clientes"><i class="fa fa-user-plus"></i><span>Clientes</span></a></li>';

			}

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Bodega") {

		echo '<li><a href="categorias"><i class="fa fa-align-left"></i><span>Categorias</span></a></li>

			<li><a href="productos"><i class="fa  fa-pinterest-p"></i><span>Productos</span></a></li>';

		}


			if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor") {

		echo '<li class="treeview">

				<a href="#"><i class="fa  fa-cart-plus"></i><span>Ventas</span>
					
					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>

					<ul class="treeview-menu">

						<li><a href="ventas"><i class="fa fa-database"></i><span>Administracion</span></a></li>

						<li><a href="crear-venta"><i class="fa fa-share-square-o"></i><span>Nueva Venta</span></a></li>';

					}


					if ($_SESSION["perfil"] == "Administrador") {

				echo '<li><a href="reportes"><i class="fa  fa-area-chart"></i><span>Reportes</span></a></li>';


				echo '</ul>
					
				</li>';

			}

		?>

			</ul>

		</section>
		
	</aside>