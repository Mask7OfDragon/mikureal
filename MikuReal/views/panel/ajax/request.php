<?php 

	if($_POST) {

	require $_SERVER['DOCUMENT_ROOT'] . '/app/config.php';

	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
	  case 'login':
	    require $_SERVER['DOCUMENT_ROOT'] . '/views/panel/ajax/auth/goLogin.php';
	  break;
	  case 'goMovieAdd';
	   	require $_SERVER['DOCUMENT_ROOT'] . '/views/panel/ajax/movie/goAdd.php';

	  default:
	    header('location: /home');
	break;
	}
	} else {
	header('location: /home');
	}

?>