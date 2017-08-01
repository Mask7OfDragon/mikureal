<?php 

/**
 * @author     <Mask7OfDragon>
 */

// Bloque de configuraciones

require $_SERVER['DOCUMENT_ROOT'] . '/app/config.php';

// Bloque de instrucciones

$database = $firebase->getDatabase(); // <- Definimos una base de datos.

$reference = $database->getReference('m_anime/-KiUMD_R-kMzrZfauGYH');
$snapshot = $reference->getSnapshot();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo MRF_TITLE ?> | Panel de administración</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="/assets/static/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="/assets/static/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="/assets/static/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="/assets/static/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="/assets/static/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/assets/static/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="/assets/static/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="/assets/static/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="/assets/static/styles/font.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div id="_AJAX_LOGIN_"></div>
      <div class="text-center m-b text-sm">
        Inicie sesión para continuar
      </div>
      <form name="login">
        <div class="md-form-group float-label">
          <input type="email" class="md-input" value="admin" id="user_login" ng-model="user.email" required>
          <label>Usuario</label>
        </div>
        <div class="md-form-group float-label">
          <input type="password" class="md-input" value="admin" id="pass_login" ng-model="user.password" required>
          <label>Contraseña</label>
        </div>      
        <button type="button" onclick="goLogin()" class="btn primary btn-block p-x-md">Iniciar sesión</button>
      </form>
    </div>
  </div>

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="/assets/libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="/assets/libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="/assets/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="/assets/libs/jquery/underscore/underscore-min.js"></script>
  <script src="/assets/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="/assets/libs/jquery/PACE/pace.min.js"></script>

  <script src="/assets/scripts/config.lazyload.js"></script>

  <script src="/assets/scripts/palette.js"></script>
  <script src="/assets/scripts/ui-load.js"></script>
  <script src="/assets/scripts/ui-jp.js"></script>
  <script src="/assets/scripts/ui-include.js"></script>
  <script src="/assets/scripts/ui-device.js"></script>
  <script src="/assets/scripts/ui-form.js"></script>
  <script src="/assets/scripts/ui-nav.js"></script>
  <script src="/assets/scripts/ui-screenfull.js"></script>
  <script src="/assets/scripts/ui-scroll-to.js"></script>
  <script src="/assets/scripts/ui-toggle-class.js"></script>

  <script src="/assets/scripts/app.js"></script>

  <!-- ajax -->
  <script src="/assets/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="/assets/scripts/ajax.js"></script>

  <script src="/views/panel/assets/app/auth/algorithms.js"></script>
  <script src="/views/panel/assets/app/auth/login.js"></script>  
<!-- endbuild -->
</body>
</html>