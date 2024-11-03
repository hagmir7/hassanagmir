<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : config('app.name') }}</title>
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
