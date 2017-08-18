<?php $path = $_SERVER['DOCUMENT_ROOT'];?>
<!DOCTYPE html>
<html lang="pt-br">
    
 <head>
 <title>Sicor - Sistema de Corretores</title>      
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
        <div class="right_col " role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Proposta</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Análise de Proposta<small>inserir dados</small></h2>
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
                    <br />
                    <form id="#demo-form" class="form-horizontal form-label-left formularioEntrada" style="display:none">
                        <?php if (!empty($_GET['id'])) {
                            echo "<input type='hidden' id='idLoad' value=".$_GET['id'].">";
                           
                        }?>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="corretor">Corretor <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="corretor" name="corretor" placeholder="Nome do corretor/imobiliária" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comprador">Comprador<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="comprador" name="comprador" required="required" placeholder="Nome completo do comprador" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rendaLiquida">Renda Líquida (R$) <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="rendaLiquida" name="rendaLiquida" placeholder="Somente números" required="required" class="form-control col-md-7 col-xs-12 dinheiro">
                        </div>
                      </div>                     
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="entrada">Entrada líquida (R$) <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="entrada" name="entrada" required="required" placeholder="Somente números" class="form-control col-md-7 col-xs-12 dinheiro">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numParcela">Número de Parcelas <span >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="numParcela" name="numParcela" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valorParcela">Valor das Parcelas <span >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="valorParcela" name="valorParcela" placeholder="Somente números" required="required" class="form-control col-md-7 col-xs-12 dinheiro">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quadra">Quadra <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="quadra" name="quadra" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lote">Lote <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="lote" name="lote" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valorVenda">Valor da Venda <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="valorVenda" name="valorVenda" placeholder="Somente números" required="required" class="form-control col-md-7 col-xs-12 dinheiro">
                        </div>
                      </div>
                        
                       
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Dados do Contrato</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="">
                            <label>
                              <input type="checkbox" id="isContratoEmitido" class="js-switch" /> Contrato Emitido?
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" id="isContratoAssinado" class="js-switch" /> Contrato Assinado?
                            </label>
                          </div>
                         
                        </div>
                      </div>


                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Resetar</button>
                          <?php if (!empty($_GET['id'])) {
                            echo "<button type='button' class='btn btn-success' onclick='propostaController.enviarProposta()'>Alterar</button>";
                          }else{
                            echo "<button type='button' class='btn btn-success' onclick='propostaController.enviarProposta()'>Enviar</button>";    
                           }
                        ?>
                         
                        </div>
                      </div>

                    </form>
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
<!-- Switchery -->
    <script src="/intra/util/vendors/switchery/dist/switchery.min.js"></script>
<!-- Jquery mask -->    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>

<!--Classe PropostaView-->
    <script src="/intra/view/js/PropostaView.js"/></script>    
<!--Classe Model Proposta-->
    <script src="/intra/model/js/Proposta.js"/></script>
<!--Controlador-->
    <script src="/intra/controller/js/PropostaController.js"></script>

<!--Início do Proposta-->    
    <script> let propostaController = new PropostaController();</script>
    
   <?php //caso o formulário seja de alteração
        if (empty($_GET['id'])) {
        echo "<script>$('.formularioEntrada').show()</script>";    
    }else{
        echo "<script>propostaController.carregarProposta()</script>";
    }
    
    ?>
                        
</body>
</html>    
