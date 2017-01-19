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
        <div class="site-hero_2">
            <div class="page-title">
                <div class="big-title montserrat-text uppercase">Studio Floax</div>
                <div class="small-title montserrat-text uppercase">home / a propos</div>
            </div>
        </div>
        <!-- HEADER SECTION  -->

        <!-- WHAT WE DO -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <span>Nos méthodes</span>
                        <p>La simplicité, c'est l'harmonie parfaite entre le beau, l'utile et le juste</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 wow fadeInUp">
                        <p style="margin-bottom:30px">
                            La créativité est un élément primordial dans le développement d'un projet. Le Design Thinking permet de laisser s'exprimer la créativité de chacun, quel que soit son profil et ses compétences. Les méthodes de design peuvent être appliquées à tous les projets et permettent de créer des projets répondant le plus possible au attentes des utilisateurs. Par ces méthodes et nos connaissances en design et en développement, nous allions Design Thinking et méthodes Agile afin de faire travailler main dans la main designers et développeurs.
                        </p>
                        <div class="col-md-6">
                            <div class="row">
                                <ul class="list">
                                    <li>Ateliers de Design Thinking</li>
                                    <li>Ateliers de Créativité</li>
                                    <li>UX Design</li>
                                    <li>Wireframe</li>
                                    <li>Protoypage</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <ul class="list">
                                    <li>Création d'interface web et mobile</li>
                                    <li>Test utilisateurs</li>
                                    <li>Développement Front-end</li>
                                    <li>CMS</li>
                                    <li>Branding</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <img src="assets/img/image1.jpg" alt="img" style="width:100%">
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- WHAT WE DO -->

        <!-- SERVICES -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
                        <div class="benefits_1_single">
                            <i class="icon ion-ios-lightbulb-outline"></i>
                            <div class="title montserrat-text uppercase">Libérer la créativité</div>
                            <p>
                                La confiance créative est un atout essentiel pour la conduite d'un projet innovant et fiable.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="benefits_1_single">
                            <i class="icon ion-ios-pulse"></i>
                            <div class="title montserrat-text uppercase">Penser à l'utilisateur</div>
                            <p>
                                En ayant de l'empathie pour les utilisateurs
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
                        <div class="benefits_1_single">
                            <i class="icon ion-ios-infinite-outline"></i>
                            <div class="title montserrat-text uppercase">Agile</div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="benefits_1_single">
                            <i class="icon ion-ios-settings"></i>
                            <div class="title montserrat-text uppercase">awesome support</div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SERVICES -->

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

                // initialise flexslider
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


                // initialize isotope
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
