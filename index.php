<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Build your own PDF just putting your info!">
    <meta name="keywords" content="pdf, pdf maker, pef-maker">
    <meta name="author" content="IN0C3nC10">

    <!-- Title -->
    <title>PDF Maker</title>

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
            <h3 class="breadcrumb-header">PDF Maker</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            <div id="rootwizard">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Informações Pessoais</a></li>
                                    <li role="presentation"><a href="#tab2" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Product Info</a></li>
                                    <li role="presentation"><a href="#tab3" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Payment</a></li>
                                    <li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-check m-r-xs"></i>Finish</a></li>
                                </ul>
                                <div class="progress progress-sm m-t-sm">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    </div>
                                </div>
                                <form id="wizardForm" method="POST" action="controller/CurriculumController.php">
                                    <div class="tab-content">
                                        <div class="tab-pane active fade in" id="tab1">
                                            <div class="row m-b-lg">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="firstName">First Name</label>
                                                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                                                        </div>
                                                        <div class="form-group  col-md-6">
                                                            <label for="lastName">Last Name</label>
                                                            <input type="text" class="form-control col-md-6" name="lastName" id="lastName" placeholder="Last Name">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="email">Email address</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="password">Password</label>
                                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="confirmPassword">Confirm Password</label>
                                                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h3>Personal Info</h3>
                                                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="tab-pane fade" id="tab2">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="http://via.placeholder.com/250x40" width="250" alt="">
                                                    <div class="m-t-md">
                                                        <address>
                                                            <strong>Twitter, Inc.</strong><br>
                                                            795 Folsom Ave, Suite 600<br>
                                                            San Francisco, CA 94107<br>
                                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                                        </address>
                                                        <address>
                                                            <strong>Full Name</strong><br>
                                                            <a href="mailto:#">first.last@example.com</a>
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputProductName">Product Name</label>
                                                        <input type="text" class="form-control" name="exampleInputProductName" id="exampleInputProductName" placeholder="Product Name">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputProductId">Product ID</label>
                                                        <input type="text" class="form-control" name="exampleInputProductId" id="exampleInputProductId" placeholder="Product ID">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputQuantity">Quantity</label>
                                                        <input type="number" min="1" max="5" class="form-control" name="exampleInputQuantity" id="exampleInputQuantity" placeholder="Quantity">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputCard">Card Number</label>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" name="exampleInputCard" id="exampleInputCard" placeholder="Card Number">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control col-md-4" name="exampleInputSecurity" id="exampleInputSecurity" placeholder="Security Code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputHolder">Card Holders Name</label>
                                                        <input type="text" class="form-control" name="exampleInputHolder" id="exampleInputHolder" placeholder="Card Holders Name">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputExpiration">Expiration</label>
                                                        <input type="text" class="form-control date-picker" name="exampleInputExpiration" id="exampleInputExpiration" placeholder="Expiration">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputCsv">CSV</label>
                                                        <input type="text" class="form-control" name="exampleInputCsv" id="exampleInputCsv" placeholder="CSV">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="f-s-12">By pressing Next You will Agree to the Payment <a href="#">Terms & Conditions</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="tab-pane fade" id="tab4">
                                            <h3 style="margin-top:25px;">Thank You!</h3>
                                            <div class="alert alert-success m-t-sm m-b-lg" role="alert">
                                                Congratulations! You got the last step.
                                            </div>
                                        </div>
                                        <ul class="pager wizard">
                                            <li class="previous"><a href="#" class="btn btn-default">Previous</a></li>
                                            <li class="next"><a href="#" class="btn btn-default">Next</a></li>
                                            <input type="submit" value="Enviar"/>
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
            <p>Feito com <i class="fa fa-heart"></i> por IN0C3NC10</p>
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