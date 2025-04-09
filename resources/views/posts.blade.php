<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <header class="header">
            <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <div class="logo-header">
                <h1 class="logo-nov">Novedades del Mimbre</h1>
            </div>
        </header>
        <main>
            <section class="descripcion-productos">
                <h2 class="titulo-descripcion">Descubre la Belleza del Mimbre</h2>
                <p class="texto-descripcion">
                    Nuestros productos de mimbre están elaborados artesanalmente, ofreciendo calidad y elegancia en cada detalle.
                    Ideales para decorar tu hogar con un toque rústico y natural.
                </p>
            </section>
            <section class="producto-contenido">
                <h2 id="productos" class="producti-h2">Nuestros productos</h2>
                <div class="product-filter">
                    <div class="search-box-wrapper">
                        <input type="text" id="search-box" placeholder="Buscar productos..." />
                        <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
                        <!-- Contenedor para mostrar sugerencias -->
                        <ul id="suggestions" class="hidden"></ul>
                    </div>
                    <div class="filter-options hidden">
                        <label for="category">Categoría:</label>
                        <select id="category">
                            <option value="all">Todos</option>
                            <option value="electronics">Tamaño</option>
                            <option value="books">Novedades</option>
                        </select>
                        <label for="price-range">Precio:</label>
                        <input type="range" id="price-range" min="10000" max="1000000" step="10" />
                        <span>10,000</span>
                    </div>
                </div>
                <button id="toggle-filters">Mostrar Filtros</button>
            </section>
            <section class="producto-contenido">
                <h2 id="productos" class="producti-h2">Nuestros productos de Mimbre</h2>
                <div class="container top-productos">
                    <div class="row">
                        <!-- Producto 1 -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card-product">
                                <div class="container-img">
                                    <img src="{{ asset('images/imagen1.jpg') }}" alt="Canasta de Mimbre" class="img-fluid" />
                                    <span class="discond">-13%</span>
                                </div>
                                <div class="content-card-product">
                                    <h3>Canasta Iris</h3>
                                    <p class="precio">$4.60 <span>$5.30</span></p>
                                    <button class="btn-agregar">Agregar al carrito</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 2 -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card-product">
                                <div class="container-img">
                                    <img src="{{ asset('images/imagen2.jpg') }}" alt="Canasta de Mimbre" class="img-fluid" />
                                    <span class="discond">-13%</span>
                                </div>
                                <div class="content-card-product">
                                    <h3>Canasta Iris</h3>
                                    <p class="precio">$4.60 <span>$5.30</span></p>
                                    <button class="btn-agregar">Agregar al carrito</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 3 -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card-product">
                                <div class="container-img">
                                    <img src="{{ asset('images/imagen3.jpg') }}" alt="Canasta de Mimbre" class="img-fluid" />
                                    <span class="discond">-13%</span>
                                </div>
                                <div class="content-card-product">
                                    <h3>Canasta Iris</h3>
                                    <p class="precio">$4.60 <span>$5.30</span></p>
                                    <button class="btn-agregar">Agregar al carrito</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 4 -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card-product">
                                <div class="container-img">
                                    <img src="{{ asset('images/imagen4.jpg') }}" alt="Canasta de Mimbre" class="img-fluid" />
                                    <span class="discond">-13%</span>
                                </div>
                                <div class="content-card-product">
                                    <h3>Canasta Iris</h3>
                                    <p class="precio">$4.60 <span>$5.30</span></p>
                                    <button class="btn-agregar">Agregar al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="promos container" id="lista-1">
                <h2>Promociones</h2>
                <div class="row">
                    <!-- Promo 1 -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen5.jpg') }}" alt="Promo 1" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 1</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <!-- Promo 2 -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen6.jpg') }}" alt="Promo 2" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 2</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn-3" data-id="2">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <!-- Promo 3 -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen1.jpg') }}" alt="Promo 3" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 3</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <!-- Promo 4 -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen2.jpg') }}" alt="Promo 4" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 4</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Lista de productos o categorías predefinidas
        const products = [
            "Canasta chica",
            "Canasta mediana",
            "Canasta grande",
            "Mimbre decorativo",
            "Cestas personalizadas",
            "Accesorios de mimbre"
        ];
        // Obtener referencias a los elementos
        const searchBox = document.getElementById('search-box');
        const suggestionsList = document.getElementById('suggestions');
        // Función para filtrar las opciones
        function filterSuggestions(query) {
            // Filtrar productos que coincidan con el texto ingresado
            return products.filter(product =>
                product.toLowerCase().includes(query.toLowerCase())
            );
        }
        // Función para actualizar las sugerencias
        function updateSuggestions() {
            const query = searchBox.value.trim(); // Obtener el texto ingresado
            suggestionsList.innerHTML = ''; // Limpiar las sugerencias anteriores
            if (query.length > 0) {
                const filteredProducts = filterSuggestions(query); // Filtrar productos
                if (filteredProducts.length > 0) {
                    // Mostrar las sugerencias
                    filteredProducts.forEach(product => {
                        const li = document.createElement('li');
                        li.textContent = product;
                        li.addEventListener('click', () => {
                            searchBox.value = product; // Rellenar el campo de búsqueda
                            suggestionsList.classList.add('hidden'); // Ocultar las sugerencias
                        });
                        suggestionsList.appendChild(li);
                    });
                    suggestionsList.classList.remove('hidden'); // Mostrar el contenedor
                } else {
                    suggestionsList.classList.add('hidden'); // Ocultar si no hay coincidencias
                }
            } else {
                suggestionsList.classList.add('hidden'); // Ocultar si el campo está vacío
            }
        }
        // Agregar eventos al campo de búsqueda
        searchBox.addEventListener('input', updateSuggestions); // Actualizar al escribir
        searchBox.addEventListener('blur', () => {
            setTimeout(() => suggestionsList.classList.add('hidden'), 200); // Ocultar al perder foco
        });
    </script>
</x-layouts.app>