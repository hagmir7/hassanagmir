<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : config('app.name') }}</title>
    <meta name="keywords" content="Hassan agmir, full stack devloper, agmir, hassan, web developer, programmer">
    <meta name="description" content="{{ isset($description) ? $description : "Hassan agmir is a passionate Full Stack Developer From Morocco, With over 20 projects under his belt, He specialize in creating efficient and scalable web applications." }}">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ isset($title) ? $title : config('app.name') }}">
    <meta itemprop="description" content="{{ isset($description) ? $description : "Hassan agmir is a passionate Full Stack Developer From Morocco, With over 20 projects under his belt, He specialize in creating efficient and scalable web applications." }}">
    <meta itemprop="image" content="/logo.png">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="hass_agmir">
    <meta name="twitter:title" content="{{ isset($title) ? $title : config('app.name') }}">
    <meta name="twitter:description" content="{{ isset($description) ? $description : "Hassan agmir is a passionate Full Stack Developer From Morocco, With over 20 projects under his belt, He specialize in creating efficient and scalable web applications." }}">
    <meta name="twitter:creator" content="@hassan_agmir">
    <meta name="twitter:site" content="@hassan_agmir">
    <meta name="twitter:image" content="/logo.png">
    <!-- Open Graph data -->
    <meta property="og:title" content="{{ isset($title) ? $title : config('app.name') }}" />
    <meta property="og:type" content="webiste" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:image" content="/logo.png" />
    <meta property="og:description" content="{{ isset($description) ? $description : "Hassan agmir is a passionate Full Stack Developer From Morocco, With over 20 projects under his belt, He specialize in creating efficient and scalable web applications." }}" />
    <meta property="og:local" content="en" />
    <meta name="google-site-verification" content="daLG-sJGDlNerqeQvM5VPB7QcC03s7ujUiNFjKrIC9U" />

    <meta name="author" content="www.hassanagmir.com">
    <link rel="canonical" href="{{ request()->fullUrl() }}" />

    <link rel="icon" type="image/png" href="/logo.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/logo.pngg" sizes="32x32">
    <link rel="icon" type="image/png" href="/logo.png" sizes="512x512">
    <link rel="icon" type="image/png" href="/logo.png" sizes="192x192">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-900 text-gray-100">
    <div class="mx-auto max-w-screen-lg px-3 py-6">
        <div class="flex flex-col gap-y-3 sm:flex-row sm:items-center sm:justify-between"><a href="/">
                <div
                    class="flex gap-2 justify-center items-center bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-xl font-bold text-transparent">
                    <img src="/logo.png" class="mr-1 h-7 w-7 stroke-cyan-600" alt="Hassan Agmir">
                    <span class="text-2xl mt-1">Hassan Agmir</span>
                </div>
            </a>
            <nav>
                <ul class="flex gap-x-3 font-medium justify-center items-center md:items-end mt-3 md:mt-0 text-gray-200">
                    <li class="hover:text-white"><a href="/blogs">Blogs</a></li>
                    <li class="hover:text-white"><a href="/projects">Projects</a></li>
                    <li class="hover:text-white"><a href="/contact">Contact me</a></li>
                    <li class="hover:text-white"><a target="_blank" href="https://github.com/hagmir7">GitHub</a></li>
                </ul>
            </nav>
        </div>
    </div>

    @yield('content')
    <x-footer />

    <div class="mx-auto max-w-screen-lg px-3 py-6">
        <div class="border-t border-gray-600 pt-5">
            <div class="text-sm text-gray-200">© Copyright
                <!-- -->2025
                <!-- --> by
                <!-- -->Hassan Agmir
                <!-- -->.
                Built with ❤ by Me
                <!-- -->
            </div>
        </div>
</body>

<script>
    const tags = document.querySelectorAll('.tags');
    const colors = [
        'bg-lime-400 text-lime-900',
        'bg-fuchsia-400 text-fuchsia-900',
        'bg-sky-400 text-sky-900',
        'bg-rose-400 text-rose-900'
    ];

    tags.forEach(function (tag, index) {
        tag.classList.add(...colors[index % colors.length].split(' '));
    });
</script>
</html>
