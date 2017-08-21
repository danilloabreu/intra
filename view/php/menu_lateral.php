      <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/intra/index.php" class="site_title"><i class="fa fa-laptop"></i> <span>Intra-Ecotec</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!--<img src="/intra/images/img.jpg" alt="..." class="img-circle profile_img">-->
              </div>
              <div class="profile_info">
                <span>Bem vindo(a)</span>
                <h2><?php echo $_SESSION['usuario']->getUsuario() ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <?php if($_SESSION['usuario']->getAcesso_qualidade()) require_once "$path/intra/view/menu/menu_qualidade.html";?>   
              <?php if($_SESSION['usuario']->getAcesso_ambiental()) require_once "$path/intra/view/menu/menu_ambiental.html";?>   
              <?php if($_SESSION['usuario']->getAcesso_telefone()) require_once "$path/intra/view/menu/menu_telefone.html";?>   
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="/intra/view/login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>