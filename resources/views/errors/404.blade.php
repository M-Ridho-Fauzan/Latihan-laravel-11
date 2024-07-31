<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
</head>

<body class="bg-gray-600 items-center flex justify-center h-full">

    <img src="https://external-preview.redd.it/4MddL-315mp40uH18BgGL2-5b6NIPHcDMBSWuN11ynM.jpg?width=960&crop=smart&auto=webp&s=b98d54a43b3dac555df398588a2c791e0f3076d9"
        class="absolute h-full w-full object-cover" />

    <div class="inset-0 bg-black opacity-25 absolute"></div>

    <div class="text-center m-auto z-10 rounded-md px-5 py-10" style="background-color: rgba(75, 85, 99, 0.918)">
        <h1 class="text-3xl font-bold text-red-600">404</h1>
        <div class="text-white">
            <p class="text-2xl font-semibold mt-4">Page Not Found</p>
            <p class="mt-3 mb-3">The page you are looking for might have been removed, had its name changed,
                or is
                temporarily unavailable.</p>
            <p class="mt-3 mb-3">
                <a href="javascript:history.back()"
                    class="rounded-md px-3 py-2 my-2 bg-gray-800 hover:bg-gray-700 hover:text-white">Go
                    Home</a>
            </p>
        </div>
    </div>

</body>

</html>
