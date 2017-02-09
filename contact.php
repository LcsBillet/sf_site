<?php
if (isset($_POST["submit"])) {
    echo "coucou";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Contac Studio Floax';
    $to = 'loic@studiofloax.fr';
    $subject = $_POST['sujet'];

    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    if (!$_POST['name']) {
        $errName = 'Entrer un nom.';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Entrer un email valide.';
    }

    if (!$_POST['message']) {
        $errMessage = 'Entrer un message.';
    }

    if ($human !== 5) {
        $errHuman = 'L\'anti-spam est incorrect.';
    }
    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="col-md-12">Merci, votre message a bien été envoyé </div>';
        } else {
            $result='<div class="col-md-12">Une erreur est survenue, veuillez essayer à nouveau </div>';
        }
    }
}
?>
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
        <?php include_once("./php/analyticstracking.php") ?>
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
                            <?php echo $result; ?>
                            <form action="#" method="post">
                                <div class="col-md-6">
                                    <div class="input_1" style="margin-bottom:30px">
                                        <input type="text" name="name">
                                        <span>Nom</span>
                                        <?php echo $errName; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input_1" style="margin-bottom:30px">
                                        <input type="text" name="email">
                                        <span>Email</span>
                                        <?php echo $errEmail; ?>
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
                                    <div class="input_1" style="margin-bottom:30px">
                                        <input type="text" id="human" name="human">
                                        <span>Anti-spam: 2 + 3 = ?</span>
                                        <?php echo $errHuman; ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input href="#" type="submit" id="submit"  name="submit" class="btn green" value="envoyer"/>
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
