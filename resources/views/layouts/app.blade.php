<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Char.co - Diseño Arquitectónico y Construcción</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/colorbox/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style type="text/css">
        .float{
          position:fixed;
          width:60px;
          height:60px;
          bottom:80px;
          right:28px;
          background-color:#25d366;
          color:#FFF;
          border-radius:50px;
          text-align:center;
          font-size:30px;
          box-shadow: 2px 2px 3px #222;
          z-index:100;
        }
        .float:hover {
          text-decoration: none;
          color: #25d366;
          background-color:#fff;
        }

        .my-float{
          margin-top:16px;
        }
    </style>
</head>
<body>
    <a href="https://wa.me/5218442892397?text=prueba%20uno" class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">740 Col. Carretera los Pinos CP. 25900, Saltillo Coah. MX</p>
                    </li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                        <a title="Facebook" href="https://facebbok.com">
                            <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a title="Twitter" href="https://twitter.com">
                            <span class="social-icon"><i class="fab fa-twitter"></i></span>
                        </a>
                        <a title="Instagram" href="https://instagram.com">
                            <span class="social-icon"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                </ul>
              </div>
          </div>
        </div>
    </div>

    <header id="header" class="header-one">
        <div class="bg-white">
            <div class="container">
                <div class="logo-area">
                    <div class="row align-items-center">
                        <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                            <a class="d-block" href="index.html">
                                <img loading="lazy" src="images/logo1.png" alt="Char.co">
                            </a>
                        </div>
                        <div class="col-lg-9 header-right">
                            <ul class="top-info-box">
                                <li>
                                    <div class="info-box">
                                        <div class="info-box-content">
                                            <p class="info-box-title">Teléfono</p>
                                            <p class="info-box-subtitle"><a href="tel:(+9) 847-291-4353">(+52) 844-000-0000</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-box">
                                        <div class="info-box-content">
                                            <p class="info-box-title">Correo Electrónico</p>
                                            <p class="info-box-subtitle"><a href="mailto:contacto@char-co.com.mx">contacto@char-co.com.mx</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="info-box last">
                                      <div class="info-box-content">
                                          <p class="info-box-title">Certificación</p>
                                          <p class="info-box-subtitle">ISO 9001:2017</p>
                                      </div>
                                    </div>
                                </li>
                                <li class="header-get-a-quote">
                                    <a class="btn btn-primary" href="{{ route('contact') }}">Solicitar Información</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-dark p-0">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="navbar-collapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav mr-auto">
                                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ route('index') }}">Inicio</a></li>
                                    <li class="nav-item {{ Request::is('nosotros') ? 'active' : '' }}"><a class="nav-link" href="{{ route('about') }}">Nosotros</a></li>
                                    <li class="nav-item {{ Request::is('servicios') ? 'active' : '' }}"><a class="nav-link" href="{{ route('services') }}">Servicios</a></li>
                                    <li class="nav-item {{ Request::is('portafolio') ? 'active' : '' }}"><a class="nav-link" href="{{ route('portfolio') }}">Portafolio</a></li>
                                    <li class="nav-item {{ Request::is('contacto') ? 'active' : '' }}"><a class="nav-link" href="{{ route('contact') }}">Contacto</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer id="footer" class="footer bg-overlay">
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6 footer-widget footer-about">
                        <h3 class="widget-title">Nosotros</h3>
                        <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo1.png" alt="Char.co">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua.</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://facebook.com" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                        <h3 class="widget-title">Horario</h3>
                        <div class="working-hours">
                            Trabajamos los 7 días de la semana, la mayor parte del día, incluyendo los días festivos. Contáctanos si tienes algún proyecto y nosotros resolveremos tus necesidades con la calidad que mereces.
                            <br><br> Lunes - Viernes: <span class="text-right">09:00 - 18:00</span>
                            <br> Sábado: <span class="text-right">09:00 - 14:00</span>
                            <br> Domingo y días festivos: <span class="text-right">09:00 - 12:00</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                        <h3 class="widget-title">Servicios</h3>
                        <ul class="list-arrow">
                            <li><a href="#">Construcción</a></li>
                            <li><a href="#">Contratación General</a></li>
                            <li><a href="#">Gestión de Construcción</a></li>
                            <li><a href="#">Diseño y Renovación</a></li>
                            <li><a href="#">Seguridad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-info text-center text-md-left">
                            <span class="text-white">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Char.co</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu text-center text-md-right">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('about') }}" class="text-white">Nosotros</a></li>
                                <li><a href="{{ route('faq') }}" class="text-white">FAQ</a></li>
                                <li><a href="{{ route('contact') }}" class="text-white">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                    <button class="btn btn-primary" title="Back to Top">
                        <i class="fa fa-angle-double-up"></i>
                    </button>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('plugins/colorbox/jquery.colorbox.js') }}"></script>
    <script src="{{ asset('plugins/shuffle/shuffle.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>