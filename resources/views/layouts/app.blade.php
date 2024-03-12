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
            
            // Format date in UK format (DD/MM/YYYY)
            var day = currentDate.getDate();
            var month = currentDate.getMonth() + 1; // Months are zero-based
            var year = currentDate.getFullYear();
    
            var formattedDate = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + year;
            
            // Format time
            var currentTime = currentDate.toLocaleTimeString('en-GB');
    
            var dateTimeString = 'Date and Time: ' + formattedDate + ' ' + currentTime;
    
            // Log date and time for debugging
            console.log('Date and Time:', dateTimeString);
    
            // Insert date and time as a link to datetime.blade.php at the beginning of the body
            var bodyElement = document.querySelector('body');
            var dateAndTimeElement = document.createElement('div');
            dateAndTimeElement.innerHTML = '<a href="' + '{{ route("datetime") }}' + '">' + dateTimeString + '</a>';
            
            // Log body element for debugging
            console.log('Body Element:', bodyElement);
    
            // Insert the date and time link at the beginning of the body
            if (bodyElement) {
                bodyElement.insertBefore(dateAndTimeElement, bodyElement.firstChild);
            } else {
                console.error('Body Element not found!');
            }
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
