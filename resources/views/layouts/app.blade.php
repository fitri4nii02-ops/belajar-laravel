<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1"
        type="module">
    </script>

    <style type="text/tailwindcss">
        @theme {
            --color-primary-50: #f9f5f1;
            --color-primary-100: #eee3d8;
            --color-primary-200: #d7bfa8;
            --color-primary-300: #c4a48b;
            --color-primary-400: #a98268;
            --color-primary-500: #795548;
            --color-primary-600: #684638;
            --color-primary-700: #55382e;
            --color-primary-800: #4a2528;
            --color-primary-900: #351a1d;
        }
    </style>

    <title>@yield('title', 'Laravel View')</title>
</head>

<body class="flex min-h-screen flex-col bg-[#F9F5F1] text-[#4A2528] antialiased">

    @include('partials.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>