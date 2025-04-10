<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <header class="header">
            <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <div class="logo-header">
                <h1 class="logo-nov">Novedades del Mimbre</h1>
                
            </div>
            
        </header>

        
        <main>
            <!-- Sección de Descripción -->
            <section class="descripcion-productos">
                <h2 class="titulo-descripcion">Puede contactarse por acá</h2>
                <p class="texto-descripcion">
                    En Novedades del Mimbre, nos dedicamos a la fabricación y venta de productos de mimbre de la mejor calidad.
                </p>
            </section>
        </div>
        <div class="scroll-layout">
          <div class="carousel">
            <ul class="content">
              <li><img src="images/imagen1.jpg" alt="" srcset=""></li>
              <li><img src="images/imagen2.jpg" alt="" srcset=""></li>
              <li><img src="images/imagen3.jpg" alt="" srcset=""></li>
              <li><img src="images/imagen4.jpg" alt=""></li>
              <li><img src="images/imagen5.jpg" alt="" srcset=""></li>
              <li><img src="images/imagen6.jpg" alt=""></li>
              <li><img src="images/imagen7.jpg" alt=""></li>
              <li><img src="images/imagen8.jpg" alt=""></li>
              <li><img src="images/imagen9.jpg" alt=""></li>
              <li></li>
            </ul>
          </div>
        </div>
        </main>
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</x-layouts.app>