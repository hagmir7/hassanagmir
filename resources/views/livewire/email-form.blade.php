<div class="w-full sm:w-5/12">

    <form wire:submit.prevent='save'
        class="flex rounded-full bg-slate-800 px-4 py-2 focus-within:ring-2 focus-within:ring-cyan-600 hover:ring-2 hover:ring-cyan-600">
        <input placeholder="Your email" wire:model='email'
            class="w-full appearance-none bg-slate-800 focus:outline-none" />

        <button
            class="ml-2 shrink-0 rounded-full bg-gradient-to-br from-sky-500 to-cyan-400 px-3 py-1 text-sm font-medium hover:from-sky-700 hover:to-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600/50"
            type="submit">
            Subscribe
        </button>


    </form>

    @error('email')
    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
    @enderror

    @if (session()->has('message'))
    <div class="bg-green-500 text-white p-2 my-3 rounded">
        {{ session('message') }}
    </div>
    @endif
</div>
