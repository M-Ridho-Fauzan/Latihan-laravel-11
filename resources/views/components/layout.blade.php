<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-600">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
    <title>Web makan gratis</title>
</head>

<body class="h-full bg-gray-600 text-white dark:bg-gray-900 dark:text-white"">

    <div class="min-h-full">
        {{-- Head page --}}
        <x-navbar></x-navbar>

        <x-header>{{ $pageTitle }}</x-header>
        {{-- End Head --}}
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
