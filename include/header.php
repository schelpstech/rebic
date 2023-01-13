<?php
include "./app/query.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>REBIC : Reconciliation Bible Church</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The official website of Reconciliation Bible Church">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/img/app/rebiclogo.png">
    <link href="./asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./asset/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./asset/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./asset/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./asset/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./asset/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./asset/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./asset/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./asset/css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./asset/css/font-robotoslab.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class=" ">
    <a id="start"></a>
    <div class="nav-container ">
        <div class="bar bar--sm visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-md-2">
                        <a href="index.php">
                            <img class="logo logo-dark" alt="logo" src="./asset/img/app/logo.png" />
                            <img class="logo logo-light" alt="logo" src="./asset/img/app/logo.png" />
                        </a>
                    </div>
                    <div class="col-9 col-md-10 text-right">
                        <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm">
                            <i class="icon icon--sm stack-interface stack-menu"></i>
                        </a>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </div>
        <!--end bar-->
        <nav id="menu2" class="bar bar-2 hidden-xs bar--absolute bar--transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-left-sm hidden-xs order-lg-2">
                        <div class="bar__module">
                            <a href="index.php">
                                <img class="logo logo-dark" alt="logo" src="./asset/img/app/logo.png" />
                                <img class="logo logo-light" alt="logo" src="./asset/img/app/logo.png" />
                            </a>
                        </div>
                        <!--end module-->
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="bar__module">
                            <ul class="menu-horizontal text-left">

                            </ul>
                        </div>
                        <!--end module-->
                    </div>
                    <div class="col-lg-5 text-right text-left-xs text-left-sm order-lg-3">

                        <div class="modal-instance">
                            <a class="btn type--uppercase modal-trigger" href="#">
                                <span class="btn__text" style="color: black;">
                                    ▶ Watch Live Service
                                </span>
                            </a>
                            <div class="modal-container">
                                <div class="modal-content bg-dark" data-width="80%" data-height="80%">
                                    <?php echo $featured_sermon['link'] ?>
                                </div><!--end of modal-content-->
                            </div><!--end of modal-container-->
                            <a class="btn btn--sm btn--primary type--uppercase" href="https://portal.rebic.org.ng">
                                <span class="btn__text">
                                    Church Portal
                                </span>
                            </a>
                        </div>
                        <!--end module-->
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </nav>
        <!--end bar-->
    </div>