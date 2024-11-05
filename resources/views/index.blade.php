@extends('base')


@section('content')
<x-section />

<div class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="flex items-baseline justify-between">
        <div class="mb-6 text-xl md:text-2xl font-bold">
            <span>Recent</span>
            <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span>
        </div>
        <div class="text-sm"><a href="{{ route('projects.list') }}">View all Projects →</a></div>
    </div>


    <div class="flex flex-col gap-6">
        @foreach ($projects as $project)
        <div class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-3 md:flex-row">
            <div class="shrink-0">
                <a href="#!">
                    <img class="h-36 w-36 hover:translate-y-1 rounded-xl" src="{{ Storage::url($project->image) }}"
                        alt="Project Web Design" loading="lazy" />
                </a>
            </div>
            <div>
                <div class="flex flex-col items-center gap-y-2 md:flex-row">
                    <a class="hover:text-cyan-400" href="#!">
                        <div class="text-xl font-semibold mt-3 md:mt-0">{{ $project->name }}</div>
                    </a>
                    <div class="ml-0 mdml-3 flex gap-2 flex-wrap">
                        @foreach ($project->tags as $tag)
                        <div class="rounded-md px-2 py-1 text-xs font-semibold tags">
                            {{ $tag->name }}
                        </div>
                        @endforeach
                    </div>
                </div>
                <p class="mt-3 text-gray-400">{{ $project->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="mb-6 text-xl md:text-2xl font-bold">
        <div class="flex items-baseline justify-between">
            <div>
                <span>Recent</span>
                <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Posts</span>
            </div>
            <div class="text-sm"><a href="{{ route('blog.list') }}">View all Posts →</a></div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

        @foreach ($posts as $post)
        <a class="hover:translate-y-1" href="{{ route('blog.show', $post->slug) }}">
            <div class="overflow-hidden rounded-md bg-slate-800">
                <div class="aspect-w-3 aspect-h-2">
                    <img class="h-full w-full object-cover object-center" src="{{ Storage::url($post->image) }}"
                        alt="Image post" loading="lazy" />
                </div>
                <div class="px-3 pt-4 pb-6">
                    <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                    <div class="mt-1 text-xs text-gray-400">{{ $post->created_at->format('M j, Y') }}</div>
                    <div class="mt-2 text-sm">{{ Str::limit($post->description, 120, "...") }}</div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
