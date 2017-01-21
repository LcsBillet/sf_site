<!DOCTYPE html>
<html>
    <head>
        <title>Studio Floax</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <meta name="author" content="Studio Floax">
        <meta name="description" content="Studio Floax est une agence de créativité digital">

        <!-- STYLES -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/flexslider.css">
        <link rel="stylesheet" href="assets/css/animsition.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="scss/styles.min.css">
    </head>
    <body class="animsition">
        <?php include 'php/header.php'; ?>

        <!-- HEADER SECTION  -->
        <div class="site-hero">
            <ul class="slides">
                <li>
                    <div>
                        <span class="small-title uppercase montserrat-text">UX / UI / Intégration</span>
                    </div>
                    <div class="big-title uppercase montserrat-text">
                        Agence Digitale
                        <p>
                            People will forget what you said, people will forget what you did, but people will never forget how you made them feel <br>- Maya Angelou -
                        </p>
                    </div>
                    <div>
                        <a href="#" class="btn blue"><span>Découvrir notre méthode</span></a>
                    </div>

                </li>
            </ul>
        </div>
        <!-- HEADER SECTION  -->

        <!-- A PROPOS SECTION -->
        <div class="container">
            <div class="agency">
                <div class="col-md-5 col-sm-12">
                    <div class="row">
                        <img src="assets/img/image1.jpg" alt="image">
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="section-title">
                            <span>A propos</span>
                        </div>
                        <p>
                            Pour nous, l'utilisateur doit être au centre de toutes les reflexions. Nous pensons qu'il est important de remettre l'humain au premier plan au travers d'experiences utilisateurs adaptées, fiables et agréables, de design émotionel et de fonctionnalités pertinentes. Nos compétences techniques et créatives, nous permettent de suivre un projet de sa création à sa publication grâce aux méthodes de Design Thinking.
                        </p>
                        <a href="#" class="btn blue" style="float:right;margin-top:30px"><span>en savoir plus</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- A PROPOS SECTION -->

        <!-- SERVICES -->
        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <span>Nos services</span>
                        <p>Concevoir son interface pour l'utilisateur, du design jusqu'au développement</p>
                    </div>
                </div>

                <div class="col-md-7 col-sm-12 services-left wow fadeInUp">
                    <div class="row" style="margin-bottom:50px">
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <i class="icon ion-lightbulb"></i>
                                <span class="montserrat-text uppercase service-title">Atelier Design Thinking</span>
                                <ul>
                                    <li>Atelier Créativité</li>
                                    <li>Atelier d'Idéation</li>
                                    <li>Prototypage</li>
                                    <li>Tests Utilisateurs</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <i class="icon ion-wand"></i>
                                <span class="montserrat-text uppercase service-title">Design</span>
                                <ul>
                                    <li>Design d'Interface</li>
                                    <li>Design d'application mobile</li>
                                    <li>Branding &amp; Identité visuelle</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <i class="icon ion-ios-infinite-outline"></i>
                                <span class="montserrat-text uppercase service-title">UX Design</span>
                                <ul>
                                    <li>Personas &amp; Carte d'empathie</li>
                                    <li>Wireframe</li>
                                    <li>Prototypage</li>
                                    <li>Tests Utilisateurs</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <i class="icon ion-code"></i>
                                <span class="montserrat-text uppercase service-title">Développement</span>
                                <ul>
                                    <li>Développement Web</li>
                                    <li>CMS (Wordpress, Joomla, ...)</li>
                                    <li>Développement d'applicatio mobile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-12 services-right wow fadeInUp" data-wow-delay=".1s">
                    <div class="row">
                        <img src="assets/img/serv.jpg" alt="image">
                    </div>
                </div>

            </div>
        </section>
        <!-- SERVICES -->

        <!-- PORTFOLIO -->
        <?php include 'php/portfolio.php'; ?>
        <!-- PORTFOLIO -->

        <!-- CONTACT -->
        <?php include 'php/contactsection.php'; ?>
        <!-- CONTACT -->

        <!-- FOOTER -->
        <?php include 'php/footer.php'; ?>
        <!-- FOOTER -->

        <!-- SCRIPTS -->
        <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="assets/js/smoothScroll.js"></script>
        <script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>

        <script type="text/javascript" charset="utf-8">
            $(window).load(function() {
                new WOW().init();

                $('.site-hero').flexslider({
                    animation: "fade",
                    directionNav: false,
                    controlNav: false,
                    keyboardNav: true,
                    slideToStart: 0,
                    animationLoop: true,
                    pauseOnHover: false,
                    slideshowSpeed: 4000,
                });

                var $container = $('.portfolio_container');
                $container.isotope({
                    filter: '*',
                });

                $('.portfolio_filter a').click(function(){
                    $('.portfolio_filter .active').removeClass('active');
                    $(this).addClass('active');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 500,
                            animationEngine : "jquery"
                        }
                    });
                    return false;
                });
            });
        </script>
    </body>
</html>
