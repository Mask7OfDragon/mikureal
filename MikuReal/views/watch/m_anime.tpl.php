<?php 

/**
 * @author     <Mask7OfDragon>
 */

// Bloque de configuraciones

require $_SERVER['DOCUMENT_ROOT'] . '/app/config.php';

// Bloque de datos.

if (isset($_REQUEST['identifier'])) {
  
  $_anime = $_REQUEST['identifier'];

} else {
  
  //require $_SERVER['DOCUMENT_ROOT'] . '/views/mistakes/not-found.tpl.php';

}

// Bloque de instrucciones

$database = $firebase->getDatabase(); // <- Definimos una base de datos.

$reference = $database->getReference("m_anime/$_anime");
$snapshot = $reference->getSnapshot();

$sinopsis = $snapshot->getValue()['sinopsis'];

$resumen = substr($sinopsis, 0, 300);

?>

<!DOCTYPE html>
<html>
<head>

  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Mask7OfDragon - Ver <?php echo $snapshot->getValue()['nombre']; ?></title>

  <!-- Always Use Same -->
  <link rel="shortcut icon" href="/assets/app/favicon.png"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/components/icon.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/ui/components/image.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/ui/components/transition.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/ui/components/default/sidebar.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/ui/components/default/checkbox.css">
  <!--
    These css files are pre-compiled
    to test out gulp
    use static.html, run gulp from semantic/, and modify theme.config or variables
  !-->
  <link rel="stylesheet" type="text/css" href="/assets/css/ui/components/github/form.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/modal.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/card.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/reset.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/site.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/breadcrumb.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/button.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/container.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/divider.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/dropdown.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/grid.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/header.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/input.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/label.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/list.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/menu.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/message.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/popup.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/reveal.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/segment.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/table.css">
  <link class="themable" rel="stylesheet" type="text/css" href="/assets/css/ui/components/material/embed.css">

  <link rel="stylesheet" type="text/css" href="/assets/css/global.classic.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/layouts/home.classic.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/layouts/theme.css">

</head>

<body id="home" class="pushable">
  <div class="pusher">
    <!-- Global Header -->
    <div class="page header">
      <div class="ui container">

        <div class="ui right floated icon text menu">
          <a class="item" data-content="Ve anime y manga en hd con este fabuloso sitio web.">
            <span class="ui empty mini floating circular blue notification label"></span>
            <i class="bell icon"></i>
          </a>
          <div class="user top right pointing ui dropdown item" data-content="Ver perfil y más" tabindex="0">
            <img class="ui mini rounded image" src="/assets/images/avatar.jpg">
            <i class="dropdown icon"></i>
            <div class="menu" tabindex="-1">
              <div class="user header">
                Bienvenido <b>Invitado</b>
              </div>
              <div class="divider"></div>
              <a class="item">Iniciar sesión</a>
            </div>
          </div>
        </div>

        <div class="ui text menu">
          <a class="icon item" href="/home">
            <i class="large emphasized heart mark icon"></i>
          </a>
          <div class="item">
            <a class="item">
              <b>Proyectos</b>
            </a>
            <a class="item">
              <b>Blog</b>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="page content">
      <!-- Repo Content -->
      <div class="ui equal width vertically padded grid container">
        <div class="column">

          <div class="ui segments">
            <div class="ui readme padded segment">              
              <div class="ui cards">

                <div class="ui card">
                  <div class="image">
                    <img src="<?php echo $snapshot->getValue()['thumbnails']; ?>">
                  </div>
                  <div class="ui one bottom attached buttons">
                    <button class="ui primary button" onclick="gotrailer()"><i class="play icon"></i> ver trailers </button>
                  </div>                  
                </div>

                  <div class="ui card">
                    <div class="content">
                      <div class="header"><?php echo $snapshot->getValue()['nombre']; ?></div>
                        <div class="summary"><?php echo $snapshot->getValue()['nombre_jp']; ?> <small><?php echo $snapshot->getValue()['fecha']; ?></small></div>
                        <div class="summary"><?php echo $snapshot->getValue()['Género']; ?></div>
                    </div>
                    <div class="content">
                      <div class="description">
                        <div class="event">
                          <div class="content">
                            <div class="summary"><?php echo $resumen; ?> [...]</div>
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
    </div>
    <div class="footer">
      <div class="ui container">
        <div class="ui section divider"></div>
        <div class="ui small right floated horizontal list">
          <div class="disabled item" href="#">© Acme, Inc.</div>
          <a class="item" href="#">Hello World</a>
        </div>
        <i class="large gift mark icon"></i>
        <div class="ui small horizontal list">
          <p class="item">Acme Inc.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->

  <div class="ui modal">
    <i class="close icon"></i>
    <div class="header">
      Trailer de <?php echo $snapshot->getValue()['nombre']; ?>
    </div>
    <div class="image content">
      <iframe src="<?php echo $snapshot->getValue()['trailers']; ?>" width="100%" height="400" frameborder="0" scrolling="no" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>      
    </div>
    <div class="actions">
      <div class="ui positive white label"><i class="play icon"></i> Ocultar </div>
    </div>
  </div>

  <!-- /Modal -->

  <!-- JS Includes -->
  <script src="/assets/javascript/library/jquery.min.js"></script>
  <script src="/assets/css/ui/semantic.min.js"></script>  
  <script src="/assets/javascript/home.js"></script>
  <script src="/assets/javascript/theme.js"></script>

  <script type="text/javascript">

  function gotrailer() {

    $('.ui.modal')
      .modal({
        inverted: true
      })
      .modal('show')
    ;   

  } 

  </script>


</body>

</html>