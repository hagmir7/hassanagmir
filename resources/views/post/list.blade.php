@extends('base')
@section('content')
<div class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="text-center">
        <h1 class="text-3xl font-bold">Recent Posts</h1>
        <div class="mt-3 text-gray-200">Latest programming tips, tricks, and IT insights!</div>
    </div>
</div>
<div class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        @foreach ($posts as $post)
        <a href="{{ route('blog.show', $post->slug) }}"
            class="group block transition-transform duration-200 hover:-translate-y-1">
            <div class="overflow-hidden rounded-md bg-slate-800">

                {{-- Image / Placeholder --}}
                <div class="aspect-[3/2] overflow-hidden">
                    @if ($post->image)
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}"
                        class="h-full w-full object-cover object-center transition duration-500 group-hover:scale-105"
                        loading="lazy">
                    @else
                    <div
                        class="flex h-full w-full items-center justify-center bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-slate-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-8.5A2.25 2.25 0 0017.25 3.5h-10.5A2.25 2.25 0 004.5 5.75v12.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25v-1.5M15 3.5v4.5h4.5M8.25 15.75l2.25-2.25 2.25 2.25 1.5-1.5 2.25 2.25" />
                            </svg>

                            <span class="mt-2 block text-xs text-slate-500">
                                Article
                            </span>
                        </div>
                    </div>
                    @endif
                </div>

                {{-- Content --}}
                <div class="px-3 pt-4 pb-6">
                    <h2 class="text-lg font-semibold transition-colors group-hover:text-gray-300">
                        {{ $post->title }}
                    </h2>

                    <div class="mt-1 text-xs text-gray-400">
                        {{ $post->created_at->format('M j, Y') }}
                    </div>

                    <div class="mt-2 text-sm text-gray-300">
                        {{ Str::limit($post->description, 120, '...') }}
                    </div>
                </div>

            </div>
        </a>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</div>
@endsection
