@extends('base')
@section('content')
    <div class="mx-auto max-w-screen-lg px-3 py-6">
        <h1 class="text-center text-3xl font-bold">{{ $post->title }}</h1>
        <div class="mt-2 text-center text-sm text-gray-400">By
            <!-- -->Hassane
            <!-- --> on
            <!-- -->
            <!-- -->{{ $post->created_at->format('M j, Y') }}
        </div>
        <div class="mx-auto mt-5 max-w-prose">
            <div class="aspect-w-3 aspect-h-2">
                <img class="h-full w-full rounded-lg object-cover object-center" src="{{ Storage::url($post->image) }}" alt="Image post" loading="lazy">
            </div>
            <div class="prose mt-8 space-y-0 prose-img:rounded-lg text-left prose-strong:text-gray-200 text-gray-300 prose-a:text-white">
                {!! $post->content !!}
            </div>
        </div>
    </div>
@endsection
