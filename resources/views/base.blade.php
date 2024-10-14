<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-900 text-gray-100">
    <div class="mx-auto max-w-screen-lg px-3 py-6">
        <div class="flex flex-col gap-y-3 sm:flex-row sm:items-center sm:justify-between"><a
                href="/demo/astro-boilerplate">
                <div
                    class="flex justify-center items-center bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-xl font-bold text-transparent">
                    <svg class="mr-1 h-10 w-10 stroke-cyan-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M0 0h24v24H0z" stroke="none"></path>
                        <rect x="3" y="12" width="6" height="8" rx="1"></rect>
                        <rect x="9" y="8" width="6" height="12" rx="1"></rect>
                        <rect x="15" y="4" width="6" height="16" rx="1"></rect>
                        <path d="M4 20h14"></path>
                    </svg>
                    <span class="text-2xl">Hassan Agmir</span>
                </div>
            </a>
            <nav>
                <ul class="flex gap-x-3 font-medium text-gray-200">
                    <li class="hover:text-white"><a href="/demo/astro-boilerplate/posts">Blogs</a></li>
                    <li class="hover:text-white"><a href="/projects">Projects</a></li>
                    <li class="hover:text-white"><a target="_blank" href="https://github.com/hagmir7">GitHub</a></li>

                </ul>
            </nav>
        </div>
    </div>

    @yield('content')


    <div class="mx-auto max-w-screen-lg px-3 py-6">
        <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
            <div class="sm:w-7/12">
                <div class="text-3xl font-bold">Subscribe to my <span
                        class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Newsletters</span>
                </div>
                <p class="mt-3 text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vero
                    esse non molestias eos excepturi, inventore atque cupiditate.</p>
            </div>
            <div class="w-full sm:w-5/12">
                <form
                    class="flex rounded-full bg-slate-800 px-4 py-2 focus-within:ring-2 focus-within:ring-cyan-600 hover:ring-2 hover:ring-cyan-600">
                    <input class="w-full appearance-none bg-slate-800 focus:outline-none" /><button
                        class="ml-2 shrink-0 rounded-full bg-gradient-to-br from-sky-500 to-cyan-400 px-3 py-1 text-sm font-medium hover:from-sky-700 hover:to-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600/50"
                        type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>

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

</html>
