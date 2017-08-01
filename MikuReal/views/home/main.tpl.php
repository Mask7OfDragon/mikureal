<?php 

/**
 * @author     <Mask7OfDragon>
 */

session_start();

// Bloque de configuraciones

require $_SERVER['DOCUMENT_ROOT'] . '/app/config.php';

// Bloque de filtros

  if($_GET['Categories']) {

      switch (isset($_GET['Categories']) ? $_GET['Categories'] : null) {
        case 'movies':
          $filter = 'm_movies';
        break;
        case 'series';
          $filter = 's_series';
        break;          
        default:
          $filter = 'm_movies';        
        break;
      }
    } else {
      $filter = 'm_movies';
    }

// Bloque de instrucciones

$database = $firebase->getDatabase();

$reference = $database->getReference($filter);
$snapshot = $reference->getSnapshot();
          
$NewItems = $database->getReference($filter)->getChildKeys();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo MRF_TITLE ?> | Pagina principal</title>
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
            
              <ul class="nav" ui-nav>
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Paginas</small>
                </li>
                
                <li>
                  <a href="/home" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'/assets/static/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Inicio</span>
                  </a>
                </li>
          

                <li class="nav-header hidden-folded">
                  <small class="text-muted">Otros</small>
                </li>
            
              </ul>
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
              <ul class="nav navbar-nav pull-right">
                <?php 

                // Bloque de comprobacion de sesion.

                if(isset($_SESSION['MRF_AUTH'])) {
                
                  echo '
                  <li class="nav-item dropdown">
                    <a class="nav-link" href data-toggle="dropdown">
                      <span class="avatar w-32">
                        <img src="https://orig07.deviantart.net/806a/f/2014/351/9/b/yamada_kun_to_7_nin_no_majo_circle_icon_by_knives_by_knives1024-d8a5jy9.png" alt="...">
                        <i class="on b-white bottom"></i>
                      </span>
                      <span class="hidden-md-down nav-text m-l-sm text-left">
                        <span class="_500">MikuReal</span>
                        <small class="text-muted">Administrator</small>
                      </span>
                    </a>
                    <div class="dropdown-menu pull-right dropdown-menu-scale">
                      <a class="dropdown-item" href="/panel">
                        <span>Panel de administración</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item">Cerrar sesión</a>
                    </div>
                  </li> ';

                }


                ?>

                <li class="nav-item dropdown">
                  <a class="nav-link p-l b-l" href data-toggle="dropdown">
                    <i class="material-icons">&#xe7f4;</i>
                  </a>
                  <!-- dropdown -->
                  <div class="dropdown-menu pull-right w-xl animated fadeInUp no-bg no-border no-shadow">
                      <div class="scrollable" style="max-height: 220px">
                        <ul class="list-group list-group-gap m-a-0">
                          <li class="list-group-item dark-white text-color box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="https://68.media.tumblr.com/8afb43abc4dff11a033377de71a27505/tumblr_inline_n9qnkdcRoC1s6lw3t.png" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                              Agregada <a class="text-primary">Koe no katachi</a><br>
                              <small class="text-muted">02/02/2019</small>
                            </span>
                          </li>
                          <li class="list-group-item dark-white text-color box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="https://68.media.tumblr.com/8afb43abc4dff11a033377de71a27505/tumblr_inline_n9qnkdcRoC1s6lw3t.png" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                              Agregada <a class="text-primary">Koe no katachi</a><br>
                              <small class="text-muted">02/02/2019</small>
                            </span>
                          </li>
                          <li class="list-group-item dark-white text-color box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="https://68.media.tumblr.com/8afb43abc4dff11a033377de71a27505/tumblr_inline_n9qnkdcRoC1s6lw3t.png" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                              Agregada <a class="text-primary">Koe no katachi</a><br>
                              <small class="text-muted">02/02/2019</small>
                            </span>
                          </li>
                        </ul>
                      </div>
                  </div>
                  <!-- / dropdown -->
                </li>
              </ul>
              <!-- / navbar right -->
              <!-- navbar collapse -->
              <div class="collapse navbar-toggleable-sm" id="navbar-5">
                <!-- link and dropdown -->
                <ul class="nav navbar-nav navbar-nav-inline text-center pull-left m-r text-{{app.setting.theme.primary}}-hover">
                  <li class="nav-item">
                    <a class="nav-link" href="/home?Categories=movies">
                      <span class="nav-text">
                        <i class="fa fa-film"></i>
                        <span class="text-xs">Películas</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/home?Categories=series">
                      <span class="nav-text">
                        <i class="fa fa-play"></i>
                        <span class="text-xs">Series</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href>
                      <span class="nav-text">
                        <i class="fa fa-heart"></i>
                        <span class="text-xs">Comunidad</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href>
                      <span class="nav-text">
                        <i class="fa fa-bars"></i>
                        <span class="text-xs">Blog</span>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- / navbar collapse -->
        </div>

    </div>
    <div class="app-footer">
      <div class="p-a text-xs">
        <div class="pull-right text-muted">
          <?php echo MRF_COPY ?>
        </div>
        <div class="nav">
          <span class="text-muted">-</span>
          <a class="nav-link label accent" href="/home">Pagina principal</a>
        </div>
      </div>
    </div>

    <div ui-view class="app-body" id="view">
      <div class="padding">
          <?php 

          while ( ($identificador = current($NewItems)) !== FALSE ) {

           $NewItem = $database->getReference("$filter/$identificador");

            echo '
              <div class="col-xs-3 col-sm-12 col-md-3">
                <div class="box" height="100%">
                  <div class="item dark">
                      <a href><img src="'. $NewItem->getValue()['thumbnails'] .'" class="w-full" style="max-height: 350px"></a>
                      <div class="item-overlay black-overlay w-full">
                        <a href="watch/'. $NewItem->getKey() .'" class="center text-md"><i class="fa fa-play"></i></a>
                      </div>
                      <div class="bottom gd-overlay p-a-xs">
                        <a href class="text-md block p-x-sm">'. $NewItem->getValue()['nombre'] .'</a>
                      </div>
                  </div>
                  <a href="watch/'. $NewItem->getKey() .'" class="md-btn md-raised md-fab md-mini m-r pos-rlt md-fab-offset pull-right white"><i class="material-icons md-24">&#xe037;</i></a>
                  <div class="p-a">
                    <div class="text-muted m-b-xs">
                      <span class="m-r">'. $NewItem->getValue()['fecha'] .'</span>
                      <a><i class="fa fa-star-o"></i> 9.5/10</a>
                    </div>
                    <div class="m-b h-1x"><a href class="_800">'. $NewItem->getValue()['nombre'] .'</a></div> 
                  </div>
                </div>
              </div> ';

          next($NewItems);
        }             

        ?>      
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
  <script src="/assets/scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>