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
            <!-- Barra de búsqueda -->
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
                </div>
            </section>
            <!-- Productos -->
            <section class="producto-contenido mt-4">
                <h2 id="productos" class="producti-h2 text-center">Nuestros productos de Mimbre</h2>
                <div class="container top-productos">
                    <div class="row" id="product-list">
                        <!-- Los productos se cargarán aquí dinámicamente -->
                    </div>
                </div>
            </section>
            <!-- Promociones -->
            <section class="promos container mt-4" id="lista-1">
                <h2 class="text-center">Promociones</h2>
                <div class="row" id="promo-list">
                    <!-- Las promociones se cargarán aquí dinámicamente -->
                </div>
            </section>
            <section class="carrito-compras container mt-4">
                <h2 class="text-center">Carrito de Compras</h2>
                <div class="cart-content">
                    <ul id="cart-items" class="list-group">
                        <!-- Los elementos del carrito se cargarán aquí -->
                    </ul>
                    <div class="total-container mt-3">
                        <h4>Total: $<span id="cart-total">0.00</span></h4>
                    </div>
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
        ];

        // Lista de promociones predefinidas
        const promotions = [
            { name: "Canasta grande", image: "{{ asset('images/imagen5.jpg') }}", originalPrice: "$199", discountedPrice: "$159" },
            { name: "Cesta decorativa", image: "{{ asset('images/imagen6.jpg') }}", originalPrice: "$120", discountedPrice: "$99" },
            { name: "Mimbre personalizado", image: "{{ asset('images/imagen7.jpg') }}", originalPrice: "$250", discountedPrice: "$200" },
            { name: "Accesorios especiales", image: "{{ asset('images/imagen8.jpg') }}", originalPrice: "$50", discountedPrice: "$39" }
        ];

        // Obtener referencias a los elementos
        const searchBox = document.getElementById('search-box');
        const suggestionsList = document.getElementById('suggestions');
        const productList = document.getElementById('product-list');
        const promoList = document.getElementById('promo-list');

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
                        <p class="precio">${product.price}</p>
                        <button class="btn-agregar btn btn-primary w-100">Agregar al carrito</button>
                    </div>
                </div>
            `;
            return col;
        }

        // Función para crear una tarjeta de promoción
        function createPromotionCard(promotion) {
            const col = document.createElement('div');
            col.className = 'col-md-3 col-sm-6 mb-4';
            col.innerHTML = `
                <div class="categorie text-center">
                    <div class="categorie-img">
                        <img src="${promotion.image}" alt="${promotion.name}" class="img-fluid" />
                    </div>
                    <div class="categorie-1">
                        <h3>${promotion.name}</h3>
                        <div class="prices">
                            <p class="price-1">${promotion.originalPrice}</p>
                            <p class="precio">${promotion.discountedPrice}</p>
                        </div>
                        <a href="#" class="agregar-carrito btn btn-success w-100" data-id="1">Agregar al Carrito</a>
                    </div>
                </div>
            `;
            return col;
        }

        

        // Mostrar todos los productos y promociones por defecto
        function displayAllItems() {
            productList.innerHTML = ''; // Limpiar lista de productos
            promoList.innerHTML = ''; // Limpiar lista de promociones
            products.forEach(product => {
                productList.appendChild(createProductCard(product));
            });
            promotions.forEach(promotion => {
                promoList.appendChild(createPromotionCard(promotion));
            });
        }

         function addToCart(name, price) {
            const itemIndex = cart.findIndex(item => item.name === name);
            if (itemIndex !== -1) {
                // Si el producto ya existe, aumentar la cantidad
                cart[itemIndex].quantity += 1;
            } else {
                // Si es nuevo, agregarlo al carrito
                cart.push({ name, price, quantity: 1 });
            }
            updateCartUI();
        }

        // Función para actualizar la interfaz del carrito
        function updateCartUI() {
            cartItems.innerHTML = ''; // Limpiar el carrito
            let total = 0;

            cart.forEach(item => {
                const li = document.createElement('li');
                li.className = 'list-group-item d-flex justify-content-between align-items-center';
                li.innerHTML = `
                    ${item.name} (${item.quantity}) - $${(item.price * item.quantity).toFixed(2)}
                    <button class="btn btn-danger btn-sm remove-item" data-name="${item.name}">Eliminar</button>
                `;
                cartItems.appendChild(li);

                total += item.price * item.quantity;
            });

            cartTotal.textContent = total.toFixed(2); // Actualizar el total
            cartCount.textContent = cart.length;
        }

        // Función para resaltar productos y promociones coincidentes
        function highlightMatchingItems(query) {
            const allProducts = productList.querySelectorAll('.product-item');
            const allPromotions = promoList.querySelectorAll('.col-md-3');

            // Resaltar productos coincidentes
            allProducts.forEach(product => {
                const productName = product.getAttribute('data-name').toLowerCase();
                if (productName.includes(query.toLowerCase())) {
                    product.classList.add('highlight'); // Resaltar
                } else {
                    product.classList.remove('highlight'); // Quitar resaltado
                }
            });

            // Resaltar promociones coincidentes
            allPromotions.forEach(promotion => {
                const promotionName = promotion.querySelector('h3').textContent.toLowerCase();
                if (promotionName.includes(query.toLowerCase())) {
                    promotion.classList.add('highlight'); // Resaltar
                } else {
                    promotion.classList.remove('highlight'); // Quitar resaltado
                }
            });
        }

        // Función para actualizar las sugerencias
        function updateSuggestions() {
            const query = searchBox.value.trim();
            suggestionsList.innerHTML = ''; // Limpiar sugerencias anteriores

            if (query.length > 0) {
                // Filtrar productos y promociones
                const filteredProducts = products.filter(product =>
                    product.name.toLowerCase().includes(query.toLowerCase())
                );
                const filteredPromotions = promotions.filter(promotion =>
                    promotion.name.toLowerCase().includes(query.toLowerCase())
                );

                // Mostrar sugerencias
                const allFilteredItems = [...filteredProducts, ...filteredPromotions];
                if (allFilteredItems.length > 0) {
                    allFilteredItems.forEach(item => {
                        const li = document.createElement('li');
                        li.textContent = item.name;
                        li.classList.add('list-group-item', 'cursor-pointer');
                        li.addEventListener('click', () => {
                            searchBox.value = item.name; // Rellenar el campo de búsqueda
                            suggestionsList.classList.add('hidden'); // Ocultar sugerencias
                            highlightMatchingItems(item.name); // Resaltar coincidencias
                        });
                        suggestionsList.appendChild(li);
                    });
                    suggestionsList.classList.remove('hidden'); // Mostrar contenedor
                } else {
                    suggestionsList.classList.add('hidden'); // Ocultar si no hay coincidencias
                }

                // Resaltar coincidencias en la lista
                highlightMatchingItems(query);
            } else {
                suggestionsList.classList.add('hidden'); // Ocultar sugerencias
                productList.querySelectorAll('.product-item').forEach(product => {
                    product.classList.remove('highlight'); // Quitar resaltado
                });
                promoList.querySelectorAll('.col-md-3').forEach(promotion => {
                    promotion.classList.remove('highlight'); // Quitar resaltado
                });
            }
        }

        // Agregar eventos al campo de búsqueda
        searchBox.addEventListener('input', updateSuggestions);
        searchBox.addEventListener('blur', () => {
            setTimeout(() => suggestionsList.classList.add('hidden'), 200); // Ocultar al perder foco
        });

        
        // Mostrar todos los productos y promociones por defecto
        displayAllItems();
    </script>
    <style>
        /* Estilo para resaltar productos coincidentes */
        .highlight {
            border: 2px solid #ffcc00; /* Borde amarillo */
            box-shadow: 0 0 10px rgba(255, 204, 0, 0.5); /* Sombra suave */
        }
    </style>
</x-layouts.app>