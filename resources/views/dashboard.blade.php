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
                        En Novedades del Mimbre llevamos más de 30 años dedicados al arte de transformar lo natural en piezas únicas y llenas de vida. Somos una empresa familiar especializada en la creación y venta de canastas de mimbre hechas a mano, elaboradas con amor, paciencia y dedicación.

                    </p>
                </div>
                
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Mas informacion
              </button>
            <!-- Scrollable modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Novedades del mimbre</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>
                        Cada una de nuestras canastas refleja la experiencia y el cuidado de tres décadas de trabajo artesanal, donde la tradición y la calidad van de la mano. Nos enorgullece mantener vivo este oficio que ha pasado de generación en generación, aportando belleza y funcionalidad a los hogares.
                        Creemos firmemente en el uso del mimbre como un material sostenible, ecológico y hermoso. Por eso, ofrecemos productos únicos, resistentes y versátiles: desde canastas para picnic, decoración y organización, hasta detalles especiales para regalar.
                        En Novedades del Mimbre, honramos el pasado con la mirada puesta en el futuro, brindando siempre lo mejor a cada cliente.
                      </p>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
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
                        <p>Con Daviplata, y aprovecha la comodidad de financiación.</p>
                    </div>
                    <div class="payment-item">
                        <i class="fa-solid fa-route" style="color: #003185;"></i>
                        <h3>Envíos</h3>
                        <p>El precio del envió se fijará con el asesor, teniendo en cuenta la cantidad y transportadora usada, los clientes regulares tienen un descuento especial
                        </p>
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
                        <li><a href="https://www.facebook.com/novedadesdelmimbre"><i class="fa-brands fa-facebook">Facebook</i></a></li>
                        <li><a href="https://chat.whatsapp.com/Hh7l9P9mbWFAeuIWjP4wvt"><i class="fa-brands fa-twitter">WhatsApp</i></a></li>
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

    <script>
        const toggleFiltersButton = document.getElementById('toggle-filters');
    const filterOptions = document.querySelector('.filter-options');

    // Agregar un evento al botón
    toggleFiltersButton.addEventListener('click', () => {
        // Alternar entre las clases 'hidden' y 'visible'
        if (filterOptions.classList.contains('hidden')) {
            filterOptions.classList.remove('hidden');
            filterOptions.classList.add('visible');
            toggleFiltersButton.textContent = 'Ocultar Filtros'; // Cambiar texto del botón
        } else {
            filterOptions.classList.remove('visible');
            filterOptions.classList.add('hidden');
            toggleFiltersButton.textContent = 'Mostrar Filtros'; // Restaurar texto del botón
        }
    });
    </script>
</x-layouts.app>
