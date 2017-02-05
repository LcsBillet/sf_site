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
                <div class="big-title montserrat-text uppercase">Contact</div>
                <div class="small-title montserrat-text uppercase">home / contact</div>
            </div>
        </div>
        <!-- /HEADER SECTION  -->

        <!-- FORMULAIRE -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <form action="#" method="post">
                                <div class="col-md-6">
                                    <div class="input_1" style="margin-bottom:30px">
                                        <input type="text" name="name">
                                        <span>Nom</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input_1" style="margin-bottom:30px">
                                        <input type="text" name="email">
                                        <span>Email</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input_1" style="margin-bottom:30px">
                                        <input type="text" name="object">
                                        <span>Objet</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="textarea_1" style="margin-bottom:30px">
                                        <textarea name="message"></textarea>
                                        <span>Message</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="#" class="btn green"><span>Envoyer</span></a>
                                </div>
                            </form>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <h4 class="montserrat-text uppercase">Information</h4>

                        <p>
                            100, avenue Willy Brandt <br/>
                            44400 Nantes <br/>
                            07 69 12 72 72 <br/>
                            <div><a href="mailto:loic@studiofloax.fr" class="link">contact@studiofloax.fr</a></div>
                        </p>

                        <ul class="social-icons" style="margin-top:30px;">
                            <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <!-- /FORMULAIRE -->

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
