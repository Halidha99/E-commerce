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

    <!-- Font Awesome (optional for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Figtree', sans-serif;
            background-color: #f9f9f9;
        }

        .guest-layout-container {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        /* Default container for guest pages */
        .guest-content {
            flex: 1;
            display: flex;
            align-items: stretch;
            justify-content: center;
        }

        /* Centered fallback for Breeze-style forms */
        .centered-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            background: #f9f9f9;
            padding: 2rem;
        }

        @media (max-width: 768px) {
            .guest-content {
                flex-direction: column;
            }
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-900">
    <div class="guest-layout-container">
        <!-- Main content slot -->
        <div class="guest-content">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
