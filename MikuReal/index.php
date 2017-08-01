<?php 

/**
 * @author     <Mask7OfDragon>
 */

// Bloque de configuraciones

require $_SERVER['DOCUMENT_ROOT'] . '/app/config.php';


// Bloque de instrucciones

$database = $firebase->getDatabase(); // <- Definimos una base de datos.

// Bloque de redirecionamiento

header('Location: /home')

	// $NewMovie = $database
	// 	->getReference('m_anime')
	// 	->push([
	// 		'fecha' => '15/05/2016',
	// 		'nombre' => 'Toki wo kakeru shōjo',
	// 		'nombre_jp' => '時をかける少女',
	// 		'estado' => 'Emitida',
	// 		'Género' => 'Animación, Ciencia ficción, Romance',
	// 		'sinopsis' => 'La historia presenta a Makoto Konno, una estudiante de secundaria que pasa la mayoría del tiempo con sus amigos de instituto, Chiaki Mamiya y Kousuke Tsuda tanto en las clases como fuera de ellas, sobre todo jugando al béisbol ya que están a punto de pasar de curso y tal vez no se vean tan a menudo. Todo cambia el día en que Makoto descubre accidentalmente que puede saltar en el tiempo, concretamente a un punto del pasado. De esta manera usa esta habilidad en su propio beneficio sin preocuparse de futuras consecuencias, ya que los cambios que a ella le parecen buenos acaban por repercutir negativamente en su propio futuro.',
	// 		'thumbnails' => 'https://firebasestorage.googleapis.com/v0/b/iron-dynamics-165605.appspot.com/o/thumbnails%2FToki%20wo%20kakeru%20sh%C5%8Djo.jpg?alt=media&token=bb72d26b-d797-4163-9864-3913b0ac6178',
	// 		'trailers' => 'https://www.youtube.com/embed/QxhF1BDrYTM'
	// 		]);

	// 		$NewMovie->getKey();
	// 		$NewMovie->getUri();

	// 		echo $NewMovie->getUri();
?>