<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    {{-- <html class="bg-white dark:bg-gray-950 scheme-light dark:scheme-dark"> --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</head>

<body class="h-full">

    <div class="">
        <x-navbar></x-navbar>

        <x-header>{{ $title }}</x-header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-2xl font-reguler tracking-tight text-white ">
                <!-- Your content -->
                {{ $slot }}
            </div>
        </main>
    </div>


</body>

</html>
