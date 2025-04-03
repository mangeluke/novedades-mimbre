<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <header class="header">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <div class="logo-header">
                <h1 class="logo-nov">Novedades del Mimbre</h1>
            </div>
            
            <div class="navegacion">
                <nav>
                    
                    
                </nav>
            </div>
        </header>

        
        <!-- MODAL -->
        

        <!-- SECCIÓN NOSOTROS -->
        <section class="nosotros-import">
            <div class="quienes-somos">
                <h1>Quiénes somos</h1>
                <hr />
                <div class="contenido">
                    <p>
                        En Canastas de Mimbre Elegantes, nos especializamos en la creación de hermosas y duraderas canastas de mimbre.
                        Con más de 20 años de experiencia, combinamos la tradición artesanal con un diseño moderno para ofrecer productos únicos y de alta calidad.
                    </p>
                </div>
                <div class="button-container">
                    <a class="info-btn" href="/pages/nosotros.html">Más información</a>
                </div>
            </div>
        </section>

        <!-- SECCIÓN CARRUSEL -->
        <main>
            <section class="movimi">
                <div class="carousel-container">
                    <div class="carousel-slide">
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <div class="textmm">
                                        <h3>Nombre del Producto {{ $i }}</h3>
                                        <p>Descripción breve del producto.</p>
                                        <p class="price">Precio: $99.99</p>
                                    </div>
                                    <div class="movidi-images">
                                        <img class="product-image" src="{{ asset('images/canasta' . $i . '.png') }}" alt="Producto" />
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="carousel-arrow left"></div>
                    <div class="carousel-arrow right"></div>
                    <ul class="carousel-indicators">
                        @for ($i = 0; $i < 3; $i++)
                            <li data-target="{{ $i }}"></li>
                        @endfor
                    </ul>
                </div>
            </section>

            <!-- SECCIÓN DE PAGO -->
            <section class="payment-section">
                <div class="payment-grid">
                    <div class="payment-item">
                        <img class="img-seguri" src="{{ asset('images/nequi.png') }}" alt="" />
                        <h3>Paga con Nequi o en efectivo</h3>
                        <p>Con Mercado Pago, paga en cuotas y aprovecha la comodidad de financiación.</p>
                    </div>
                    <div class="payment-item">
                        <i class="fa-solid fa-route" style="color: #003185;"></i>
                        <h3>Envío gratis desde $60.000</h3>
                        <p>Con solo estar registrado, tienes envíos gratis en miles de productos.</p>
                    </div>
                    <div class="payment-item">
                        <i class="fa-solid fa-shield" style="color: #010057;"></i>
                        <h3>Seguridad garantizada</h3>
                        <p>Si no te gusta, ¡devuélvelo! Estás siempre protegido.</p>
                    </div>
                </div>
            </section>
        </main>

        <!-- MAPA -->
        <section class="maping">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe
                        width="1200"
                        height="336"
                        id="gmap_canvas"
                        src="https://maps.google.com/maps?q=colombia+ibague+picale%C3%B1a&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        loading="lazy"
                    ></iframe>
                </div>
            </div>
        </section>
        

        <!-- FOOTER -->
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-column">
                    <h3>Sobre Nosotros</h3>
                    <p>
                        Somos una empresa dedicada a la venta de canastas de mimbre hechas a mano, ofreciendo calidad y estética.
                    </p>
                </div>
                <div class="footer-column">
                    <h3>Contacto</h3>
                    <ul>
                        <li><i class="fa-solid fa-phone"></i> +57 123 456 7890</li>
                        <li><i class="fa-solid fa-envelope"></i> info@novedadesdelmimbre.com</li>
                        <li><i class="fa-solid fa-map-marker"></i> Calle 123, Ibagué, Colombia</li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Síguenos</h3>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Novedades del Mimbre. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</x-layouts.app>
