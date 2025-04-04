<?php

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
}; ?>

<div class="flex flex-col gap-6">

    <h1 class="text-white text-center text-2xl font-bold">{{ __('Iniciar Sesión') }}</h1>

    <p class="text-white text-center text-2xl font-bold">Ingrese su correo electrónico y contraseña a continuación para iniciar sesión</p>
    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <style>
        body{
            background-image: url('{{ asset('images/logo3.jpg') }}');
                background-size: cover; /* Ajusta la imagen al tamaño completo */
                background-position: center; /* Centra la imagen */
                background-repeat: no-repeat; /* Evita repetición de la imagen */
                min-height: 100vh;
        }
        .form-container {
        background-color: rgba(255, 255, 255, 0.5); /* Fondo blanco con transparencia */
        padding: 50px; /* Espaciado interno */
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
        <x-auth-session-status class="text-center" :status="session('status')" />
    <form wire:submit="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Correo Electronico')"
            type="email"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <div class="relative">
            <flux:input
                wire:model="password"
                :label="__('Contraseña')"
                type="password"
                required
                autocomplete="current-password"
                :placeholder="__('Contraseña')"
            />

            @if (Route::has('password.request'))
                <flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                    {{ __('Olvidas tu contraseña?') }}
                </flux:link>
            @endif
        </div>

        <!-- Remember Me -->
        <flux:checkbox wire:model="remember" :label="__('Recordarme')" />

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Iniciar sesion') }}</flux:button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('No tienes cuenta?') }}
            <flux:link :href="route('register')" wire:navigate>{{ __('Registrate') }}</flux:link>
            <flux:link :href="route('home')" wire:navigate>{{ __('Inicio') }}</flux:link>
        </div>
    @endif
    </div>
</div>
