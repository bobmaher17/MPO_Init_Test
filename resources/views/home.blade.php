<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .btn {
            @apply py-2 px-4 font-semibold rounded-lg shadow-md;
        }

        .btn-green {
            @apply text-white bg-green-500 hover: bg-green-700;
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden md:max-w-2xl flex items-center justify-center h-screen">
        <div class="font-semibold">MPO INIT TEST - Maherdika Erlambang (Bandung, Indonesia)</div>
        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold rounded-lg border shadow-lg p-10">
            Task 1
        </button>
        <button class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-lg border shadow-lg p-10">
            Task 2
        </button>
    </div>
</body>

</html>