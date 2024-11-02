@extends('base')


@section('content')
<div class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="mb-6 text-2xl font-bold">Recent <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></div>
    <div class="flex flex-col gap-6">

        @foreach ($projects as $project)
        <div class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-3 md:flex-row">
            <div class="shrink-0">
                <a href="#!">
                    <img class="h-36 w-36 hover:translate-y-1 rounded-xl" src="{{ Storage::url($project->image) }}" alt="Project Web Design" loading="lazy" />
                </a>
            </div>
            <div>
                <div class="flex flex-col items-center gap-y-2 md:flex-row"><a class="hover:text-cyan-400" href="#!">
                        <div class="text-xl font-semibold">{{ $project->name }}</div>
                    </a>
                    <div class="ml-3 flex gap-2">
                        @foreach ($project->tags as $tag)
                        <div class="rounded-md px-2 py-1 text-xs font-semibold bg-fuchsia-400 text-fuchsia-900">
                            {{ $tag->name }}
                        </div>
                        @endforeach

                        <div class="rounded-md px-2 py-1 text-xs font-semibold bg-lime-400 text-lime-900">Web design
                        </div>
                        <div class="rounded-md px-2 py-1 text-xs font-semibold bg-sky-400 text-sky-900">Tailwind.css
                        </div>
                        <div class="rounded-md px-2 py-1 text-xs font-semibold bg-rose-400 text-rose-900">TypeScript
                        </div>
                    </div>
                </div>
                <p class="mt-3 text-gray-400">{{ $project->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
