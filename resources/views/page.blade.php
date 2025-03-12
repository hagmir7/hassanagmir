@extends('base')
@section('content')
<div class="mx-auto max-w-screen-lg px-3 py-6">
    <h1 class="text-center text-3xl font-bold">{{ $page->title }}</h1>
    <div class="mt-2 text-center text-sm text-gray-400">
        <!-- -->{{ __("Updated at") }} {{ $page->updated_at->format('M j, Y') }}
    </div>
    <div class="mx-auto mt-5 max-w-prose">
        <div class="prose mt-8 space-y-0 prose-h2:text-white prose-h3:mt-3 prose-h2:mt-3 prose-h3:text-white prose-img:rounded-lg text-left prose-strong:text-gray-200 text-gray-300 prose-a:text-white">
            {!! $page->content !!}
        </div>
    </div>
</div>
@endsection
