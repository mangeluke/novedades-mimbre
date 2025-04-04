<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirectIntended(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="flex flex-col gap-6">
    <h1 class="text-white text-center text-2xl font-bold">{{ __('Registrese Aqui') }}</h1>

    <p class="text-white text-center text-2xl font-bold">Ingrese sus datos a continuación para crear su cuenta</p>
    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />
    <style>
        body{
            background-image: url('{{ asset('images/logo4.jpg') }}');
                background-size: cover; /* Ajusta la imagen al tamaño completo */
                background-position: center; /* Centra la imagen */
                background-repeat: no-repeat; /* Evita repetición de la imagen */
                min-height: 100vh;
        }
        .form-container {
        background-color: rgba(255, 255, 255, 0.5); /* Fondo blanco con transparencia */
        padding: 30px; /* Espaciado interno */
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra ligera */
        max-width: 500px; /* Ancho máximo del formulario */
        margin: 0 auto; /* Centrar horizontalmente */
        margin-top: 50px; /* Espacio desde la parte superior */
    }

    /* Estilo para el texto dentro del formulario */
    .form-container h1,
    .form-container p {
        color: #333; /* Texto oscuro para mejorar la legibilidad */
    }
    flux:input {
        background-color: rgba(255, 255, 255, 0.7); /* Fondo blanco con transparencia */
        border: 1px solid #ddd; /* Borde ligero */
        padding: 10px; /* Espaciado interno */
        border-radius: 5px; /* Bordes redondeados */
        color: #333; /* Texto oscuro */
    }

    /* Estilo para el botón de envío */
    flux:button {
        background-color: #007bff; /* Color azul para el botón */
        color: white; /* Texto blanco */
        font-weight: bold; /* Texto en negrita */
        border: none; /* Sin borde */
        padding: 10px; /* Relleno interno */
        border-radius: 5px; /* Bordes redondeados */
        cursor: pointer; /* Cursor de puntero */
    }

    /* Hover para el botón */
    flux:button:hover {
        background-color: #0056b3; /* Cambio de color al pasar el cursor */
    }
    </style>
    <div class="form-container">
    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <flux:input
            wire:model="name"
            :label="__('Nombre')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('nombre completo')"
            

        />

        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Correo Electronico')"
            type="email"
            required
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Contraseña')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
        />

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirmar contraseña')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirmar password')"
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Crear Cuenta') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('¿Ya tienes una cuenta?') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('Inicia Sesion') }}</flux:link>
        <flux:link :href="route('home')" wire:navigate>{{ __('Inicio') }}</flux:link>

    </div>
    </div>
</div>
