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
                      <a class="dropdown-item" href="/home">
                        <span>Regresar al sitio</span>
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