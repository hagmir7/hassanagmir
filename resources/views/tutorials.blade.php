@extends('base')

@section('content')
<section class="relative py-8 sm:py-12 md:py-16 lg:py-20 overflow-hidden min-h-screen">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0"
            style="background-image: radial-gradient(circle at 25px 25px, #3B82F6 2px, transparent 0), radial-gradient(circle at 75px 75px, #10B981 2px, transparent 0); background-size: 100px 100px;">
        </div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-8 sm:mb-12 md:mb-16 animate-pulse">
            <!-- Search Bar -->
            <div
                class="inline-flex w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2 sm:py-3 rounded-full bg-white shadow-md border border-blue-100 mb-4 sm:mb-6 hover:shadow-xl transition-all duration-300">
                <!-- Search Icon -->
                <div
                    class="flex items-center justify-center p-2 sm:p-3 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 shadow-md flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" sm:width="20" sm:height="20"
                        md:width="24" md:height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-search text-white">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>
                </div>

                <!-- Search Input -->
                <input type="text" placeholder="Search..."
                    class="flex-1 bg-transparent focus:outline-none text-gray-700 placeholder-gray-400 text-sm sm:text-base md:text-lg min-w-0" />
            </div>

            <!-- Main Heading -->
            <h2 class="text-2xl sm:text-3xl md:text-3xl lg:text-4xl xl:text-5xl font-bold text-white mb-4 sm:mb-6 leading-tight px-2 mt-5">
                Start Your Coding
                <span
                    class="bg-gradient-to-r from-blue-600 via-purple-600 to-teal-600 bg-clip-text text-transparent block sm:inline">Journey</span>
            </h2>

            <!-- Subtitle -->
            <p
                class="text-base sm:text-lg md:text-xl lg:text-2xl text-white max-w-xs sm:max-w-md md:max-w-2xl lg:max-w-3xl mx-auto leading-relaxed px-4">
                With easy tutorials and hands-on projects for every
                <span class="font-semibold text-gray-300">LEVEL.</span>
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8 max-w-7xl mx-auto">

            <!-- PHP Card -->
           @foreach ($categories as $category)
               <div
                    class="group bg-slate-800 rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-md hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1 sm:hover:-translate-y-2 border border-slate-700 relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-full rounded-xl sm:rounded-2xl flex items-center justify-center mb-4 sm:mb-6 group-hover:scale-105 sm:group-hover:scale-110 transition-transform duration-300">
                            <img class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 object-contain"
                                src="{{ Storage::url($category->logo) }}"
                                alt="Learn {{ $category->name }}" loading="lazy">
                        </div>
                        <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-white mb-2 sm:mb-4 transition-colors text-center">
                            {{ $category->name }}</h3>
                        <p class="text-gray-400 mb-2 sm:mb-4 leading-relaxed text-center text-sm sm:text-base md:text-lg lg:text-xl">
                            A popular programming language</p>
                    </div>
                </div>
           @endforeach


        </div>
    </div>

    <!-- Responsive Floating Elements -->
    <div
        class="absolute top-10 sm:top-20 left-4 sm:left-10 w-8 h-8 sm:w-12 sm:h-12 md:w-16 md:h-16 lg:w-20 lg:h-20 bg-blue-200 rounded-full opacity-20 animate-bounce hidden sm:block">
    </div>
    <div class="absolute top-20 sm:top-40 right-8 sm:right-20 w-6 h-6 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 bg-purple-200 rounded-full opacity-20 animate-bounce hidden md:block"
        style="animation-delay: 1s;"></div>
    <div class="absolute bottom-10 sm:bottom-20 left-8 sm:left-20 w-10 h-10 sm:w-16 sm:h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 bg-teal-200 rounded-full opacity-20 animate-bounce hidden sm:block"
        style="animation-delay: 2s;"></div>
    <div class="absolute bottom-20 sm:bottom-40 right-4 sm:right-10 w-4 h-4 sm:w-8 sm:h-8 md:w-10 md:h-10 lg:w-12 lg:h-12 bg-green-200 rounded-full opacity-20 animate-bounce hidden lg:block"
        style="animation-delay: 0.5s;"></div>
</section>
@endsection
