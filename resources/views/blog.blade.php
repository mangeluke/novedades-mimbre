<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <!-- Encabezado -->
        <header class="header">
            <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <div class="logo-header text-center">
                <h1 class="logo-nov">Novedades del Mimbre</h1>
            </div>
        </header>

        <!-- Contenido principal -->
        <main>

            <div class="container">
                <div class="row">
                  
                  <div class="row">
                    <div class="col-sm">

                        <p class="texto-descripcion text-center">
                            En Novedades del Mimbre, nos dedicamos a la fabricación y venta de productos de mimbre de la mejor calidad. Cada una de nuestras canastas refleja la experiencia y el cuidado de tres décadas de trabajo artesanal, donde la tradición y la calidad van de la mano. Nos enorgullece mantener vivo este oficio que ha pasado de generación en generación, aportando belleza y funcionalidad a los hogares.
                       </p>
                    </div>
                    
                  </div>
                </div>
              </div>
            <!-- Sección de descripción -->
            


            <!-- Carrusel de imágenes -->
           
            <div class="container-fluid bg-light">
                <h3 class="text-center my-4">Galería de Productos</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7"> <!-- Limita el ancho máximo -->
                        <div id="galeriaCarousel" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicadores (puntos debajo del carrusel) -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#galeriaCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#galeriaCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#galeriaCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
            
                            <!-- Contenido del carrusel -->
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/imagen1.jpg') }}" class="d-block w-100 img-fluid" alt="Producto 1">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                      </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/imagen2.jpg') }}" class="d-block w-100 img-fluid" alt="Producto 2">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                      </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/imagen4.jpg') }}" class="d-block w-100 img-fluid" alt="Producto 3">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                      </div>
                                </div>
                            </div>
            
                            <!-- Controles del carrusel -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#galeriaCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#galeriaCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            
            
        </main>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</x-layouts.app>