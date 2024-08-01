@extends('layout')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('1.png') }}" class="d-block w-100" alt="Imagem do Hotel 1" style="height: 400px; max-height: 700px;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('2.png') }}" class="d-block w-100" alt="Imagem do Hotel 2" style="height: 400px; max-height: 700px;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('3.png') }}" class="d-block w-100" alt="Imagem do Hotel 3" style="height: 400px; max-height: 700px;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('4.png') }}" class="d-block w-100" alt="Imagem do Hotel 4" style="height: 400px; max-height: 700px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<!-- Seção de Testemunhos -->
<section class="testimonials my-5">
    <div class="container">
        <h2 class="text-center mb-4">AVALIAÇÕES</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <img src="{{ asset('user.png') }}" class="mr-3 rounded-circle" alt="Neal" style="width: 54px; height: 54px;">
                            <div class="media-body">
                                <h5 class="mt-0">Neal</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos voluptate vero sed tempore illo atque beatae asperiores, adipisci dicta quia nisi voluptates impedit perspiciatis, nobis libero.</p>
                            </div>
                        </div>
                        <div class="rating text-left mt-2">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <img src="{{ asset('user.png') }}" class="mr-3 rounded-circle" alt="A" style="width: 54px; height: 54px;">
                            <div class="media-body">
                                <h5 class="mt-0">Matias</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos voluptate vero sed tempore illo atque beatae asperiores, adipisci dicta quia nisi voluptates impedit perspiciatis, nobis libero.</p>
                            </div>
                        </div>
                        <div class="rating text-left mt-2">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <img src="{{ asset('user.png') }}" class="mr-3 rounded-circle" alt="Harry" style="width: 54px; height: 54px;">
                            <div class="media-body">
                                <h5 class="mt-0">Harry</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos voluptate vero sed tempore illo atque beatae asperiores, adipisci dicta quia nisi voluptates impedit perspiciatis, nobis libero.</p>
                            </div>
                        </div>
                        <div class="rating text-left mt-2">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nova Seção com Mapa e Informações de Contato -->
<section id="contact-section" class="contact-info my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019933207989!2d144.9610339157118!3d-37.81224127975117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad64326ec8a9e7f%3A0x3b2e4bd0c9af4b8c!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sin!4v1601873266424!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-details">
                        <h4>Ligue</h4>
                        <p><i class="fas fa-phone-alt"></i> +91 8529636985</p>
                        <p><i class="fas fa-phone-alt"></i> +91 1122233358</p>
                        <h4>Siga</h4>
                        <p><a href="#"><i class="fab fa-twitter"></i> Twitter</a></p>
                        <p><a href="#"><i class="fab fa-facebook"></i> Facebook</a></p>
                        <p><a href="#"><i class="fab fa-instagram"></i> Instagram</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Footer -->
<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Sobre os hotéis</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos voluptate vero sed tempore illo atque beatae asperiores, adipisci dicta quia nisi voluptates impedit perspiciatis, nobis libero culpa error officiis totam?</p>
            </div>
            <div class="col-md-3">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Quartos</a></li>
                    <li><a href="#">Instalações</a></li>
                    <li><a href="#">Contate-nos</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </div>
            
            <div class="col-md-3">
                <h5>Siga-nos</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<style>
    .contact-info {
        background-color: #f9f9f9;
        padding: 60px 0;
    }

    .contact-info .contact-details {
        background-color: white;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .contact-info .contact-details h4 {
        margin-top: 0;
    }

    .contact-info .contact-details p {
        margin: 5px 0;
    }

    .testimonials .card {
        background: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 15px 0;
        padding: 20px;
        text-align: center;
    }

    .testimonials .rating span {
        color: #ffc107;
        font-size: 20px;
    }

    .footer {
        background-color: #f9f9f9;
        color: white;
        padding: 20px 0;
    }

    .footer h5 {
        color: black;
    }

    .footer p,
    .footer a {
        color: black;
    }

    .footer a:hover {
        color: black;
    }
    
    #imagem img{
        margin-bottom: 100px;
    }
</style>
@endsection