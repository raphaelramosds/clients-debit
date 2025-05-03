<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="flex h-screen">
        <div class="flex-1 flex bg-[linear-gradient(90deg,rgba(27,40,69,1)_16%,rgba(39,64,96,1)_100%)] text-white">
            <div class="m-auto text-center">
                @isset($greeting)
                    {{$greeting}}
                @endisset
            </div>
        </div>        
        <div class="flex-1 flex">
            <div class="m-auto">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
