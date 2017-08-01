              <ul class="nav" ui-nav>
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Principal</small>
                </li>
                
                <li>
                  <a href="/panel" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'/assets/static/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Inicio</span>
                  </a>
                </li>

                <li class="nav-header hidden-folded">
                  <small class="text-muted">Contenido</small>
                </li>  

                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label">
                      <b class="label label-sm accent"><?php echo $getSeries->numChildren(); ?></b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe037;
                      </i>
                    </span>
                    <span class="nav-text">Series</span>
                  </a>
                  <ul class="nav-sub nav-mega nav-mega-3">
                    <li>
                      <a href="/panel/serie/list" >
                        <span class="nav-text">Lista</span>
                      </a>
                    </li>
                    <li>
                      <a href="/panel/serie/add" >
                        <span class="nav-text">Agregar</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label">
                      <b class="label label-sm accent"><?php echo $getMovies->numChildren(); ?></b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe02c;
                      </i>
                    </span>
                    <span class="nav-text">Películas</span>
                  </a>
                  <ul class="nav-sub nav-mega nav-mega-3">
                    <li>
                      <a href="/panel/movie/list" >
                        <span class="nav-text">Lista</span>
                      </a>
                    </li>
                    <li>
                      <a href="/panel/movie/add" >
                        <span class="nav-text">Agregar</span>
                      </a>
                    </li>
                  </ul>
                </li>          
              </ul>