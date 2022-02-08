@extends('layouts.app')

@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Contacto</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contacto</li>
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
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Llegar a Nuestra Oficina</h2>
                    <h3 class="section-sub-title">Encuéntrenos en</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fas fa-map-marker-alt mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Nuestra Dirección</h4>
                            <p>740 Col. Carretera los Pinos CP. 25900, Saltillo Coah. MX</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-envelope mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Correo Electrónico</h4>
                            <p>contacto@char-co.com.mx</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-phone-square mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>WhatsApp</h4>
                            <p><a class="btn btn-link text-white" href="https://wa.me/5218442892397?text=prueba%20uno" target="_blank">8440000000</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap-60"></div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="column-title">Nos encantaría leerte</h3>
                    <form id="contact-form" action="#" method="post" role="form">
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Correo Electrónico</label>
                                    <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Asunto</label>
                                    <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mensaje</label>
                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection