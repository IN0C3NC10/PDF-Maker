<!DOCTYPE html>
<html lang="pt-br">
<?php
$config = parse_ini_file("config.ini");
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/assets/images/pdf_logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Construa o seu próprio currículo de maneira fácil, apenas preenchendo o formulário com suas informações!">
    <meta name="keywords" content="pdf, pdf maker, pdf-maker">
    <meta name="author" content="<?= $config['SITE_AUTHOR'] ?>">

    <!-- Title -->
    <title><?= $config['SITE_NAME'] ?></title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/icomoon/style.css" rel="stylesheet">
    <link href="assets/plugins/uniform/css/default.css" rel="stylesheet" />
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- Theme Styles -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/ecaps.min.css" rel="stylesheet">
</head>

<body>
    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header"><image src="/assets/images/pdf_logo.png" width="40" /> <?= $config['SITE_AUTHOR'] ?></h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            <div id="rootwizard">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Informações Pessoais</a></li>
                                    <li role="presentation"><a href="#tab2" data-toggle="tab"><i class="fa fa-briefcase m-r-xs"></i>Perfil Profissional</a></li>
                                    <li role="presentation"><a href="#tab3" data-toggle="tab"><i class="fa fa-building m-r-xs"></i>Experiências Profissionais</a></li>
                                    <li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-check m-r-xs"></i>Finalização</a></li>
                                </ul>
                                <div class="progress progress-sm m-t-sm">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    </div>
                                </div>
                                <form id="wizardForm" method="POST" action="controller/CurriculumController.php">
                                    <div class="tab-content">
                                        <div class="tab-pane active fade in" id="tab1">
                                            <div class="row m-b-lg">
                                                <div class="col-md-4">
                                                    <h3>Informações Pessoais</h3>
                                                    <p>Preencha com suas informações para que o seu currículo seja corretamente configurado e esteja com meios de contato atualizados.</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="firstName">Primeiro Nome</label>
                                                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Ex. João">
                                                        </div>
                                                        <div class="form-group  col-md-6">
                                                            <label for="lastName">Sobrenome</label>
                                                            <input type="text" class="form-control col-md-6" name="lastName" id="lastName" placeholder="Ex. Capixaba">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="email">Endereço de Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Ex. capixaba@email.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h3>Perfil Profissional</h3>
                                                    <p>Descreva brevemente sobre algumas informações interessantes para seu empregador saber, obviamente relacionadas e pertinentes a vaga em questão.</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group col-md-12">
                                                        <label for="personalProfile">Descreva o seu perfil profissional</label>
                                                        <textarea class="form-control" name="personalProfile" id="personalProfile" placeholder="Procure ser objetivo e evitar erros de português" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h3>Experiências Profissionais</h3>
                                                    <p>Preencha apenas com as profissões relacionadas com a que busca, evite colocar trabalhos que fogem do tema apenas para "encher" seu currículo.</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group col-md-12">
                                                        <label for="companyName">Nome da empresa</label>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Ex. Zé do Churrasco de Gato">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="companyStartDate">Data de entrada</label>
                                                        <input type="date" class="form-control" name="companyStartDate" id="companyStartDate">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="companyEndDate">Data de saída</label>
                                                        <input type="date" class="form-control date-picker" name="companyEndDate" id="companyEndDate">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="f-s-12">Ao pressionar "Enviar" você automaticamente concorda om nossos <a href="#">Termos & Condições</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4">
                                            <h3 style="margin-top:25px;">Muito bem!</h3>
                                            <div class="alert alert-success m-t-sm m-b-lg" role="alert">
                                                Parabéns! Você concluiu a última etapa, agora é só baixar seu currículo no botão abaixo.
                                            </div>
                                            <div class="form-group text-center col-md-12">
                                                <input type="submit" class="btn btn-success" value="Baixar Currículo" />
                                            </div>
                                        </div>
                                        <ul class="pager wizard">
                                            <li class="previous"><a href="#" class="btn btn-default">Etapa Anterior</a></li>
                                            <li class="next"><a href="#" class="btn btn-default">Próxima Etapa</a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p>Feito com <i class="fa fa-heart"></i> por <?= $config['SITE_AUTHOR'] ?></p>
        </div>
    </div><!-- /Page Inner -->
    </div><!-- /Page Content -->
    </div><!-- /Page Container -->


    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
    <script src="assets/plugins/switchery/switchery.min.js"></script>
    <script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/js/ecaps.min.js"></script>
    <script src="assets/js/form-control.js"></script>
</body>

</html>