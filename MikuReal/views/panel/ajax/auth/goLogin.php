<?php 

/**
 * @author     <Mask7OfDragon>
 */

session_start();

// Modulo de comprobacion

if (!empty($_POST['user']) and !empty($_POST['pass'])) {
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	if ($user == 'admin' && $pass == 'admin') {

	  $_SESSION['MRF_AUTH'] = true;
	  echo 1;

	} else {

	  echo '<div class="alert alert-danger no-border">
	                  <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
	                  <span class="text-semibold">Ups!</span> Usuario o contraseña incorrectas.
	                  </div>';

	}


} else {

  echo '<div class="alert alert-danger no-border">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                    <span class="text-semibold">Ups!</span> Todos los datos son requeridos.
                    </div>';

}






?>