<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="h-screen">
        <x-notification type="success" description="Placeholder description" class="text-white"></x-notification>
        <header class="p-4 mx-auto bg-gray-400">
            <h1 class="font-bold text-lg">My Site: {{ $title }}</h1>
        </header>

        <div class="flex p-4">

            @if (isset($sidebar))    
                <aside class="w-1/4">
                    {{ $sidebar }}
                </aside>
            @endif

            <main class="flex-1 bg-gray-500">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>