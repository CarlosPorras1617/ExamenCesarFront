<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Home" />
    <meta name="keywords" content="Home" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <!-- Bootstrap  -->

    <!-- Flexslider  -->

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    @livewireStyles
</head>

<body class="bg-secondary">
    <div>
        <aside id="fh5co-aside" role="complementary" class="js-fullheight bg-warning">

            <h1 id="fh5co-logo"><a href="/clientes">CRUD</a></h1>
            <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <li><a href="/login">Login</a></li>
                    <!-- <li class="fh5co-active"><a href="/login">Login</a></li> -->
                    <li><a href="/clientes">Clientes</a></li>
                    <li><a href="/facturas">Facturas</a></li>
                    <li><a href="/detalles">Detalles</a></li>
                </ul>
            </nav>

            <div class="fh5co-footer">
                <p><small>C.R.U.D. Del esquema #1 Clientes, Facturas y Detalles</small></p>
            </div>

        </aside>

        <div id="fh5co-main">
            <aside class="container">
                {{$slot}}
            </aside>
            <!--
            <div class="fh5co-narrow-content">
                <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Services</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-settings"></i>
                            </div>
                            <div class="fh5co-text">
                                <h3>Strategy</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-search4"></i>
                            </div>
                            <div class="fh5co-text">
                                <h3>Explore</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-paperplane"></i>
                            </div>
                            <div class="fh5co-text">
                                <h3>Direction</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-params"></i>
                            </div>
                            <div class="fh5co-text">
                                <h3>Expertise</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fh5co-narrow-content">
                <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Recent Blog</h2>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="#" class="blog-img"><img src="images/img-1.jpg" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            <div class="desc">
                                <h3><a href="#">Inspirational Website</a></h3>
                                <span><small>by Admin </small> / <small> Web Design </small> / <small> <i
                                            class="icon-comment"></i> 14</small></span>
                                <p>Design must be functional and functionality must be translated into visual aesthetics
                                </p>
                                <a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="#" class="blog-img"><img src="images/img-2.jpg" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            <div class="desc">
                                <h3><a href="#">Inspirational Website</a></h3>
                                <span><small>by Admin </small> / <small> Web Design </small> / <small> <i
                                            class="icon-comment"></i> 14</small></span>
                                <p>Design must be functional and functionality must be translated into visual aesthetics
                                </p>
                                <a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="#" class="blog-img"><img src="images/img-3.jpg" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            <div class="desc">
                                <h3><a href="#">Inspirational Website</a></h3>
                                <span><small>by Admin </small> / <small> Web Design </small> / <small> <i
                                            class="icon-comment"></i> 14</small></span>
                                <p>Design must be functional and functionality must be translated into visual aesthetics
                                </p>
                                <a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="#" class="blog-img"><img src="images/img-4.jpg" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            <div class="desc">
                                <h3><a href="#">Inspirational Website</a></h3>
                                <span><small>by Admin </small> / <small> Web Design </small> / <small> <i
                                            class="icon-comment"></i> 14</small></span>
                                <p>Design must be functional and functionality must be translated into visual aesthetics
                                </p>
                                <a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="get-in-touch">
                <div class="fh5co-narrow-content">
                    <div class="row">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <h1 class="fh5co-heading-colored">Get in touch</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                            data-animate-effect="fadeInLeft">
                            <p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large language ocean.</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->

    <!-- Waypoints -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- MAIN JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    @livewireScripts
</body>

</html>
