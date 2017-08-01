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
          <div class="col-sm-6">
            <form ui-jp="parsley">
              <div class="box">
                <div class="box-header">
                  <h2>Register</h2>
                </div>
                <div class="box-body">
                  <p class="text-muted">Please fill the information to continue</p>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" required>                        
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required>                        
                  </div>
                  <div class="row m-b">
                    <div class="col-sm-6">
                      <label>Enter password</label>
                      <input type="password" class="form-control" required id="pwd">   
                    </div>
                    <div class="col-sm-6">
                      <label>Confirm password</label>
                      <input type="password" class="form-control" data-parsley-equalto="#pwd" required>      
                    </div>   
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" placeholder="XXX XXXX XXX" required>
                  </div>
                  <div class="checkbox">
                    <label class="ui-check">
                      <input type="checkbox" name="check" checked required="true"><i></i> I agree to the <a href="#" class="text-info">Terms of Service</a>
                    </label>
                  </div>
                </div>
                <div class="dker p-a text-right">
                  <button type="submit" class="btn info">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-sm-6">
            <form ui-jp="parsley">
              <div class="box">
                <div class="box-header">
                  <h2>Contact</h2>
                </div>
                <div class="box-body">
                  <p class="text-muted">Need support? please fill the fields below.</p>                        
                    <div class="row m-b">
                      <div class="col-sm-6">
                        <label>Your name</label>
                        <input type="text" class="form-control" placeholder="Name" required>
                      </div>
                      <div class="col-sm-6">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Your website</label>
                      <input type="url" required class="form-control" placeholder="Your website url">
                    </div>
                    <div class="form-group">
                      <label>Message</label>
                      <textarea class="form-control" rows="6" data-minwords="6" required placeholder="Type your message"></textarea>
                    </div>
                </div>
                <div class="dker p-a text-right">
                  <button type="submit" class="btn info">Submit</button>
                </div>
              </div>
            </form>
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

  <script src="/views/panel/assets/app/movie/algorithms.js"></script>
  <script src="/views/panel/assets/app/movie/goAdd.js"></script>  
<!-- endbuild -->
</body>
</html>