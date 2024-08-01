@extends('layout')

@section('content')
<h1>Bem-vindo ao Sistema de Reservas de Hotel</h1>
<div style="display: flex; justify-content: center; align-items: center; margin: 0; padding: 0;">
    <img src="{{ asset('4.png') }}" alt="Imagem do Hotel" style="width: 100%; height: auto; max-height: 700px;">
</div>

<!-- Seção de Testemunhos -->
<section class="testimonials my-5">
    <div class="container">
        <h2 class="text-center mb-4">TESTIMONIALS</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">neal</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos voluptate vero sed tempore illo atque beatae asperiores, adipisci dicta quia nisi voluptates impedit perspiciatis, nobis libero.</p>
                        <div class="rating">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">a</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos voluptate vero sed tempore illo atque beatae asperiores, adipisci dicta quia nisi voluptates impedit perspiciatis, nobis libero.</p>
                        <div class="rating">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">harry</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos voluptate vero sed tempore illo atque beatae asperiores, adipisci dicta quia nisi voluptates impedit perspiciatis, nobis libero.</p>
                        <div class="rating">
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
                    <h4>Call us</h4>
                    <p>+91 8529636985</p>
                    <p>+91 1122233358</p>
                    <h4>Siga</h4>
                    <p><a href="#">Twitter</a></p>
                    <p><a href="#">Facebook</a></p>
                    <p><a href="#">Instagram</a></p>
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
                <h5>About Get Hotels</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quos voluptate vero sed tempore illo atque beatae asperiores, adipisci dicta quia nisi voluptates impedit perspiciatis, nobis libero culpa error officiis totam?</p>
            </div>
            <div class="col-md-3">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Facilities</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Follow us</h5>
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
        background-color: #333;
        color: white;
        padding: 20px 0;
    }

    .footer h5 {
        color: white;
    }

    .footer p,
    .footer a {
        color: #bbb;
    }

    .footer a:hover {
        color: white;
    }
</style>
@endsection