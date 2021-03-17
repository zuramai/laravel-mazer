<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        @include('layouts.partials.styles')
    </head>
    <body>
        <div id="app">
            @include('layouts.partials.sidebar')
            
            <div id="main" class='layout-navbar'>
                @include('layouts.partials.header')
                <div id="main-content">

                    <div class="page-heading">
                        <div class="page-title">
                            {{ $header }}
                        </div>
                        {{ $slot }}
                    </div>

                    @include('layouts.partials.footer')
                </div>
            </div>
        </div>

        <!-- Scripts -->
        @include('layouts.partials.scripts')

    </body>
</html>
