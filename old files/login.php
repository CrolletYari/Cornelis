<?php
session_start();

if ($_POST["username"] == "cornelisnv" && $_POST["password"] == "t") {
    echo("
<!DOCTYPE html>
<html lang='nl'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <title>Grayscale - Start Bootstrap Theme</title>
    <link rel='icon' type='image/png' href='img/C%2032x32%20Zwart.png'>
    <link href='vendor/bootstrap/css/bootstrap.css' rel='stylesheet'>
    <link href='vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='css/grayscale.css' rel='stylesheet'>
    <link rel='stylesheet' href='css/style.css'>
</head>
<body id='page-top' data-spy='scroll' data-target='.navbar-fixed-top'>
    <!-- Navigation -->
    <nav class='navbar navbar-custom navbar-fixed-top' role='navigation'>
        <div class='container'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-main-collapse'> Menu <i class='fa fa-bars'></i> </button>
                <a class='navbar-brand page-scroll' href='#page-top'> <img src='img/Logo%20Cornelis%20NV%20Zwarte%20Tekst%20Transparant.png' /> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse navbar-right navbar-main-collapse'>
                <ul class='nav navbar-nav'>
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class='hidden'>
                        <a href='#page-top'></a>
                    </li>
                    <li> <a class='page-scroll' href='#info'>Info</a> </li>
                    <li> <a class='page-scroll' href='#realisaties'>Realisaties</a> </li>
                    <li> <a class='page-scroll' href='#contact'>Contact</a> </li>
                    <li> <a class='' href='#' data-toggle='modal' data-target='#login'><span><i class='glyphicon glyphicon-cog'></i></span></a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class='modal fade' id='login' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <h4 class='modal-title' id='myModalLabel'>Logout</h4> </div>
                <div class='modal-body'>
                    <form action='index.html' method='POST'>
                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                            <button type='submit' class='btn btn-primary'>Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <container>
        <!-- Generated by cssSlider.com 2.1 -->
        <link rel='stylesheet' href='slider/sliderStyle.css'>
        <!--[if IE]><link rel='stylesheet' href='cssslider_files/csss_engine1/ie.css'><![endif]-->
        <!--[if lte IE 9]><script type='text/javascript' src='cssslider_files/csss_engine1/ie.js'></script><![endif]-->
        <script type='text/javascript' src='cssslider_files/csss_engine1/gestures.js'></script>
        <div class='csslider1 autoplay'>
            <input name='cs_anchor1' id='cs_slide1_0' type='radio' class='cs_anchor slide'>
            <input name='cs_anchor1' id='cs_slide1_1' type='radio' class='cs_anchor slide'>
            <input name='cs_anchor1' id='cs_slide1_2' type='radio' class='cs_anchor slide'>
            <input name='cs_anchor1' id='cs_play1' type='radio' class='cs_anchor' checked>
            <input name='cs_anchor1' id='cs_pause1_0' type='radio' class='cs_anchor pause'>
            <input name='cs_anchor1' id='cs_pause1_1' type='radio' class='cs_anchor pause'>
            <input name='cs_anchor1' id='cs_pause1_2' type='radio' class='cs_anchor pause'>
            <ul>
                <li class='num0 img slide'> <img src='img/2012_08_24_Demullier_Edegem_9999_53-159_72dpi.jpg' /></li>
                <li class='num1 img slide'> <img src='img/2012_02_06_Schoenmaekers_gent__1936-72.jpg' /></li>
                <li class='num2 img slide'> <img src='img/150423_Lier_Verschuur_poolhouse_2322-HDR_300dpi.jpg' /></li>
            </ul>
        </div>
    </container>
    <section id='info' class='container content-section text-center'>
        <div class='row'>
            <div class='col-md-7 '>
                <div class='media text-left'>
                    <h2>Info</h2>
                    <p>Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href='http://startbootstrap.com/template-overviews/grayscale/'>the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                    <p>This theme features stock photos by <a href='http://gratisography.com/'>Gratisography</a> along with a custom Google Maps skin courtesy of <a href='http://snazzymaps.com/'>Snazzy Maps</a>.</p>
                    <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
                </div>
            </div>
            <div class='col-md-4 col-md-offset-1'>
                <div class='media text-left'>
                    <h2>Vooruitzichten</h2> </div>
                <div class='media text-left'>
                    <div class='media-body'>
                        <h4 class='media-heading'>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                        <p>Wij zijn gesloten vanaf maandag 3 juli tot 24 juli 2017 omwille van het bouwverlof.</p>
                    </div>
                </div>
                <div class='media text-left'>
                    <div class='media-body'>
                        <h4 class='media-heading'>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                        <p>Wij zijn gesloten vanaf maandag 3 juli tot 24 juli 2017 omwille van het bouwverlof.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id='realisaties' class='container content-section text-center'>
        <div class='row'>
            <div class='col-lg-12'>
                <h2>About Grayscale</h2>
                <div id='imgContainer'>
                    <figure class='imgWrap'>
                        <a href='keukens.html'> <img src='http://placehold.it/300x200' alt='keuken' title='keuken'></a>
                        <figcaption class='imgDescription rotate'>Keuken</figcaption>
                    </figure>
                    <figure class='imgWrap'> <img src='http://placehold.it/300x200' alt='badkamer' title='badkamer'>
                        <figcaption class='imgDescription rotate'>Badkamer</figcaption>
                    </figure>
                    <figure class='imgWrap'> <img src='http://placehold.it/300x200' alt='dressing' title='dressing'>
                        <figcaption class='imgDescription rotate'>Dressing</figcaption>
                    </figure>
                    <figure class='imgWrap'> <img src='http://placehold.it/300x200' alt='algemeen' title='binnenschrijnwerken'>
                        <figcaption class='imgDescription rotate'>Binnenschrijnwerken</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id='contact' class='container content-section text-center'>
        <div class='row'>
            <div class='col-lg-8 col-lg-offset-2'>
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href='mailto:cornelisenzoonnv@scarlet.be'>cornelisenzoonnv@scarlet.be</a> </p>
                <ul class='list-inline banner-social-buttons'>
                    <li> <a href='https://twitter.com/SBootstrap' class='btn btn-default btn-lg'><i class='fa fa-twitter fa-fw'></i> <span class='network-name'>Twitter</span></a> </li>
                    <li> <a href='https://github.com/IronSummitMedia/startbootstrap' class='btn btn-default btn-lg'><i class='fa fa-github fa-fw'></i> <span class='network-name'>Github</span></a> </li>
                    <li> <a href='https://plus.google.com/+Startbootstrap/posts' class='btn btn-default btn-lg'><i class='fa fa-google-plus fa-fw'></i> <span class='network-name'>Google+</span></a> </li>
                </ul>
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d580.8518367801979!2d4.654327628608903!3d51.062551994089176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c158724a69f647%3A0x8faa0dd8e3f9b649!2sNv+Cornelis+En+Zoon!5e0!3m2!1snl!2sbe!4v1478260733886' frameborder='0' allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <footer>
        <div class='container text-center'>
            <p>Copyright &copy; Your Website 2016</p>
        </div>
    </footer>
    <script src='vendor/jquery/jquery.js'></script>
    <script src='vendor/bootstrap/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='js/grayscale.min.js'></script>
</body>

</html>
");
} else {
    echo("
<!DOCTYPE html>
<html lang='nl'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <title>Grayscale - Start Bootstrap Theme</title>
    <link rel='icon' type='image/png' href='img/C%2032x32%20Zwart.png'>
    <link href='vendor/bootstrap/css/bootstrap.css' rel='stylesheet'>
    <link href='vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='css/grayscale.css' rel='stylesheet'>
    <link rel='stylesheet' href='css/style.css'>
</head>
<body id='page-top' data-spy='scroll' data-target='.navbar-fixed-top'>
    <!-- Navigation -->
    <nav class='navbar navbar-custom navbar-fixed-top' role='navigation'>
        <div class='container'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-main-collapse'> Menu <i class='fa fa-bars'></i> </button>
                <a class='navbar-brand page-scroll' href='#page-top'> <img src='img/Logo%20Cornelis%20NV%20Zwarte%20Tekst%20Transparant.png' /> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse navbar-right navbar-main-collapse'>
                <ul class='nav navbar-nav'>
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class='hidden'>
                        <a href='#page-top'></a>
                    </li>
                    <li> <a class='page-scroll' href='#info'>Info</a> </li>
                    <li> <a class='page-scroll' href='#realisaties'>Realisaties</a> </li>
                    <li> <a class='page-scroll' href='#contact'>Contact</a> </li>
                    <li> <a class='' href='#' data-toggle='modal' data-target='#login'><span><i class='glyphicon glyphicon-cog'></i></span></a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class='modal fade' id='login' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <h4 class='modal-title' id='myModalLabel'>Logout</h4> </div>
                <div class='modal-body'>
                    <form action='index.html' method='POST'>
                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                            <button type='submit' class='btn btn-primary'>Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section id='info' class='container content-section text-center'>
        <div class='row'>
            <div class='col-md-7 '>
                <div class='media text-left'>
                    <h2>Sorry...</h2>
                    <p>De Gebruikersnaam of het passwoord dat u heeft opgegeven klopt niet</p>
                    <form action='index.html' method='POST'>
                            <button type='submit' class='btn btn-primary'>Home</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class='container text-center'>
            <p>Copyright &copy; Your Website 2016</p>
        </div>
    </footer>
    <script src='vendor/jquery/jquery.js'></script>
    <script src='vendor/bootstrap/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='js/grayscale.min.js'></script>
</body>

</html>
");
}
?>