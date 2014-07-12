<!DOCTYPE html>
<html lang="en">

<head>
     <?php $in="english.txt";$lineas = file($_GET["language"]); ?>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <title><?php echo $lineas[0] ?> </title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Retina.js - Load first for faster HQ mobile images. -->
    <script src="assets/js/plugins/retina/retina.min.js"></script>

    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>

    <!-- Modern Style Fonts (Include these is you are using body.modern!) -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Vintage Style Fonts (Include these if you are using body.vintage!) -->
    <link href='http://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="assets/css/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/jquery.fs.wallpaper.css" rel="stylesheet" type="text/css">

    <!-- Vitality Theme CSS -->
    <!-- Uncomment the color scheme you want to use. -->
    <!-- <link href="assets/css/vitality-red.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-aqua.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-blue.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-green.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-orange.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-pink.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-purple.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-tan.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-turquoise.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-yellow.css" rel="stylesheet" type="text/css"> -->

    <!-- Style Switcher CSS - Demo Purposes Only! -->
    <link id="changeable-colors" rel="stylesheet" href="assets/css/vitality-orange.css">
    <link href="assets/demo/style-switcher.css" rel="stylesheet">

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<!-- Alternate Body Classes: .modern and .vintage -->

<body id="page-top" class="vintage">

    <!-- Navigation -->
    <!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <h4><?php echo $lineas[1] ?></h4>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#about"><?php echo $lineas[2] ?></a>
                    </li>
                    <li>
                        <a href="#shops"><?php echo $lineas[3] ?></a>
                    </li>
                    <li>
                        <a href="#sponsors"><?php echo $lineas[4] ?></a>
                    </li>
                    <li>
                        <a href="#testimonials"><?php echo $lineas[5] ?></a>
                    </li>
                    <li>
                        <a href="#contact"><?php echo $lineas[6] ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Instructions: Set your background image using the URL below. -->
    <header style="background-image: url('assets/img/fashion/bg-header.jpg')">
        <div class="intro-content">
            <img src="assets/img/profile.png" class="img-responsive img-centered" alt="">
        </div>
        <div class="scroll-down">
            <a class="btn" href="#about"><i class="fa fa-angle-down fa-fw"></i></a>
        </div>
    </header>

    <section id="about">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1><?php echo $lineas[7] ?></h1>
                    <p><?php echo $lineas[8] ?></p>
                    <p><iframe width="560" height="315" src="<?php echo $lineas[9] ?>" frameborder="0" allowfullscreen></iframe></p>
                    <hr class="colored">
                </div>
            </div>
            <div class="row text-center content-row">
                <div class="col-md-3 col-sm-6">
                    <div class="about-content">
                        <i class="fa fa-lightbulb-o fa-4x"></i>
                        <h3><?php echo $lineas[10] ?></h3>
                        <p><?php echo $lineas[11] ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-content">
                        <i class="fa fa-users fa-4x"></i>
                        <h3><?php echo $lineas[12] ?></h3>
                        <p><?php echo $lineas[13] ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-content">
                        <i class="fa fa-usd fa-4x"></i>
                        <h3><?php echo $lineas[14] ?></h3>
                        <p><?php echo $lineas[15] ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-content">
                        <i class="fa fa-lock fa-4x"></i>
                        <h3><?php echo $lineas[16] ?></h3>
                        <p><?php echo $lineas[17] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="shops" class="bg-gray">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php echo $lineas[18] ?></h2>
                    <p><?php echo $lineas[19] ?></p>
                    <hr class="colored">
                    <h4><?php echo $lineas[20] ?></h4>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-lg-12">
                    <div class="about-carousel">
                        <!--
                        <div class="item">
                            <img src="http://www.tiffany.com.mx/shared/media/marketingtiles/20140417_HP_Homepage_Tile5_Spring_2x2Promo_MX_v2/Spring_2014_HP_Its_From_Tiffany_2x2.jpg" width="400" height="400" class="img-responsive" alt="">
                            <div class="caption">
                                <h3>Tiffany & Co</h3>
                                <hr class="colored">
                                <p>Joyer&iacute;a de lujo desde 1837.</p>
                                <ul class="list-inline social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="cta-quote" style="background-image: url('assets/img/fashion/bg-aside.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <span class="quote"><?php echo $lineas[20] ?><span class="text-primary"><?php echo $lineas[21] ?></span>, <?php echo $lineas[22] ?>.</span>
                    
                </div>
            </div>
        </div>
    </aside>

    <section id="sponsors" class="pricing" style="background-image: url('assets/img/bg-pricing.jpg')">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2><?php echo $lineas[23] ?></h2>
                    <hr class="colored">
                    <p><?php echo $lineas[24] ?>.</p>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-md-4">
                    <div class="pricing-item featured-first">
                        <h3>Silver</h3>
                        <hr class="colored">
                        <h4><a href="http://www.coinffeine.com"><a href="http://www.coinffeine.com"><img src="assets/img/coinffeine.png" height="30" alt="coinffeine.com"/></a></h4>
                        <br/>
                        <h4><a href="http://www.pagobit.com"><img src="assets/img/pagobit.png" height="30" alt="pagobit.com"/></a></h4>
                        <hr class="colored">
                        <a href="#contact" class="btn btn-outline-dark"><?php echo $lineas[25] ?></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-item featured">
                        <h3>Gold</h3>
                        <hr class="colored">
                        <h4><a href="http://www.bitpay.com"><img src="assets/img/bitpay.png" height="60" alt="bitpay.com"/></a></h4>
                        <h4><a href="http://www.coinbase.com"><img src="assets/img/coinbase.png" height="60" alt="coinbase.com"/></a></h4>
                        <h4><a href="http://www.blockchain.info"><img src="assets/img/blockchain.png" height="60" alt="blockchain.info"/></a></h4>
                        <hr class="colored"> 
                        <ul class="list-group">
                        </ul>
                        <a href="#contact" class="btn btn-outline-dark"><?php echo $lineas[25] ?></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-item featured-last">
                        <h3>Bronze</h3>
                        <hr class="colored">
                        <a href="#contact" class="btn btn-outline-dark"><?php echo $lineas[25] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="row">
                <h2><?php echo $lineas[26] ?></h2>
                <hr class="colored">
                <p><?php echo $lineas[27] ?></p>
            </div>
            <div class="row content-row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="testimonials-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="lead">"<?php echo $lineas[28] ?>"</p>
                                    <p class="quote"><?php echo $lineas[29] ?>.</p>
                                    <div class="testimonial-info">
                                        <div class="testimonial-img">
                                            <img src="https://pbs.twimg.com/profile_images/446746806341230593/He2FF83t.png" class="img-circle img-responsive" alt="">
                                        </div>
                                        <div class="testimonial-author">
                                            <span class="name">Alberto G&oacute;mez Toribio</span>
                                            <p class="small">CEO of <a href="http://www.coinffeine.com">Coinffeine.com</a></p>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
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
    </section>

    <section id="contact" class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $lineas[30] ?></h2>
                    <hr class="colored">
                    <p><?php echo $lineas[31] ?>. </p>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><?php echo $lineas[32] ?>!</label>
                                <input type="text" class="form-control" placeholder=<?php echo $lineas[33] ?>" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><?php echo $lineas[33] ?>.</label>
                                <input type="email" class="form-control" placeholder=<?php echo $lineas[34] ?> id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><?php echo $lineas[32] ?></label>
                                <input type="tel" class="form-control" placeholder=<?php echo $lineas[35] ?> id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label><?php echo $lineas[3] ?></label>
                                <textarea rows="5" class="form-control" placeholder=<?php echo $lineas[36] ?> id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-outline-dark"><?php echo $lineas[37] ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer" style="background-image: url('assets/img/fashion/bg-footer.jpg')">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-phone"></i> <?php echo $lineas[38] ?></h4>
                    <p>+34 622 291 388</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-map-marker"></i><?php echo $lineas[39] ?></h4>
                    <p>Calle Serrano<br>Madrid, 28006 Madrid, España</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-envelope"></i> Email</h4>
                    <p><a href="mailto:feedback@startbootstrap.com">info@callebitcoin.es</a>
                    </p>
                </div>
            </div>
            <div class="row social">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <!-- <li><a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
                        </li> -->
                        <li><a href="http://twitter.com/CalleBitcoin"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                        </li>
                        <!--< li><a href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-lg-12">
                    <p class="small">&copy; 2014 Calle Bitcoin</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Core Scripts -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="assets/js/plugins/jquery.easing.min.js"></script>
    <script src="assets/js/plugins/classie.js"></script>
    <script src="assets/js/plugins/cbpAnimatedHeader.js"></script>
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.fs.wallpaper.js"></script>
    <script src="assets/js/contact_me.js"></script>
    <script src="assets/js/plugins/jqBootstrapValidation.js"></script>

    <!-- Vitality Theme Scripts -->
    <script src="assets/js/vitality.js"></script>

    <!-- Style Switcher Scripts - Demo Purposes Only! -->
    <script src="assets/demo/style.switcher.js"></script>

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-52626268-1', 'auto');
        ga('send', 'pageview');
    </script>

</body>

</html>
