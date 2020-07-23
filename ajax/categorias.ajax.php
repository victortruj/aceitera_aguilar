<?php

	require_once "../controladores/categorias.controlador.php";
	require_once "../modelos/categorias.modelo.php";


class AjaxCategorias{


/*=============================================
	VALIDAR NO REPETIR CATEGORIA
	=============================================*/	

	public $validarCategoria;

	public function ajaxValidarCategoria(){

		$item = "categoria";
		$valor = $this->validarCategoria;

		$respuesta = ControladorCategorias::ctrMostrarCategorias($item, $valor);

		echo json_encode($respuesta);

	}



}

/*=============================================
VALIDAR NO REPETIR CATEGORIA
=============================================*/

if(isset( $_POST["validarCategoria"])){

	$valCategoria = new AjaxCategorias();
	$valCategoria -> validarCategoria = $_POST["validarCategoria"];
	$valCategoria -> ajaxValidarCategoria();

}