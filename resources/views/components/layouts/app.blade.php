<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('client/assets/favicon/favicon.ico') }}" type="image/x-icon" />

        <!-- Libs CSS -->
        <link rel="stylesheet" href="{{ asset('client/assets/css/libs.bundle.css') }}" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('client/assets/css/theme.bundle.css') }}" />

        <style>
            :root {
                --primary-color: {{ $shop->primary_color }};
                --secondary-color: {{ $shop->secondary_color }};
                --bs-primary: {{ $shop->primary_color }};
                --bs-danger: {{ $shop->primary_color }};
            }
        </style>


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <title>{{ $title ?? 'DigiShop' }}</title>

        @livewireStyles
    </head>
    <body>
        @livewire('partials.modals')

        @livewire('partials.navbar')

        <main>
            {{ $slot }}
        </main>

        @livewire('partials.footer')

        <!-- JAVASCRIPT -->

        <!-- Vendor JS -->
        <script src="{{ asset('client/assets/js/vendor.bundle.js') }}"></script>

        <!-- Theme JS -->
        <script src="{{ asset('client/assets/js/theme.bundle.js') }}"></script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

        @livewireScripts
    </body>
</html>
