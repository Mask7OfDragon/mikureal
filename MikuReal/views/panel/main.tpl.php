<?php 

/**
 * @author     <Mask7OfDragon>
 */

session_start();

if(!isset($_SESSION['MRF_AUTH'])) {

  header('location: /panel/auth');
  
}

// Bloque de configuraciones

require $_SERVER['DOCUMENT_ROOT'] . '/app/config.php';

// Bloque de funciones

$database = $firebase->getDatabase();

$Movie = $database->getReference('m_movies');
$getMovies = $Movie->getSnapshot();

$Series = $database->getReference('s_series');
$getSeries = $Series->getSnapshot();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo MRF_TITLE ?> | Panel de administracion</title>
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
  <!-- build:css /assets/static/styles/app.min.css -->
  <link rel="stylesheet" href="/assets/static/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="/assets/static/styles/font.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal fade nav-dropdown">
    <!-- fluid app aside -->
    <div class="left navside dark dk" layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
          <div ui-include="'/assets/static/images/logo.svg'"></div>
          <img src/assets/static/static/images/logo.png" alt="." class="hide">
          <span class="hidden-folded inline"><?php echo MRF_TITLE ?></span>
        </a>
        <!-- / brand -->
      </div>
      <div flex class="hide-scroll">
          <nav class="scroll nav-light">
            
              <?php require $_SERVER['DOCUMENT_ROOT'] . '/app/layouts/panel/navbar.layouts.php'; ?>

          </nav>
      </div>
    </div>
  </div>
  <!-- / -->

  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar">
              <a data-toggle="collapse" data-target="#navbar-5" class="navbar-item pull-right hidden-md-up m-a-0 m-l">
                <i class="material-icons">&#xe5d2;</i>
              </a>

              <!-- nabar right -->
              <?php require $_SERVER['DOCUMENT_ROOT'] . '/app/layouts/panel/header.layouts.php' ?>
              <!-- / navbar right -->
        </div>

    </div>
    <div class="app-footer">
    </div>

    <div ui-view class="app-body" id="view">
      <div class="padding">

        <div class="row">
          <div class="col-xs-12 col-sm-3">
                <div class="box p-a">
                  <div class="pull-left m-r">
                    <span class="w-48 rounded  accent">
                      <i class="material-icons">&#xe037;</i>
                    </span>
                  </div>
                  <div class="clear">
                    <h4 class="m-a-0 text-lg _300"><a href><?php echo $getSeries->numChildren(); ?> <span class="text-sm">Series</span></a></h4>
                    <small class="text-muted">Agregadas</small>
                  </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="box p-a">
                  <div class="pull-left m-r">
                    <span class="w-48 rounded primary">
                      <i class="material-icons">&#xe02c;</i>
                    </span>
                  </div>
                  <div class="clear">
                    <h4 class="m-a-0 text-lg _300"><a href><?php echo $getMovies->numChildren(); ?> <span class="text-sm">Películas</span></a></h4>
                    <small class="text-muted">Agregadas</small>
                  </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="box p-a">
                  <div class="pull-left m-r">
                    <span class="w-48 rounded warn">
                      <i class="material-icons">&#xe8d3;</i>
                    </span>
                  </div>
                  <div class="clear">
                    <h4 class="m-a-0 text-lg _300"><a href>600 <span class="text-sm">Users</span></a></h4>
                    <small class="text-muted">632 vips.</small>
                  </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="box p-a">
                  <div class="pull-left m-r">
                    <span class="w-48 rounded warn">
                      <i class="material-icons">&#xe8d3;</i>
                    </span>
                  </div>
                  <div class="clear">
                    <h4 class="m-a-0 text-lg _300"><a href>600 <span class="text-sm">Users</span></a></h4>
                    <small class="text-muted">632 vips.</small>
                  </div>
                </div>
            </div>            
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="box">
            <div class="box-header">
              <span class="label success pull-right">Registro</span>
              <h3>Actividad</h3>
              <small>tu actividad en el sitio.</small>
            </div>
            <div class="box-body">
              <div class="streamline b-l m-b m-l">
                    <div class="sl-item">
                      <div class="sl-left">
                        <img src="https://68.media.tumblr.com/024585fba025c9bcdde9e26fc943e9fa/tumblr_nwsj4msQIJ1uo43aqo3_250.png" class="img-circle">
                      </div>
                      <div class="sl-content">
                        <a href class="text-info">Louis Elliott</a><span class="m-l-sm sl-date">5 min ago</span>
                        <div>assign you a task <a href class="text-info">Mockup Design</a>.</div>
                      </div>
                    </div>
                    <div class="sl-item">
                      <div class="sl-left">
                        <img src="https://68.media.tumblr.com/024585fba025c9bcdde9e26fc943e9fa/tumblr_nwsj4msQIJ1uo43aqo3_250.png" class="img-circle">
                      </div>
                      <div class="sl-content">
                        <a href class="text-info">Terry Moore</a><span class="m-l-sm sl-date">10 min ago</span>
                        <div>Follow up to close deal</div>
                      </div>
                    </div>
                    <div class="sl-item">
                      <div class="sl-left">
                        <img src="https://68.media.tumblr.com/024585fba025c9bcdde9e26fc943e9fa/tumblr_nwsj4msQIJ1uo43aqo3_250.png" class="img-circle">
                      </div>
                      <div class="sl-content">
                        <a href class="text-info">Walter Paler</a><span class="m-l-sm sl-date">1 hour ago</span>
                        <div>was added to Repo</div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </div>
  </div>
  <!-- / -->

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
<!-- endbuild -->
</body>
</html>