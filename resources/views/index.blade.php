@extends('base')


@section('content')
<div class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="flex flex-col items-center md:flex-row md:justify-between md:gap-x-24">
        <div>
            <h1 class="text-3xl font-bold">Hi there, I&#x27;m <span
                    class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Hassan</span>
                👋</h1>
            <p class="mt-6 text-xl leading-9">A Passionate Full Stack Developer From Morocco, With over 20 projects
                under my belt, I specialize in creating efficient and scalable web applications. I’m passionate
                about coding and love turning ideas into functional digital solution.
            </p>
            <div class="mt-3 flex gap-1">
                <a href="https://x.com/agmir_hassan" target="_blank">
                    <img class="h-12 w-12 hover:translate-y-1 duration-300" src="/images/twitter-icon.png"
                        alt="Twitter icon" loading="lazy" />
                </a>
                <a href="https://www.facebook.com/agmir.hassan/">
                    <img class="h-12 w-12 hover:translate-y-1 duration-300" src="/images/facebook-icon.png"
                        alt="Facebook icon" loading="lazy" />
                </a>
                <a href="https://www.linkedin.com/in/hassan-agmir" arget="_blank">
                    <img class="h-12 w-12 hover:translate-y-1 duration-300" src="/images/linkedin-icon.png"
                        alt="Linkedin icon" loading="lazy" />
                </a>
                <a href="https://www.youtube.com/@hassan_agmir">
                    <img class="h-12 w-12 hover:translate-y-1 duration-300" src="/images/youtube-icon.png"
                        alt="Youtube icon" loading="lazy" />
                </a>
            </div>
        </div>
        <div class="shrink-0"><img class="h-80 w-64" src="/images/avatar.svg" alt="Avatar image" loading="lazy" />
        </div>
    </div>
</div>

<div class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="mb-6 text-2xl font-bold">Recent <span
            class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Projects</span></div>
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


<div class="mx-auto max-w-screen-lg px-3 py-6">
    <div class="mb-6 text-2xl font-bold">
        <div class="flex items-baseline justify-between">
            <div>Recent <span
                    class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Posts</span>
            </div>
            <div class="text-sm"><a href="#!/posts">View all Posts →</a></div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

        @foreach ($posts as $post)
        <a class="hover:translate-y-1" href="{{ route('post.show', $post->slug) }}">
            <div class="overflow-hidden rounded-md bg-slate-800">
                <div class="aspect-w-3 aspect-h-2">
                    <img class="h-full w-full object-cover object-center" src="{{ Storage::url($post->image) }}" alt="Image post" loading="lazy" />
                </div>
                <div class="px-3 pt-4 pb-6">
                    <h2 class="text-xl font-semibold">{{  $post->name }}</h2>
                    <div class="mt-1 text-xs text-gray-400">{{ $post->created_at->format('M j, Y') }}</div>
                    <div class="mt-2 text-sm">{{ Str::limit($post->description, 120, "...") }}</div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
