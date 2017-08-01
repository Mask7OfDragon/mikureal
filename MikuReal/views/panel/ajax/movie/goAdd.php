<?php 

/**
 * @author     <Mask7OfDragon>
 */

session_start();

// Modulo de comprobacion

require $_SERVER['DOCUMENT_ROOT'] . '/app/config.php';

$database = $firebase->getDatabase();


if(isset($_SESSION['MRF_AUTH'])) {

	if (!empty($_POST['nombre']) and !empty($_POST['nombre_jp']) and !empty($_POST['fecha']) and !empty($_POST['estado']) and !empty($_POST['sinopsis']) and !empty($_POST['género']) and !empty($_POST['trailer']) and !empty($_POST['thumbnail'])) {

	$NewMovie = $database
		->getReference('m_anime')
		->push([
			'fecha' => $_POST['fecha'],
			'nombre' => $_POST['nombre'],
			'nombre_jp' => $_POST['nombre_jp'],
			'estado' => $_POST['estado'],
			'Género' => $_POST['género'],
			'sinopsis' => $_POST['sinopsis'],
			'thumbnails' => $_POST['thumbnail'],
			'trailers' => $_POST['trailer']
			]);

		  echo "<div class='alert alert-info no-border'>
		                  <button type='button' class='close' data-dismiss='alert'><span>×</span><span class='sr-only'>Close</span></button>
		                  <span class='text-semibold'> <a href=https://preview-mikureal.legacyig.net/watch/". $NewMovie->getKey() ." target='_blank'>se ha agregado</a> </span> correctamente.
		                  </div>";		
	} else {

	  echo '<div class="alert alert-danger no-border">
	                  <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
	                  <span class="text-semibold">Ups!</span> Todos los datos son requeridos.
	                  </div>';		
	}


} else {

  echo '<div class="alert alert-danger no-border">
                  <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                  <span class="text-semibold">Ups!</span> Requieres iniciar sesion antes.
                  </div>';

}

?>