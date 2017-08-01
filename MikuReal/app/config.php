<?php 

/**
 * @author     <Mask7OfDragon>
 */

// Bloque de configuraciones

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

// Bloque de credenciales

use Kreait\Firebase;

$firebase = (new Firebase\Factory())
    ->withCredentials($_SERVER['DOCUMENT_ROOT'] .'/app/api/google-service-account.json')
    ->withDatabaseUri('https://iron-dynamics-165605.firebaseio.com')
    ->create();


// Bloque de variables globales

define('MRF_TITLE','MikuReal');
define('MRF_COPY','Copyright &copy; ' . date('Y',time()) . ' MikuReal Todos los derechos reservados.');

?>