@extends('base')

@section('content')
<article class="mx-auto max-w-4xl px-4 py-8 lg:px-8">
    <!-- Hero Section -->
    <header class="text-center mb-12">
        <h1
            class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-white via-gray-100 to-gray-300 bg-clip-text text-transparent leading-tight mb-6">
            {{ $post->title }}
        </h1>

        <!-- Meta Information -->
        <div class="flex items-center justify-center space-x-6 text-gray-400 text-md">
            <div class="flex items-center space-x-2 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle h6 w-6">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                    <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                </svg>
                <span class="font-medium mt-1">Hassan Agmir</span>
            </div>
            <div class="flex justify-center items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="icon icon-tabler icons-tabler-filled icon-tabler-calendar-event h6 w-6">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M16 2a1 1 0 0 1 .993 .883l.007 .117v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 1.993 -.117l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z" />
                    <path d="M8 14h2v2h-2z" />
                </svg>
                <time datetime="{{ $post->created_at->format('Y-m-d') }}" class="font-medium mt-1">
                    {{ $post->created_at->format('M j, Y') }}
                </time>
            </div>
        </div>
    </header>

    <!-- Featured Image -->
    <div class="relative mb-12 group">
        <div
            class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-2xl shadow-2xl">
            <img class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105"
                src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="mx-auto max-w-4xl">
        <div class="prose prose-lg prose-invert prose-headings:font-bold prose-headings:tracking-tight
                        prose-h1:text-4xl prose-h1:mb-6 prose-h1:text-white
                        prose-h2:text-3xl prose-h2:mt-12 prose-h2:mb-4 prose-h2:text-gray-100 prose-h2:border-b prose-h2:border-gray-700 prose-h2:pb-2
                        prose-h3:text-2xl prose-h3:mt-8 prose-h3:mb-3 prose-h3:text-gray-200
                        prose-p:text-gray-300 prose-p:leading-relaxed prose-p:mb-6
                        prose-a:text-blue-400 prose-a:no-underline prose-a:font-medium hover:prose-a:text-blue-300 prose-a:transition-colors
                        prose-strong:text-gray-100 prose-strong:font-semibold
                        prose-em:text-gray-200 prose-em:italic
                        prose-blockquote:border-l-4 prose-blockquote:border-blue-500 prose-blockquote:bg-gray-800/50
                        prose-blockquote:rounded-r-lg prose-blockquote:py-3 prose-blockquote:px-6 prose-blockquote:my-8
                        prose-blockquote:text-gray-200 prose-blockquote:italic prose-blockquote:font-medium
                        prose-ul:text-gray-300 prose-ol:text-gray-300
                        prose-li:mb-2 prose-li:leading-relaxed
                        prose-code:bg-gray-800 prose-code:text-blue-300 prose-code:px-2 prose-code:py-1 prose-code:rounded prose-code:text-sm
                        prose-pre:bg-gray-900 prose-pre:border prose-pre:border-gray-700 prose-pre:rounded-lg
                        prose-img:rounded-xl prose-img:shadow-lg prose-img:my-8
                        prose-hr:border-gray-700 prose-hr:my-12
                        max-w-none">
            {!! $post->content !!}
        </div>
    </div>

    <!-- Bottom Spacing -->
    <div class="mt-16"></div>
</article>

<!-- Optional: Add some custom styles for enhanced effects -->
<style>
    /* Custom scrollbar for better aesthetics */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #1f2937;
    }

    ::-webkit-scrollbar-thumb {
        background: #4b5563;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #6b7280;
    }

    /* Smooth reading experience */
    .prose p {
        text-align: justify;
        hyphens: auto;
    }

    /* Enhanced link hover effects */
    .prose a {
        position: relative;
        text-decoration: none;
    }

    .prose a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: currentColor;
        transition: width 0.3s ease;
    }

    .prose a:hover::after {
        width: 100%;
    }
</style>
@endsection
