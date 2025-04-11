<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <!-- Encabezado -->
        <header class="header">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <div class="logo-header text-center">
                <h1 class="logo-nov">Novedades del Mimbre</h1>
            </div>
        </header>
        <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cartModalLabel">Carrito de Compras</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del carrito -->
                        <ul id="cart-items" class="list-group">
                            <!-- Los productos en el carrito se cargarán aquí dinámicamente -->
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Ir al pago</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-2">
            <div class="row align-items-center bg-amber-100"> <!-- Alinea verticalmente el contenido -->
                <div class="col-sm text-center text-sm-start">
                    <h2 class="titulo-descripcion text-center">Descubre la Belleza del Mimbre</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm text-center text-sm-start">
                    <p class="texto-descripcion text-center">
                        Nuestros productos de mimbre están elaborados artesanalmente,<br>
                        ofreciendo calidad y elegancia en cada detalle. <br>
                        Ideales para decorar tu hogar con un toque rústico y natural. <br>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-buscar">
            <div class="row">
              <div class="col-sm">
                <h2 id="productos" class="producti-h2 text-center">Nuestros productos</h2>
              </div>
              <div class="row">
                <div class="col-sm">
                    <p class="texto-descripcion text-center">
                        Explora nuestra amplia gama de productos de mimbre, desde cestas decorativas hasta muebles únicos.<br>
                        Encuentra el complemento perfecto para tu hogar.
                    </p>
                </div>
            </div>
              <div class="row">
                <div class="col-sm">
                    <input type="text" id="search-box" placeholder="Buscar productos..." class="form-control ps-5" />
                  </div>
              </div>
              
                
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="search-box-wrapper position-relative">
                    
                    <i class="fa-solid fa-magnifying-glass position-absolute top-50 start-0 translate-middle-y ms-3" style="color: #000000;"></i>
                    <!-- Contenedor para mostrar sugerencias -->
                    <ul id="suggestions" class="position-absolute w-100 bg-white border rounded mt-2 hidden"></ul>
                </div>
            </div>
        </div>

        <div class="top-0 end-0 m-3">
            <button onclick="openCartView()" class="btn btn-primary position-relative">
                <!-- Ícono de carrito -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket2" viewBox="0 0 16 16">
                    <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0z"/>
                    <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6z"/>
                </svg>
                <!-- Contador de productos en el carrito -->
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    3 <!-- Este número representa la cantidad de productos en el carrito -->
                    <span class="visually-hidden">Productos en el carrito</span>
                </span>
            </button>
        </div>

        <div style="margin-top: 4rem;" class="container bg-amber-300">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <button type="button" class="btn btn-secondary w-100 mt-2" data-bs-toggle="modal" data-bs-target="#scrollableModal{{ $loop->index + 1 }}">
                                Ver más detalles
                            </button>
                            <button style="margin-top: 1rem" class="btn-agregar btn btn-primary w-100" onclick="agregarProductoAlCarrito({{ $product['id'] }}, 1, {{ $product['price'] }})">
                                Agregar al carrito
                            </button>
                        </div>
                    </div>
                </div>
        
                <!-- Modal del producto -->
                <div class="modal fade" id="scrollableModal{{ $loop->index + 1 }}" tabindex="-1" aria-labelledby="scrollableModalLabel{{ $loop->index + 1 }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="scrollableModalLabel{{ $loop->index + 1 }}">Detalles del producto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $product['description'] }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>

            
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
                            displayFilteredProducts([product]); // Mostrar solo el producto seleccionado
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
    <script>
        function openCartView() {
        window.location.href = "/cart"; // Redirige al usuario a la página del carrito
    }
    </script>
    <script>
        function openCartView() {
            const cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
            const cartItemsList = document.getElementById('cart-items');
    
            // Limpiar el contenido anterior del carrito
            cartItemsList.innerHTML = '';
    
            // Ejemplo de productos en el carrito (puedes reemplazar esto con datos reales)
            const cartItems = [
                { name: 'Producto 1', price: '$10.00' },
                { name: 'Producto 2', price: '$15.00' },
                { name: 'Producto 3', price: '$20.00' }
            ];
    
            // Cargar los productos en el modal
            cartItems.forEach(item => {
                const li = document.createElement('li');
                li.className = 'list-group-item';
                li.textContent = `${item.name} - ${item.price}`;
                cartItemsList.appendChild(li);
            });
    
            // Mostrar el modal
            cartModal.show();
        }
    </script>

        <script>
          function agregarProductoAlCarrito(idProducto, cantidad, precio) {
    const idCliente = {{ auth()->id() ?? 0 }}; // Obtener el ID del usuario autenticado

    // Obtener o crear el carrito
    fetch('/carrito/crear-o-recuperar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ idCliente })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error al obtener o crear el carrito');
        }
        return response.json();
    })
    .then(carrito => {
        const idCarrito = carrito.id_carrito;

        // Agregar el producto al carrito
        return fetch('/carrito/agregar-producto', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                idCarrito,
                idProducto,
                cantidad,
                precio
            })
        });
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error al agregar el producto al carrito');
        }
        return response.json();
    })
    .then(data => {
        // Mostrar alerta de éxito
        Swal.fire({
            icon: 'success',
            title: '¡Producto agregado!',
            text: data.message,
            confirmButtonText: 'Aceptar'
        });
    })
    .catch(error => {
        console.error('Error:', error);

        // Mostrar alerta de error
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se pudo agregar el producto al carrito.',
            confirmButtonText: 'Aceptar'
        });
    });
}
        </script>
    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</x-layouts.app>

