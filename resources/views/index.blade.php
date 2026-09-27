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
                        <span>
                            <img class="h-36 w-36 hover:translate-y-1 rounded-xl" src="{{ Storage::url($project->image) }}"
                                alt="Project Web Design" loading="lazy" />
                        </span>
                    </div>
                    <div>
                        <div class="flex flex-col items-center gap-y-2 md:flex-row">
                            <span class="hover:text-cyan-400">
                                <div class="text-xl font-semibold mt-3 md:mt-0">{{ $project->name }}</div>
                            </span>
                            <div class="ml-0 md:ml-3 flex gap-2 flex-wrap">
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
    </div>
@endsection
