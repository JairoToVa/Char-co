@extends('layouts.app')

@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Proyecto 1</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="portfolio.html">Portafolio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Proyecto 1</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="page-slider" class="page-slider small-bg">
                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="images/projects/project5.jpg" alt="project-image" />
                        </div>
                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="images/projects/project4.jpg" alt="project-image" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <h3 class="column-title mrt-0">Construcción de Edificio Capital</h3>
                    <p>Morbi turpis nisl, auctor ut nisl vel, pellentesque euismod nunc nunc accumsan imperdiet.</p>
                    <ul class="project-info list-unstyled">
                        <li>
                            <p class="project-info-label">Cliente</p>
                            <p class="project-info-content">Pransbay Powers Authority</p>
                        </li>
                        <li>
                            <p class="project-info-label">Arquitecto</p>
                            <p class="project-info-content">Dlarke Pelli Incorp</p>
                        </li>
                        <li>
                            <p class="project-info-label">Ubicación</p>
                            <p class="project-info-content">McLean, VA</p>
                        </li>
                        <li>
                            <p class="project-info-label">Tamaño</p>
                            <p class="project-info-content">65,000 SF</p>
                        </li>
                        <li>
                            <p class="project-info-label">Año de Creación</p>
                            <p class="project-info-content">2015</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
        </div>
    </section>
@endsection