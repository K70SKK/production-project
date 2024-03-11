<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var currentDate = new Date();
                
                var day = currentDate.getDate();
                var month = currentDate.getMonth() + 1; 
                var year = currentDate.getFullYear();

                var formattedDate = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + year;
                
                
                var currentTime = currentDate.toLocaleTimeString('en-GB');

                var dateTimeString = formattedDate + ' ' + currentTime;

                
                var headerElement = document.querySelector('header');
                var dateAndTimeElement = document.createElement('div');
                dateAndTimeElement.innerHTML = dateTimeString;
                headerElement.appendChild(dateAndTimeElement);
            });
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
