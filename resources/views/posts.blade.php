<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <header class="header">
            <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <div class="logo-header text-center">
                <h1 class="logo-nov">Novedades del Mimbre</h1>
            </div>
        </header>
        <main>
            <!-- Sección de descripción -->
            <section class="descripcion-productos text-center mt-4">
                <h2 class="titulo-descripcion">Descubre la Belleza del Mimbre</h2>
                <p class="texto-descripcion">
                    Nuestros productos de mimbre están elaborados artesanalmente, ofreciendo calidad y elegancia en cada detalle.
                    Ideales para decorar tu hogar con un toque rústico y natural.
                </p>
            </section>

            <!-- Barra de búsqueda y filtros -->
            <section class="producto-contenido mt-4">
                <h2 id="productos" class="producti-h2 text-center">Nuestros productos</h2>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="search-box-wrapper position-relative">
                            <input type="text" id="search-box" placeholder="Buscar productos..." class="form-control ps-5" />
                            <i class="fa-solid fa-magnifying-glass position-absolute top-50 start-0 translate-middle-y ms-3" style="color: #000000;"></i>
                            <!-- Contenedor para mostrar sugerencias -->
                            <ul id="suggestions" class="position-absolute w-100 bg-white border rounded mt-2 hidden"></ul>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <button id="toggle-filters" class="btn btn-outline-secondary">Mostrar/Ocultar Filtros</button>
                    </div>
                </div>
                <div id="filter-options" class="mt-4 hidden">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="category" class="form-label">Categoría:</label>
                            <select id="category" class="form-select">
                                <option value="all">Todos</option>
                                <option value="electronics">Tamaño</option>
                                <option value="books">Novedades</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="price-range" class="form-label">Precio:</label>
                            <div class="d-flex align-items-center">
                                <input type="range" id="price-range" min="10000" max="1000000" step="10" class="form-range me-2" />
                                <span id="price-value">10,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Productos -->
            <section class="producto-contenido mt-4">
                <h2 id="productos" class="producti-h2 text-center">Nuestros productos de Mimbre</h2>
                <div class="container top-productos">
                    <div class="row" id="product-list">
                        <!-- Producto 1 -->
                        <div class="col-md-3 col-sm-6 mb-4 product-item" data-name="Canasta chica">
                            <div class="card-product">
                                <div class="container-img position-relative">
                                    <img src="{{ asset('images/imagen1.jpg') }}" alt="Canasta de Mimbre" class="img-fluid" />
                                    <span class="discond position-absolute top-0 end-0 bg-danger text-white px-2 py-1 rounded">-13%</span>
                                </div>
                                <div class="content-card-product text-center">
                                    <h3>Canasta chica</h3>
                                    <p class="precio">$4.60 <span>$5.30</span></p>
                                    <button class="btn-agregar btn btn-primary w-100">Agregar al carrito</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 2 -->
                        <div class="col-md-3 col-sm-6 mb-4 product-item" data-name="Canasta mediana">
                            <div class="card-product">
                                <div class="container-img position-relative">
                                    <img src="{{ asset('images/imagen2.jpg') }}" alt="Canasta de Mimbre" class="img-fluid" />
                                    <span class="discond position-absolute top-0 end-0 bg-danger text-white px-2 py-1 rounded">-13%</span>
                                </div>
                                <div class="content-card-product text-center">
                                    <h3>Canasta mediana</h3>
                                    <p class="precio">$4.60 <span>$5.30</span></p>
                                    <button class="btn-agregar btn btn-primary w-100">Agregar al carrito</button>
                                </div>
                            </div>
                        </div>
                        <!-- Repetir para otros productos -->
                    </div>
                </div>
            </section>

            <section class="promos container mt-4" id="lista-1">
                <h2 class="text-center">Promociones</h2>
                <div class="row">
                    <!-- Promo 1 -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie text-center">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen5.jpg') }}" alt="Promo 1" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 1</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn btn-success w-100" data-id="1">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie text-center">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen5.jpg') }}" alt="Promo 1" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 1</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn btn-success w-100" data-id="1">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie text-center">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen5.jpg') }}" alt="Promo 1" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 1</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn btn-success w-100" data-id="1">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie text-center">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen5.jpg') }}" alt="Promo 1" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 1</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn btn-success w-100" data-id="1">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie text-center">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen5.jpg') }}" alt="Promo 1" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 1</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn btn-success w-100" data-id="1">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie text-center">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen5.jpg') }}" alt="Promo 1" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 1</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn btn-success w-100" data-id="1">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie text-center">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen5.jpg') }}" alt="Promo 1" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 1</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn btn-success w-100" data-id="1">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="categorie text-center">
                            <div class="categorie-img">
                                <img src="{{ asset('images/imagen5.jpg') }}" alt="Promo 1" class="img-fluid" />
                            </div>
                            <div class="categorie-1">
                                <h3>Promo 1</h3>
                                <div class="prices">
                                    <p class="price-1">$199</p>
                                    <p class="precio">$159</p>
                                </div>
                                <a href="#" class="agregar-carrito btn btn-success w-100" data-id="1">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <!-- Repetir para otras promociones -->
                </div>
            </section>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Lista de productos predefinidos
        const products = [
            { name: "Canasta chica", image: "{{ asset('images/imagen1.jpg') }}", price: "$4.60" },
            { name: "Canasta mediana", image: "{{ asset('images/imagen2.jpg') }}", price: "$5.30" },
            { name: "Canasta grande", image: "{{ asset('images/imagen3.jpg') }}", price: "$6.00" },
            { name: "Mimbre decorativo", image: "{{ asset('images/imagen4.jpg') }}", price: "$7.50" },
            { name: "Cestas personalizadas", image: "{{ asset('images/imagen5.jpg') }}", price: "$8.00" },
            { name: "Accesorios de mimbre", image: "{{ asset('images/imagen6.jpg') }}", price: "$3.50" }
        ];

        // Obtener referencias a los elementos
        const searchBox = document.getElementById('search-box');
        const suggestionsList = document.getElementById('suggestions');
        const productList = document.getElementById('product-list');

        // Función para filtrar los productos
        function filterSuggestions(query) {
            return products.filter(product =>
                product.name.toLowerCase().includes(query.toLowerCase())
            );
        }

        // Función para actualizar las sugerencias
        function updateSuggestions() {
            const query = searchBox.value.trim();
            suggestionsList.innerHTML = ''; // Limpiar sugerencias anteriores

            if (query.length > 0) {
                const filteredProducts = filterSuggestions(query);

                if (filteredProducts.length > 0) {
                    filteredProducts.forEach(product => {
                        const li = document.createElement('li');
                        li.textContent = product.name;
                        li.classList.add('list-group-item', 'cursor-pointer');
                        li.addEventListener('click', () => {
                            searchBox.value = product.name; // Rellenar el campo de búsqueda
                            suggestionsList.classList.add('hidden'); // Ocultar sugerencias

                            // Mostrar solo el producto seleccionado
                            displayFilteredProducts([product]);
                        });
                        suggestionsList.appendChild(li);
                    });
                    suggestionsList.classList.remove('hidden'); // Mostrar contenedor
                } else {
                    suggestionsList.classList.add('hidden'); // Ocultar si no hay coincidencias
                }
            } else {
                suggestionsList.classList.add('hidden'); // Ocultar si el campo está vacío
                displayAllProducts(); // Mostrar todos los productos nuevamente
            }
        }

        // Función para mostrar todos los productos
        function displayAllProducts() {
            productList.innerHTML = ''; // Limpiar lista actual
            products.forEach(product => {
                productList.appendChild(createProductCard(product));
            });
        }

        // Función para mostrar productos filtrados
        function displayFilteredProducts(filteredProducts) {
            productList.innerHTML = ''; // Limpiar lista actual
            filteredProducts.forEach(product => {
                productList.appendChild(createProductCard(product));
            });
        }

        // Función para crear una tarjeta de producto
        function createProductCard(product) {
            const col = document.createElement('div');
            col.className = 'col-md-3 col-sm-6 mb-4 product-item';
            col.setAttribute('data-name', product.name);

            col.innerHTML = `
                <div class="card-product">
                    <div class="container-img position-relative">
                        <img src="${product.image}" alt="${product.name}" class="img-fluid" />
                        <span class="discond position-absolute top-0 end-0 bg-danger text-white px-2 py-1 rounded">-13%</span>
                    </div>
                    <div class="content-card-product text-center">
                        <h3>${product.name}</h3>
                        <p class="precio">${product.price} <span>$5.30</span></p>
                        <button class="btn-agregar btn btn-primary w-100">Agregar al carrito</button>
                    </div>
                </div>
            `;

            return col;
        }

        // Agregar eventos al campo de búsqueda
        searchBox.addEventListener('input', updateSuggestions);
        searchBox.addEventListener('blur', () => {
            setTimeout(() => suggestionsList.classList.add('hidden'), 200); // Ocultar al perder foco
        });

        // Mostrar todos los productos por defecto
        displayAllProducts();
    </script>
</x-layouts.app>