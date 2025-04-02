<div>
    <!-- Contenido Dinámico -->
    @if ($selectedMenu === 'inicio')
        <div class="bg-gray-200 p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-4">Bienvenido al Inicio</h2>
            <p>Esta es la página de inicio.</p>
        </div>
    @elseif ($selectedMenu === 'productos')
        <div class="bg-gray-200 p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-4">Lista de Productos</h2>
            <ul class="space-y-2">
                <li>Producto 1</li>
                <li>Producto 2</li>
                <li>Producto 3</li>
            </ul>
        </div>
    @endif
</div>