<?php $path = $_SERVER['DOCUMENT_ROOT'];
require_once "$path/intra/model/php/Usuario.php";
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    
 <head>
 <title>Intranet - Ecotec Tecnologia Ecologia LTDA</title>      
    <?php require($path.'/intra/view/php/header.php'); ?><!--arquivos comuns do cabeçalho-->
    <!-- Switchery -->
    <link href="/intra/util/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
</head>   
    
<body class="nav-md">
<div class="container body">
    <div class="main_container">
    <?php require($path.'/intra/view/php/menu_lateral.php') ?><!--menu lateral-->
    <?php require($path.'/intra/view/php/menu_superior.php') ?><!--menu superior-->
   
    
    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Página Inicial</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!--<div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>-->
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Intranet Ecotec</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      Utilize os botões laterais para navegação
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php require($path.'/intra/view/php/footer.php') ?><!--rodape-->    
    </div><!--end of main container-->
 </div><!--end of container body-->
<?php require($path.'/intra/view/php/footer_script.php') ?><!--scripts do rodapé-->


</body>
</html>    
