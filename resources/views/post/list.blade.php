@extends('base')
@section('content')
<div class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="text-center">
        <h1 class="text-3xl font-bold">Recent Posts</h1>
        <div class="mt-3 text-gray-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
    </div>
</div>
<div class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        @foreach ($posts as $post)
        <a class="hover:translate-y-1" href="{{ route('blog.show', $post->slug) }}">
            <div class="overflow-hidden rounded-md bg-slate-800">
                <div class="aspect-w-3 aspect-h-2">
                    <img class="h-full w-full object-cover object-center" src="{{ Storage::url($post->image) }}" alt="Image post" loading="lazy" />
                </div>
                <div class="px-3 pt-4 pb-6">
                    <h2 class="text-xl font-semibold">{{ $post->name }}</h2>
                    <div class="mt-1 text-xs text-gray-400">{{ $post->created_at->format('M j, Y') }}</div>
                    <div class="mt-2 text-sm">{{ Str::limit($post->description, 120, "...") }}</div>
                </div>
            </div>
        </a>
        @endforeach

    </div>
</div>
@endsection
